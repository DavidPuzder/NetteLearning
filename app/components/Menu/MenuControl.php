<?php

namespace App\Components\Menu\MenuControl;

use App\Model\CategoryManager;
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
    /** @var  CategoryManager */
    private $categoryManager;

    public function __construct(
        CategoryManager $categoryManager
    )
    {
        $this->categoryManager = $categoryManager;
    }


    public function render($template = 'default')
    {
        $this->template->setFile(__DIR__ . '/' . $template . '.latte');

        $this->template->categories = $this->categoryManager->getCategories(7);

        $this->template->render();
    }
}