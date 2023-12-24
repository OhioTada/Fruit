<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateAdminCounts extends AbstractMigration
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
        $table = $this->table('admin_counts');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('phone', 'integer', [
            'default' => null,
            'null' => false,
            'limit' => 20
        ]);
        $table->addColumn('avatar', 'string', [
            'default' => null,
            'limit' => 256,
            'null' => false,
        ]);
        $table->addColumn('function', 'string', [
            'default' => null,
            'limit' => 256,
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
        $table->addIndex(['email','name']);
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
