<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @method \App\Model\Entity\Product newEmptyEntity()
 * @method \App\Model\Entity\Product newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Product> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Product findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Product> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Product>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Product>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Product>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Product> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Product>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Product>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Product>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Product> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 256)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('desc')
            ->maxLength('desc', 256)
            ->requirePresence('desc', 'create')
            ->notEmptyString('desc');

        $validator
            ->scalar('sku')
            ->maxLength('sku', 256)
            ->requirePresence('sku', 'create')
            ->notEmptyString('sku');

        $validator
            ->scalar('image')
            ->maxLength('image', 256)
            ->requirePresence('image', 'create')
            ->notEmptyFile('image');

        $validator
            ->integer('weight')
            ->requirePresence('weight', 'create')
            ->notEmptyString('weight');

        $validator
            ->scalar('unitWeight')
            ->maxLength('unitWeight', 256)
            ->requirePresence('unitWeight', 'create')
            ->notEmptyString('unitWeight');

        $validator
            ->integer('categoryId')
            ->requirePresence('categoryId', 'create')
            ->notEmptyString('categoryId');

        $validator
            ->scalar('color')
            ->maxLength('color', 256)
            ->requirePresence('color', 'create')
            ->notEmptyString('color');

        $validator
            ->scalar('size')
            ->maxLength('size', 256)
            ->requirePresence('size', 'create')
            ->notEmptyString('size');

        $validator
            ->scalar('material')
            ->maxLength('material', 256)
            ->requirePresence('material', 'create')
            ->notEmptyString('material');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        $validator
            ->integer('quantitySold')
            ->requirePresence('quantitySold', 'create')
            ->notEmptyString('quantitySold');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->numeric('discountPercent')
            ->requirePresence('discountPercent', 'create')
            ->notEmptyString('discountPercent');

        $validator
            ->integer('availability')
            ->notEmptyString('availability');

        $validator
            ->scalar('branch')
            ->maxLength('branch', 256)
            ->requirePresence('branch', 'create')
            ->notEmptyString('branch');

        $validator
            ->scalar('collections')
            ->maxLength('collections', 256)
            ->requirePresence('collections', 'create')
            ->notEmptyString('collections');

        $validator
            ->scalar('tags')
            ->maxLength('tags', 256)
            ->requirePresence('tags', 'create')
            ->notEmptyString('tags');

        $validator
            ->dateTime('expireDate')
            ->requirePresence('expireDate', 'create')
            ->notEmptyDateTime('expireDate');

        $validator
            ->integer('accountId')
            ->requirePresence('accountId', 'create')
            ->notEmptyString('accountId');

        $validator
            ->scalar('creator')
            ->maxLength('creator', 256)
            ->requirePresence('creator', 'create')
            ->notEmptyString('creator');

        $validator
            ->scalar('editor')
            ->maxLength('editor', 256)
            ->requirePresence('editor', 'create')
            ->notEmptyString('editor');

        $validator
            ->dateTime('edited')
            ->requirePresence('edited', 'create')
            ->notEmptyDateTime('edited');

        return $validator;
    }

    public function uploadFile($dataFile) : void
    {
        
        $target_dir = "uploads/";
        $target_file = $target_dir . $dataFile->getClientFilename();
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($dataFile->getStream()->getMetadata('uri'));
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($dataFile->getSize() > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"  && $imageFileType != "svg"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($dataFile->getStream()->getMetadata('uri'), $target_file)) {
                echo "The file " . htmlspecialchars(basename($dataFile->getClientFilename())) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
