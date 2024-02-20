<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptionsController extends Controller
{
    public function gettingStarted()
    {
        return inertia('Options/getting-started');
    }
}
