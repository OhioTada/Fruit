<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class RenameAdminCount extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('admin_counts');
        $table->renameColumn('name', 'loginId');
        $table->save();
    }
    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('admin_counts');
        $table->renameColumn('loginId', 'name');
        $table->save();
    }
}
