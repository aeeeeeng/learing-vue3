<?php

namespace App\Http\Controllers;

class OptionsController extends Controller
{
    public function gettingStarted()
    {
        return inertia('Options/getting-started');
    }

    public function declarativeRendering()
    {
        return inertia('Options/declarative-rendering');
    }

    public function attributeBindings()
    {
        return inertia('Options/attribute-bindings');
    }

    public function eventListeners()
    {
        return inertia('Options/event-listeners');
    }

    public function formBindings()
    {
        return inertia('Options/form-bindings');
    }
}
