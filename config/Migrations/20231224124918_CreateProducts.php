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
        $table->addColumn('sku', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('image', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('weight', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('unitWeight', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('categoryId', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('color', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        
        $table->addColumn('size', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('material', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('quantity', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('quantitySold', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('price', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('unitPrice', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('discountPercent', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('availability', 'integer', [
            'default' => 0,
            'limit' => 4,
            'null' => false,
        ]);
        
        $table->addColumn('branch', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('collections', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('tags', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('expireDate', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('accountId', 'integer', [
            'default' => null,
            'limit' => 4,
            'null' => false,
        ]);
        $table->addColumn('creator', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('editor', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('edited', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex(['name']);
        $table->create();
    }

    
   
}
