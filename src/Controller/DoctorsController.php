<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Doctors Controller
 *
 * @property \App\Model\Table\DoctorsTable $Doctors
 */
class DoctorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patchs', 'Users', 'States', 'Cities']
        ];
        $doctors = $this->paginate($this->Doctors);

        $this->set(compact('doctors'));
        $this->set('_serialize', ['doctors']);
    }

    /**
     * View method
     *
     * @param string|null $id Doctor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $doctor = $this->Doctors->newEntity();
        if ($this->request->is('post')) {
          
           
            $doctor = $this->Doctors->patchEntity($doctor, $this->request->data);
           
            if ($this->Doctors->save($doctor)) {
                $this->Flash->success(__('The doctor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doctor could not be saved. Please, try again.'));
            }
        }
        $patches = $this->Doctors->Patchs->find('list', ['limit' => 200]);
        $users = $this->Doctors->Users->find('list', ['limit' => 200]);
        $states = $this->Doctors->States->find('list', ['limit' => 200]);
        $cities = $this->Doctors->Cities->find('list', ['limit' => 200]);
        $this->set(compact('doctor', 'patches', 'users', 'states', 'cities'));
        $this->set('_serialize', ['doctor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Doctor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $doctor = $this->Doctors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $doctor = $this->Doctors->patchEntity($doctor, $this->request->data);
            if ($this->Doctors->save($doctor)) {
                $this->Flash->success(__('The doctor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The doctor could not be saved. Please, try again.'));
            }
        }
        $patches = $this->Doctors->Patchs->find('list', ['limit' => 200]);
        $users = $this->Doctors->Users->find('list', ['limit' => 200]);
        $states = $this->Doctors->States->find('list', ['limit' => 200]);
        $cities = $this->Doctors->Cities->find('list', ['limit' => 200]);
        $this->set(compact('doctor', 'patches', 'users', 'states', 'cities'));
        $this->set('_serialize', ['doctor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Doctor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $doctor = $this->Doctors->get($id);
        if ($this->Doctors->delete($doctor)) {
            $this->Flash->success(__('The doctor has been deleted.'));
        } else {
            $this->Flash->error(__('The doctor could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
