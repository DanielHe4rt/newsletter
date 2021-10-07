<?php

namespace App\Repositories;

use App\Models\User;
use App\Services\TwitchService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AuthRepository
{
    public function authenticate($code)
    {
        $service = new TwitchService();

        $tokens = $service->auth($code);
        $user = $service->getAuthenticatedUser($tokens['access_token']);

        $user = $this->findOrCreate($user);

        Auth::login($user);
    }

    public function findOrCreate($providerData)
    {
        $auth = User::where('email', $providerData['email'])->first();

        if (!$auth) {
            $providerData['twitch_id'] = $providerData['id'];
            return User::create($providerData);
        }

        if ($auth->twitch_id == $providerData['id']) {
            return $auth;
        }

        throw new \Exception('deu ruim');
    }

}
