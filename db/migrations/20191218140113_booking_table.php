<?php

use Phinx\Migration\AbstractMigration;

class BookingTable extends AbstractMigration
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
        $table = $this->table('booking');
        $table->addColumn('user_id', 'integer')
            ->addColumn('class_id', 'integer')
            ->addColumn('venue_id', 'integer')
            ->addColumn('total_price', 'integer')
            ->addColumn('total_attendant', 'integer')
            ->addColumn('payment_method', 'string')
            ->addColumn('book_date', 'datetime')
            ->addColumn('book_expired', 'datetime')
            ->addColumn('booking_status', 'string')
            ->create();
    }
}
