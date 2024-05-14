<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function checkDomainAvailability(Request $request)
    {
        $response = Http::post('https://api.suresupport.com/domain-check', [
            'domain' => $request->input('domain'),
            'auth_token' => 'OgdzH5RRDW8CodT3eEaAvgJ9DujbxPcC',
        ]);

        if ($response->successful()) {
            $data = $response->json()['data'];
            return view('domain')->with('data', $data);
        } else {
            return 'Failed to check domain availability.';
        }

        Log::info('Request parameters', [
            'domain' => $request->input('domain'),
            'auth_token' => 'OgdzH5RRDW8CodT3eEaAvgJ9DujbxPcC',
        ]);
    }
}
