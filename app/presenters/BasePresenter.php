<?php

namespace App\Presenters;

use App\Components\Menu\MenuControl\MenuControlFactory;
use Nette;


/**
 * BasePresenter sa spúšťa na každej stránke.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /** @persistent */
    public $locale;

    /** @var \Kdyby\Translation\Translator @inject */
    public $translator;


    // Components
    /** @var MenuControlFactory @inject */
    public $menuControlFactory;


    protected function startup() {
        parent::startup();

        // Add Components
        $this->addComponent($this->menuControlFactory->create(), 'menu');
    }
}
