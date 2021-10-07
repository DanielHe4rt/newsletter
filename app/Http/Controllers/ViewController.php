<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['viewLanding']]);
    }

    public function viewLanding()
    {
        $twitchUrl = sprintf(
            "https://id.twitch.tv/oauth2/authorize?client_id=%s&redirect_uri=%s&scope=%s&response_type=code",
            config('connectors.twitch.client_id'),
            config('connectors.twitch.client_redirect'),
            'user:read:email'
        );

        return view('welcome', compact('twitchUrl'));
    }

    public function viewDashboard()
    {
        return view('dashboard');
    }
}
