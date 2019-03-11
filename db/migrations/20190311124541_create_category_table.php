<?php


use Phinx\Migration\AbstractMigration;

class CreateCategoryTable extends AbstractMigration
{
    public function change()
    {
        if ( ! $this->hasTable('blog_category')) {
            // Create User Table
            $table = $this->table('blog_category');
            $table->addColumn('title', 'string')
                ->addColumn('lang', 'string', ['default' => 'sk'])
                ->addColumn('alias', 'string', ['null' => true, 'default' => null])
                ->addColumn('description', 'text', ['null' => true, 'default' => null])
                ->addColumn('params', 'text', ['null' => true, 'default' => null])
                ->addColumn('image', 'string', ['null' => true, 'default' => null])
                ->addColumn('status', 'integer', ['default' => '1'])
                ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('updated', 'timestamp', ['null' => true, 'default' => null, 'update' => 'CURRENT_TIMESTAMP'])
                ->create();
        }
    }
}
