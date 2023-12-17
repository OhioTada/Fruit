<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'loginId' => 'fe1c80d1-0180-4bdb-8730-a2c5584f82e3',
                'password' => 'Lorem ipsum dolor sit amet',
                'function' => 'Lorem ipsum dolor sit amet',
                'creator' => 'Lorem ipsum dolor sit amet',
                'created' => 1702785294,
            ],
        ];
        parent::init();
    }
}
