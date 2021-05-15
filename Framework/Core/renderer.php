<?php
namespace Framework\Core;
class Renderer{
    public function render(string $template, array $data=NULL, string $layout){
        if(isset($data)){
            extract($data);

        }
        $template_path = document_root."/App/View/Templates/".$template.".php";
        $layout_path = document_root."/App/View/Layouts/".$layout.".php";
        require $template_path;
    }
}