<?php

use Phinx\Migration\AbstractMigration;

class UsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('username', 'string', ['limit' => 15])
            ->addColumn('password', 'string', ['limit' => 15])
            ->addColumn('name', 'string', ['limit' => 20])
            ->addColumn('phone', 'string', ['limit' => 13])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('birthdate', 'datetime')
            ->addColumn('join_date', 'datetime')
            ->addColumn('membership', 'string')
            ->addColumn('total_activity', 'integer', ['null' => true])
            ->create();
    }
}
