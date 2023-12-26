<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddColumnProduct extends AbstractMigration
{
   /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('products');
        $table->renameColumn('quanlity', 'quantity');
        $table->renameColumn('quanlitySold', 'quantitySold');
        $table->save();
    }
    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('products');
        $table->renameColumn('quantity', 'quanlity');
        $table->renameColumn('quantitySold', 'quanlitySold');
        $table->save();
    }
}
