<?php
namespace App\Model;

use Nette;

class CategoryManager
{
    use Nette\SmartObject;

    /** @var  Nette\Database\Context */
    private $db;

    private $tableName = 'blog_category';

    public function __construct(Nette\Database\Context $db)
    {
        $this->db = $db;
    }


    /**
     * Get categories
     * @param null $limit
     * @return array|Nette\Database\Table\IRow[]
     */
    public function getCategories($limit = null) {
        if($limit) {
            return $this->db->table($this->tableName)->where('status <> 0')->limit($limit)->fetchAll();
        }
        return $this->db->table($this->tableName)->where('status <> 0')->fetchAll();

    }

    /**
     * Get categories and order by date
     * @param null $limit
     * @return array|Nette\Database\Table\IRow[]
     */
    public function getNewestCategories($limit = null) {
        if ($limit) {
            return $this->db->table($this->tableName)->where('status <> 0')->limit($limit)->order('updated DESC')->fetchAll();
        }
        return $this->db->table($this->tableName)->where('status <> 0')->order('updated DESC')->fetchAll();
    }
}