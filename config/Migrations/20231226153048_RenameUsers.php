<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class RenameUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
        {
            $this->table('users')
                ->rename('customers')
                ->update();
        }
    
        public function down()
        {
            $this->table('customers')
                ->rename('users')
                ->update();
        }
}
