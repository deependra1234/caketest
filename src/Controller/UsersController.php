<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['UserTypes']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    function dashboard() {
        
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $user = $this->Users->get($id, [
            'contain' => ['UserTypes', 'Chemists', 'Doctors', 'Patchs', 'ReportEntryChemists', 'ReportEntryDoctors', 'ReportMasters']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            
            $this->request->data['password'] = (new DefaultPasswordHasher())->hash($this->request->data['password']);
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200]);
        $this->set(compact('user', 'userTypes'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $userTypes = $this->Users->UserTypes->find('list', ['limit' => 200]);
        $this->set(compact('user', 'userTypes'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    function login() {
        $this->viewBuilder()->layout("login");
        if ($this->request->is(['POST'])) {

            $user = $this->Auth->identify($this->request->data);

            if ($user) {
//                 $this->Users->get('UserMasters');
//                $query = $users->query();
//                $query->update()
//                        ->set(['last_login' => date("Y-m-d H:i:s")])
//                        ->where(['id' => $user['id']])
//                        ->execute();
                $this->Auth->setUser($user);

                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->set(__('Invalid username or password, try again'), ['key' => 'auth']);
        }
    }

    function logout() {

        return $this->redirect($this->Auth->logout());
    }

}
