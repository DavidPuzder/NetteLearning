<?php

namespace App\Presenters;
use App\Components\Blog\BlogControl\BlogControlFactory;

/** Homepage Presenter sa načítava z BasePresentera
 ** Každá stránka má svoj Presenter (napr. OnasPresenter, KontaktPresenter..)
 */
final class HomepagePresenter extends BasePresenter
{

    /** @var BlogControlFactory @inject */
    public $blogControlFactory;
	/**
	 *
	 * Funkcia sa vykoná predtým, ako sa nám vykreslí stránka.
	 * Môžeme do nej posielať premenné pomocou  $this->template->(názov premennej)
	 */
	public function renderDefault()
	{
	    $this->addComponent($this->blogControlFactory->create(), 'blog');
		$this->template->anyVariable = 'any value';
	}
}
