<?php
namespace App\Controller;
 Class controller_main extends \Framework\Core\contoller{
     public function action_index()
     {
         $this->renderer->render("template_view", NULL, 'main_view');
     }
 }