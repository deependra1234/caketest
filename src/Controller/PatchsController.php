<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Patchs Controller
 *
 * @property \App\Model\Table\PatchsTable $Patchs
 */
class PatchsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->setAction("add");
    }

    /**
     * View method
     *
     * @param string|null $id Patch id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($id = null) {
        $patch = $this->Patchs->newEntity();
        if (!empty($id)) {
            $patch = $this->Patchs->get(base64_decode($id));
        }
        if ($this->request->is(['post', 'PUT'])) {
            $this->request->data['user_id'] = (empty($this->request->data['user_id']) ? $this->Auth->user('id') : $this->request->data['user_id']);
            $patch = $this->Patchs->patchEntity($patch, $this->request->data);
            if ($this->Patchs->save($patch)) {
                $this->Flash->success(__('The patch has been saved/Updated.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The patch could not be saved. Please, try again.'));
            }
        }
        $users = $this->Patchs->Users->find('list', ['limit' => 200]);
        $patchs = $this->Patchs->find("all")->where(['user_id' => $this->Auth->user('id')]);
        $this->set(compact('patch', 'users', 'patchs'));
        $this->set('_serialize', ['patch']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Patch id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $patch = $this->Patchs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $patch = $this->Patchs->patchEntity($patch, $this->request->data);
            if ($this->Patchs->save($patch)) {
                $this->Flash->success(__('The patch has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The patch could not be saved. Please, try again.'));
            }
        }
        $users = $this->Patchs->Users->find('list', ['limit' => 200]);
        $this->set(compact('patch', 'users'));
        $this->set('_serialize', ['patch']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Patch id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $patch = $this->Patchs->get($id);
        if ($this->Patchs->delete($patch)) {
            $this->Flash->success(__('The patch has been deleted.'));
        } else {
            $this->Flash->error(__('The patch could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
