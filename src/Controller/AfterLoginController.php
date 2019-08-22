<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class AfterLoginController extends AppController
{

    /**
     * users.role によってログイン後のリダイレクト先を変える処理
     */
    public function index()
    {
        $this->autoRender = false;
        $role = $this->Auth->user('role');
        if ($role == "user") {
            $this->redirect(['controller' => '/', 'action' => 'profile']);
        } else if ($role == "staff") {
            $this->redirect(['controller' => 'ManageUsers', 'action' => 'index']);
        }
    }
}
