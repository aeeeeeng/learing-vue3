<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompositionController extends Controller
{
    public function gettingStarted()
    {
        return inertia('Composition/getting-started');
    }
}
