<?php


use Phinx\Migration\AbstractMigration;

class CreateSiteOpenTable extends AbstractMigration
{
    public function change()
    {
        if ( ! $this->hasTable('site_open')) {
            // Create User Table
            $table = $this->table('site_open');
            $table->addColumn('user_id', 'integer')
                ->addColumn('user_ip', 'string')
                ->addColumn('user_location', 'string', ['null' => true, 'default' => null])
                ->addColumn('params', 'text', ['null' => true, 'default' => null])
                ->addColumn('status', 'integer', ['default' => '1'])
                ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('updated', 'timestamp', ['null' => true, 'default' => null, 'update' => 'CURRENT_TIMESTAMP'])
                ->create();
        }
    }
}
