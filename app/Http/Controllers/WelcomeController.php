<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return inertia('Example', [
            'test' => [
                'a' => 1,
                'b' => 2
            ]
        ]);
    }

    public function example()
    {

    }
}
