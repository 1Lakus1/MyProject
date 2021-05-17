<?php

namespace Framework\Core;

use Framework\Core\Renderer;

class Controller
{
    protected object $model;
    protected object $renderer;

    public function __construct()
    {
        $this->renderer = new renderer();
    }

    public function action_index()
    {
    }
}
