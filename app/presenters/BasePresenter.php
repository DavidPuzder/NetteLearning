<?php

namespace App\Presenters;

use App\Components\Menu\MenuControl\MenuControlFactory;
use App\Components\OpenCounter\OpenCounterControl\OpenCounterControlFactory;
use App\Model\SiteSettingsManager;
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


    // Models
    /** @var SiteSettingsManager @inject */
    public $siteSettingsManager;

    // Components
    /** @var MenuControlFactory @inject */
    public $menuControlFactory;

    /** @var OpenCounterControlFactory @inject */
    public $openCounterControlFactory;


    protected function startup() {
        parent::startup();

        // Global Variables
        $this->template->lang = $this->locale;
        $this->template->siteSettings = $this->siteSettingsManager->getSettings($this->locale);

        // Add Components
        $this->addComponent($this->menuControlFactory->create(), 'menu');
        $this->addComponent($this->openCounterControlFactory->create(), 'openCounter');
    }
}
