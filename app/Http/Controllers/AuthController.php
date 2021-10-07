<?php

namespace App\Http\Controllers;

use App\Repositories\AuthRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private AuthRepository $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAuthenticate(Request $request)
    {
        try {
            $this->repository->authenticate($request->get('code'));
            return redirect('/dashboard');
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return back();
        }
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }
}
