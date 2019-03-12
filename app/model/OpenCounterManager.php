<?php
namespace App\Model;

use Nette;

class OpenCounterManager
{
    use Nette\SmartObject;

    /** @var  Nette\Database\Context */
    private $db;

    private $tableName = 'site_open';

    public function __construct(Nette\Database\Context $db)
    {
        $this->db = $db;
    }


    /**
     * Add New Open Log
     * @param $data
     */
    public function insertOpen($data) {
        $this->db->table($this->tableName)->insert($data);
    }
}