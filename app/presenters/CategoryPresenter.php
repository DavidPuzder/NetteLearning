<?php

namespace App\Presenters;

use App\Components\Category\CategoryControl\CategoryControlFactory;

final class CategoryPresenter extends BasePresenter
{

    /** @var CategoryControlFactory @inject */
    public $categoryControlFactory;

	public function renderDefault()
	{
        $this->addComponent($this->categoryControlFactory->create(), 'category');
	}

	public function renderShow($categoryId) {
        $this->addComponent($this->categoryControlFactory->create(), 'category');
	    $this->template->categoryId = $categoryId;
    }
}
