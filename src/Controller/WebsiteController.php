<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Cache\Cache;
/**
 * Dashborad Controller
 *
 * @property \App\Model\Table\DashboradTable $Dashborad
 */
class WebsiteController extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->Auth->allow();
    }

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->viewBuilder()->layout('website');
    }
    public function details()
    {
        $this->viewBuilder()->layout('website');
    }
    /*public function login()
    {
        if ($this->request->is('post'))
        {
            $user = $this->Auth->identify();
            if ($user)
            {
                $this->Auth->setUser($user);
                $this->Flash->success(__('Your Have succesfully loged in'));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Your username or password is incorrect.'));
        }
        $this->viewBuilder()->layout('login');
    }
    public function logout()
    {
        $this->Flash->success(__('You are now logged out'));
        //        Cache::clear(false);
        return $this->redirect($this->Auth->logout());
    }*/
}