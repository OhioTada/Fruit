<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 */
class ProductsFixture extends TestFixture
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
                'name' => 'Lorem ipsum dolor sit amet',
                'desc' => 'Lorem ipsum dolor sit amet',
                'sku' => 'Lorem ipsum dolor sit amet',
                'image' => 'Lorem ipsum dolor sit amet',
                'weight' => 1,
                'unitWeight' => 'Lorem ipsum dolor sit amet',
                'categoryId' => 1,
                'color' => 'Lorem ipsum dolor sit amet',
                'size' => 'Lorem ipsum dolor sit amet',
                'material' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
                'quantitySold' => 1,
                'price' => 1,
                'discountPercent' => 1,
                'availability' => 1,
                'branch' => 'Lorem ipsum dolor sit amet',
                'collections' => 'Lorem ipsum dolor sit amet',
                'tags' => 'Lorem ipsum dolor sit amet',
                'expireDate' => 1705218272,
                'accountId' => 1,
                'creator' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-01-14 07:44:32',
                'editor' => 'Lorem ipsum dolor sit amet',
                'edited' => '2024-01-14 07:44:32',
            ],
        ];
        parent::init();
    }
}
