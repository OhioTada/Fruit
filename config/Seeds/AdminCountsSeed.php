<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * AdminCounts seed.
 */
class AdminCountsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        
        $data = [
            [
                'loginId'    => 'admin',
                'password'    => '$2y$10$aQgshs1Ub12qxFsrl.QwHuHD/qUGTaYqe246X1uSu78IY7newtUWO',
                'phone'    => '0988686868',
                'avatar'    => '../img/admin/abc.png',
                'email'    => 'test@gmail.com',
                'function'    => 'admin',
                'creator'    => 'admin',
                'created' => date('Y-m-d H:i:s')
            ],
        ];

        $table = $this->table('admin_counts');
        $table->insert($data)->save();
    }
}
