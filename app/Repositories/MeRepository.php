<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;

class MeRepository
{
    public function deleteAccount() {
        return Auth::user()->delete();
    }
}
