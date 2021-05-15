<?php

namespace Framework\Core;

class Renderer
{
    public function render(string $template, array $data = null, string $layout)
    {
        if (isset($data)) {
            extract($data);
        }
        $template_path = DOCUMENT_ROOT . "/App/View/Templates/" . $template . ".php";
        $layout_path = DOCUMENT_ROOT . "/App/View/Layouts/" . $layout . ".php";
        require $template_path;
    }
}
