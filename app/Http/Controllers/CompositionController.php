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

    public function eventListeners()
    {
        return inertia('Composition/event-listeners');
    }

    public function formBindings()
    {
        return inertia('Composition/form-bindings');
    }

    public function conditionalRendering()
    {
        return inertia('Composition/conditional-rendering');
    }

    public function listRendering()
    {
        return inertia('Composition/list-rendering');
    }

    public function computedProperty()
    {
        return inertia('Composition/computed-property');
    }

    public function lifecycle()
    {
        return inertia('Composition/lifecycle');
    }

    public function watch()
    {
        return inertia('Composition/watch');
    }


    public function component()
    {
        return inertia('Composition/Component/Parent');
    }

    public function props()
    {
        return inertia('Composition/Props/Parent');
    }

    public function emits()
    {
        return inertia('Composition/Emits/Parent');
    }

    public function slot()
    {
        return inertia("Composition/Slot/Parent");
    }
}
