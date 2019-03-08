<?php


use Phinx\Migration\AbstractMigration;

class CreateUserTable extends AbstractMigration
{

    public function change()
    {
        if ( ! $this->hasTable('user')) {
            // Create User Table
            $table = $this->table('user');
            $table->addColumn('username', 'string')
                ->addColumn('password', 'string')
                ->addColumn('email', 'string')
                ->addColumn('role', 'string', ['default' => 'Registered', 'null' => false])
                ->addColumn('activated', 'integer', ['default' => '0', 'null' => false])
                ->addColumn('image', 'string', [ 'null' => true, 'default' => 'null'])
                ->addColumn('status', 'integer', ['default' => '1', 'null' => false])
                ->addColumn('created', 'timestamp', ['default' => 'CURRENT_TIMESTAMP'])
                ->create();
        }
    }
}
