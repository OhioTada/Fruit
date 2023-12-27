<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $loginId
 * @property string $email
 * @property string $password
 * @property int $phone
 * @property string $avatar
 * @property string $function
 * @property string $creator
 * @property \Cake\I18n\DateTime $created
 */
class User extends Entity
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
        'loginId' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'avatar' => true,
        'function' => true,
        'creator' => true,
        'created' => true,
    ];


    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected array $_hidden = [
        'password',
    ];
    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
           
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
