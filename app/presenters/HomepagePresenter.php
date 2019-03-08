<?php

namespace App\Presenters;

/** Homepage Presenter sa načítava z BasePresentera
 ** Každá stránka má svoj Presenter (napr. OnasPresenter, KontaktPresenter..)
 */
final class HomepagePresenter extends BasePresenter
{
	/**
	 *
	 * Funkcia sa vykoná predtým, ako sa nám vykreslí stránka.
	 * Môžeme do nej posielať premenné pomocou  $this->template->(názov premennej)
	 */
	public function renderDefault()
	{

		$this->template->anyVariable = 'any value';
	}
}
