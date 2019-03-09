<?php

namespace App\Components\Menu\MenuControl;

use Nette\Application\UI;

interface MenuControlFactory
{
    /**
     * @return MenuControl
     */
    public function create();
}

class MenuControl extends UI\Control
{
    public function __construct(

    )
    {

    }


    public function render($template = 'default')
    {
        $this->template->setFile(__DIR__ . '/' . $template . '.latte');
        $this->template->render();
    }
}