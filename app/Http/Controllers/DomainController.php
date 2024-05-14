<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DomainController extends Controller
{
    public function checkDomainAvailability($input, $authToken)
    {
        $tlds = ['.com', '.net', '.org', '.info', '.biz', '.us', '.uk', '.ca']; // Your list of TLDs
        $results = [];
        $client = new Client();
        $endpoint = 'https://api.suresupport.com/domain-check';

        // Check if the input contains a TLD
        if (strpos($input, '.') !== false) {
            list($sld, $tld) = explode('.', $input, 2);
            $tld = '.' . $tld; // Ensure the TLD starts with a dot

            // Check the domain with the specified TLD
            $results[] = $this->checkSingleDomain($sld, $tld, $authToken, $client, $endpoint);

            // Check the domain with other TLDs
            foreach ($tlds as $otherTld) {
                if ($otherTld != $tld) {
                    $results[] = $this->checkSingleDomain($sld, $otherTld, $authToken, $client, $endpoint);
                }
            }
        } else {
            // If no TLD is specified, check against all TLDs
            foreach ($tlds as $tld) {
                $results[] = $this->checkSingleDomain($input, $tld, $authToken, $client, $endpoint);
            }
        }

        return $results;
    }

    private function checkSingleDomain($sld, $tld, $authToken, $client, $endpoint)
    {
        $domain = $sld . $tld;

        try {
            $response = $client->post($endpoint, [
                'json' => [
                    'domain' => $domain,
                    'auth_token' => $authToken
                ],
                'headers' => [
                    'Content-Type' => 'application/json'
                ],
                'verify' => false // Set to false for testing, but use a CA bundle in production
            ]);

            $responseData = json_decode($response->getBody()->getContents(), true);

            if ($response->getStatusCode() == 200 && $responseData['status']) {
                return [
                    'domain' => $responseData['data']['domain'],
                    'available' => $responseData['data']['available']
                ];
            } else {
                return [
                    'domain' => $domain,
                    'available' => false,
                    'error' => 'Error checking domain'
                ];
            }
        } catch (\Exception $e) {
            return [
                'domain' => $domain,
                'available' => false,
                'error' => 'Exception: ' . $e->getMessage()
            ];
        }
    }

    public function checkDomain(Request $request)
    {
        $input = $request->input('domain'); // Use 'domain' as the input field name
        $authToken = 'OgdzH5RRDW8CodT3eEaAvgJ9DujbxPcC';

        $results = $this->checkDomainAvailability($input, $authToken);

        session(['results' => $results]);

        return redirect()->back();
    }
}