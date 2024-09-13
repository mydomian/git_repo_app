<?php

namespace App\Http\Controllers;

use App\Services\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    private $services;
    public function __construct(Services $services)
    {
        $this->services = $services;
    }

    public function dashboard(){
        $getProfile = $this->services->userGetProfile();
        $getRepos = $this->services->userGetRepos();
        return view('dashboard',compact('getProfile','getRepos'));
    }
}
