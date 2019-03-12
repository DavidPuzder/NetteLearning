<?php


use Phinx\Migration\AbstractMigration;

class CreateSiteSettingsTable extends AbstractMigration
{
    public function change()
    {
        if ( ! $this->hasTable('site_settings')) {
            // Create User Table
            $table = $this->table('site_settings');
            $table->addColumn('title', 'string')
                ->addColumn('lang', 'string', ['default' => 'sk'])
                ->addColumn('alias', 'string', ['null' => true, 'default' => null])
                ->addColumn('description', 'text', ['null' => true, 'default' => null])
                ->addColumn('params', 'text', ['null' => true, 'default' => null])
                ->addColumn('status', 'integer', ['default' => '1'])
                ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
                ->addColumn('updated', 'timestamp', ['null' => true, 'default' => null, 'update' => 'CURRENT_TIMESTAMP'])
                ->create();
        }
    }
}
