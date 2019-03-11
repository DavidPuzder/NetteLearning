<?php

namespace App\Components\Category\CategoryControl;

use App\Model\CategoryManager;
use Nette\Application\UI;

interface CategoryControlFactory
{
    /**
     * @return CategoryControl
     */
    public function create();
}

class CategoryControl extends UI\Control
{

    /** @var  CategoryManager */
    private $categoryManager;

    public function __construct(
        CategoryManager $categoryManager
    )
    {
        $this->categoryManager = $categoryManager;
    }


    public function render($template = 'default', $params = null)
    {
        $this->template->setFile(__DIR__ . '/' . $template . '.latte');

        if ($template == 'newest') {
            $this->template->categories = $this->categoryManager->getCategories(5);
        }


        // Render Template
        $this->template->render();
    }
}