<?php

namespace App\Components\Blog\BlogControl;

use Nette\Application\UI;

interface BlogControlFactory
{
    /**
     * @return BlogControl
     */
    public function create();
}

class BlogControl extends UI\Control
{
    public function __construct(

    )
    {

    }


    public function render($template = 'default', $params = null)
    {
        $this->template->setFile(__DIR__ . '/' . $template . '.latte');
        $this->template->render();
    }
}