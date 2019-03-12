<?php
namespace App\Model;

use Nette;

class SiteSettingsManager
{
    use Nette\SmartObject;

    /** @var  Nette\Database\Context */
    private $db;

    private $tableName = 'site_settings';

    public function __construct(Nette\Database\Context $db)
    {
        $this->db = $db;
    }


    /**
     * Get Site Settings By Language
     * @param string $lang
     * @return array|Nette\Database\Table\IRow[]|Nette\Database\Table\Selection
     */
    public function getSettings($lang = 'sk') {
       $siteSettings = $this->db->table($this->tableName)->where(['lang' => $lang, 'status <> 0'])->fetchAll();

       $return = [];

       foreach ($siteSettings as $siteSetting) {
           $return[$siteSetting->alias] = $siteSetting->status == 1 ? $siteSetting->title : false;
       }

       return $return;
    }
}