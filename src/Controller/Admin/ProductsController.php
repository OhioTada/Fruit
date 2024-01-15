<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\I18n\FrozenTime;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Routing\Router;
use Cake\Validation\Validation;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * Product Controller
 *
 */
class ProductsController extends AdminController
{
    use LocatorAwareTrait;
    use MailerAwareTrait;
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->now = new FrozenTime(date('Y-m-d H:i:s'));
        $this->products = $this->fetchTable('Products');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
       
    }
    public function add()
    {
        if($this->request->getData()){
            $data = $this->request->getData();
            $productsTable = TableRegistry::getTableLocator()->get('products');
            $product = $productsTable->newEntities($data);
            // dd($product);
            // if ($productsTable->save($product)) {
            //     $this->set('data', $data);
            //     $this->Flash->success(__('The user has been saved.'));
            // }else{
            //     $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            // }
            // $this->set('data', $data);
            
        }
    }
    public function edit()
    {
        
    }
}
