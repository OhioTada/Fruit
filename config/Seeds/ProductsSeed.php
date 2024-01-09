<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Products seed.
 */
class ProductsSeed extends AbstractSeed
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
        // $data = [
        //     [
        //         'name'    => 'Grapes',
        //         'desc'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt',
        //         'image'    => '/img/best-product-5.jpg',
        //         'categoryId'    => '01',
        //         'SKU'    => '0001',
        //         'price'    => '4.99',
        //         'discountPercent'    => '0',
        //         'weight'    => '1',
        //         'quantity'    => '1000',
        //         'quantitySold'    => '60',
        //         'branch'    => 'American',
        //         'Collections'    => 'winter',
        //         'tags'    => 'winder',
        //         'expireDate' => Date('Y-m-d H:i:s', strtotime('+10 days')),
        //         'created' => date('Y-m-d H:i:s'),
        //         'modified' => date('Y-m-d H:i:s'),
        //     ],
        // ];
        $data =[];

        $table = $this->table('products');
        $table->insert($data)->save();
    }
}
