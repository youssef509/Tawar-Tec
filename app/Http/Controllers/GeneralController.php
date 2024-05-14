<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GeneralController extends Controller
{

    public function show() 
    {
        return view(view: 'index');
    }
    public function index()
    {
        return view('domain');
    }

    public function checkDomainAvailability(Request $request)
    {
        $domain = $request->input('domain');
        $tlds = $request->input('tlds');
    
        $results = [];
    
        foreach ($tlds as $tld) {
            $response = $this->checkSingleDomain($domain, $tld);
        
            // Check if 'available' key exists in $response before accessing it
            $results[$tld] = isset($response['available']) ? $response['available'] : false;
        }
    
        return view('domain', ['domain' => $domain, 'results' => $results]);
    }
    
    
    private function checkSingleDomain($domain, $tld)
    {
        $response = Http::post('https://api.suresupport.com/domain-check', [
            'domain' => $domain . '.' . $tld,
            'auth_token' => 'OgdzH5RRDW8CodT3eEaAvgJ9DujbxPcC'
        ]);
    
        return $response->json()['data'];
    }
    

    public function getCatalog()
    {
        $response = Http::post('https://api.suresupport.com/catalog', [
            'auth_token' => 'OgdzH5RRDW8CodT3eEaAvgJ9DujbxPcC',
        ]);

        if ($response->successful()) {
            $catalogData = $response->json();
            return view('catalog')->with('catalogData', $catalogData);
        } else {
            return 'failed to connect';
        }
    }
}
