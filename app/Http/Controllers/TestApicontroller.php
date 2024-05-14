<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TestApiController extends Controller
{
    public function fetchAccounts()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post('https://api.suresupport.com/account-list', [
            'auth_token' => 'OgdzH5RRDW8CodT3eEaAvgJ9DujbxPcC',
        ]);

        if ($response->successful()) {
            $data = $response->json()['data']['data'];
            return view('api')->with('accounts', $data);
        } else {
            return 'Failed to fetch accounts.';
        }
    }
}
