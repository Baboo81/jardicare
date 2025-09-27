<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class CookieConsentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'necessary' => 'sometimes|boolean',
            'analytics' => 'sometimes|boolean',
            'marketing' => 'sometimes|boolean',
        ]);

        //Normaliser
        $payload = [
            'necessary' => (bool) ($data['necessary'] ?? true),
            'analytics' => (bool) ($data['analytics'] ?? false),
            'marketing' => (bool) ($data['marketink'] ?? false),
        ];

        //Sotckage du cookie pour une durée de 1 an = 525600
        Cookie::queue('cookie_consent', json_encode($payload), 525600);

        return response()->json(['status' => 'ok', 'consent' => $payload]);

    }
}
