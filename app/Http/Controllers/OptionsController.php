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

    public function conditionalRendering()
    {
        return inertia('Options/conditional-rendering');
    }

    public function listRendering()
    {
        return inertia('Options/list-rendering');
    }

    public function computedProperty()
    {
        return inertia('Options/computed-property');
    }

    public function lifecycle()
    {
        return inertia('Options/lifecycle');
    }

    public function watch()
    {
        return inertia('Options/watch');
    }

    public function component()
    {
        return inertia('Options/Component/Parent');
    }

    public function props()
    {
        return inertia('Options/Props/Parent');
    }

    public function emits()
    {
        return inertia('Options/Emits/Parent');
    }
}
