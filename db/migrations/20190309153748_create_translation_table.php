<?php


use Phinx\Migration\AbstractMigration;

class CreateTranslationTable extends AbstractMigration
{
    public function change()
    {
        if ( ! $this->hasTable('translation')) {
            // Create User Table
            $table = $this->table('translation');
            $table->addColumn('key', 'string')
                ->addColumn('locale', 'string')
                ->addColumn('message', 'text')
                ->addColumn('updated', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
                ->create();
        }
    }
}
