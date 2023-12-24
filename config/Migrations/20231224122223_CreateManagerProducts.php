<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateManagerProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('manager_products');
        $table->addColumn('accountId', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('productId', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('creator', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'accountId',
        
            ], [
            'name' => 'BY_ACCOUNTID',
            'unique' => false,
        ]);
        $table->addIndex([
            'productId',
        
            ], [
            'name' => 'BY_PRODUCTID',
            'unique' => false,
        ]);
        $table->create();
    }
    /**
     * Migrate Up.
     */
    public function up()
    {
       
    }
    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
