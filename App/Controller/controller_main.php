<?php

namespace App\Controller;

class controller_main extends \Framework\Core\contoller
{
    public function action_index()
    {
        $this->renderer->render("template_view", null, 'main_view');
    }
}
