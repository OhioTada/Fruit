<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('desc', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('image', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('categoryId', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('expireDate', 'timestamp', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('SKU', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('price', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('discountPercent', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('quanlity', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('quanlitySold', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex(['name']);
        $table->create();
    }
    // /**
    //  * Migrate Up.
    //  */
    // public function up()
    // {
    //     $table = $this->table('products');
    //     $table->renameColumn('quanlity', 'quantity');
    //     $table->renameColumn('quanlitySold', 'quantitySold');
    //     $table->save();
    // }
    // /**
    //  * Migrate Down.
    //  */
    // public function down()
    // {
    //     $table = $this->table('products');
    //     $table->renameColumn('quantity', 'quanlity');
    //     $table->renameColumn('quantitySold', 'quanlitySold');
    //     $table->save();
    // }
   
}
