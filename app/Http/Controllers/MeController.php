<?php

namespace App\Http\Controllers;

use App\Repositories\MeRepository;

class MeController
{
    private MeRepository $repository;

    public function __construct(MeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function deleteMe()
    {
        $this->repository->deleteAccount();
    }
}
