<?php

namespace Framework\Core;

use http\Exception;

class Renderer
{
    public function render(string $template, $data = null, string $layout)
    {
        $template_path = DOCUMENT_ROOT . "/App/View/Templates/" . $template . ".php";
        $layout_path = DOCUMENT_ROOT . "/App/View/Layouts/" . $layout . ".php";
        require $template_path;
    }
}
