<?php
declare(strict_types=1);

namespace App\Controller\Admin;


use \App\Controller\AppController;

/**
 * Dashboard Controller
 *
 */
class DashboardController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $userLogin = $this->getSession->read('Auth')->loginId;
        $this->set('$userLogin', $userLogin);
    }
}
