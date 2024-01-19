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
        $result = $this->Authentication->getResult();
        $this->userLogin = $result->getData();
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
            // dd($data);
            $productsTable = TableRegistry::getTableLocator()->get('products');
            $product =$this->products->newEmptyEntity();
            $product = $this->products->patchEntity($product, $data);
            $product->accountId = $this->userLogin['id'];
            $product->creator = $this->userLogin['email'];
            $product->created = $this->now;
            $product->editor = $this->userLogin['email'];
            $product->quantitySold = 0;
            $product->edited = $this->now;
            // dd($product);
            $product->accountId = $this->userLogin['id'];
            // dd($product);
            if ($productsTable->saveMany($product)) {
                $this->set('data', $data);
                $this->Flash->success(__('The user has been saved.'));
            }else{
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }
            $this->set('data', $data);
            
        }
    }
    public function edit()
    {
        
    }
}
