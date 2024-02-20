<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompositionController extends Controller
{
    public function gettingStarted()
    {
        return inertia('Composition/getting-started');
    }

    public function declarativeRendering()
    {
        return inertia('Composition/declarative-rendering');
    }

    public function attributeBindings()
    {
        return inertia('Composition/attribute-bindings');
    }
}
