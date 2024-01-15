<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $desc
 * @property string $sku
 * @property string $image
 * @property int $weight
 * @property string $unitWeight
 * @property int $categoryId
 * @property string $color
 * @property string $size
 * @property string $material
 * @property int $quantity
 * @property int $quantitySold
 * @property int $price
 * @property float $discountPercent
 * @property int $availability
 * @property string $branch
 * @property string $collections
 * @property string $tags
 * @property \Cake\I18n\DateTime $expireDate
 * @property int $accountId
 * @property string $creator
 * @property \Cake\I18n\DateTime $created
 * @property string $editor
 * @property \Cake\I18n\DateTime $edited
 */
class Product extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'name' => true,
        'desc' => true,
        'sku' => true,
        'image' => true,
        'weight' => true,
        'unitWeight' => true,
        'categoryId' => true,
        'color' => true,
        'size' => true,
        'material' => true,
        'quantity' => true,
        'quantitySold' => true,
        'price' => true,
        'discountPercent' => true,
        'availability' => true,
        'branch' => true,
        'collections' => true,
        'tags' => true,
        'expireDate' => true,
        'accountId' => true,
        'creator' => true,
        'created' => true,
        'editor' => true,
        'edited' => true,
    ];
}
