<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdminCountsFixture
 */
class AdminCountsFixture extends TestFixture
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
                'id' => 1,
                'loginId' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'phone' => 1,
                'avatar' => 'Lorem ipsum dolor sit amet',
                'function' => 'Lorem ipsum dolor sit amet',
                'creator' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-12-27 10:40:23',
            ],
        ];
        parent::init();
    }
}
