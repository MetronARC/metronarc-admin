<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('auth/login');
    }

    public function dashboard(): string
    {
        return view('pages/dashboard');
    }
}