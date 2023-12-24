<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCategories extends AbstractMigration
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
        $table = $this->table('categories');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ])->addIndex(['name']);
        $table->addColumn('desc', 'string', [
            'default' => null,
            'limit' => 256,
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
        $table->addColumn('deleted', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
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
