<?php

namespace Framework\Core;

use http\Exception;

class Renderer
{
    public function render(string $layout, $data = null, string $template)
    {
        $layout_path = DOCUMENT_ROOT . "/App/View/Layouts/" . $layout . ".php";
        $template_path = DOCUMENT_ROOT . "/App/View/Templates/" . $template . ".php";
        require $layout_path;
    }
}
