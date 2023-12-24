<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Authentication\PasswordHasher\DefaultPasswordHasher;
use \App\Controller\AppController;
// use Cake\I18n\FrozenTime;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Routing\Router;
use Cake\Validation\Validation;

/**
 * Users Controller
 *
 */
class UsersController extends AdminController
{
    use LocatorAwareTrait;
    use MailerAwareTrait;
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->allowUnauthenticated(['login']);
        $this->Authentication->addUnauthenticatedActions(['login']);
        $this->users = $this->fetchTable('Users');
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
       
    }
    public function login()
    {
        {
            $this->request->allowMethod(['get', 'post']);
            if ($this->request->is('post')) {
                $user = $this->users->findByLoginId($this->request->getData('loginId'));
                if (!$user) {
                    $this->Flash->error(__('There is an error in the input content.'));
                } else {
                    if (!(new DefaultPasswordHasher())->check($this->request->getData('password'), $user->password)) {
                        $this->Flash->error(__('There is an error in the input content.'));
                    } else {
                        $this->Authentication->getResult();
                        $redirect = $this->request->getQuery('redirect', [
                            'controller' => 'Dashboard',
                            'action' => 'index',
                        ]);
                        return $this->redirect($redirect);
                    }
                }
            }
            // $this->viewBuilder()->setLayout('login');
    }
}

    public function forgotPassword()
    {
        
    }
    public function logout()
{
    $result = $this->Authentication->getResult();
    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        $this->Authentication->logout();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }
}
}
