<?php

namespace App\Controllers\frontend;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('frontend/welcome_message');
    }
}
