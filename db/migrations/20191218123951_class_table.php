<?php

use Phinx\Migration\AbstractMigration;

class ClassTable extends AbstractMigration
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
        $table = $this->table('class');
        $table->addColumn('name', 'string', ['limit' => 25])
            ->addColumn('venue', 'string', ['limit' => 25])
            ->addColumn('class_date', 'datetime')
            ->addColumn('class_start', 'time')
            ->addColumn('class_end', 'time')
            ->addColumn('price', 'integer')
            ->addColumn('desc', 'string', ['null' => true,'limit' => 300])
            ->addColumn('note', 'string', ['null' => true,'limit' => 300])
            ->addColumn('attendant', 'integer', ['null' => true])
            ->addColumn('attendant_limit', 'integer')
            ->create();

    }
}
