<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * ReportEntryDoctors Controller
 *
 * @property \App\Model\Table\ReportEntryDoctorsTable $ReportEntryDoctors
 */
class ReportEntryDoctorsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
           $this->Security->config('unlockedActions', ['delete']);
    }
    public function index() {
        $this->paginate = [
            'contain' => ['Doctors', 'Users', 'Products']
        ];
        $reportEntryDoctors = $this->paginate($this->ReportEntryDoctors);

        $this->set(compact('reportEntryDoctors'));
        $this->set('_serialize', ['reportEntryDoctors']);
    }

    /**
     * View method
     *
     * @param string|null $id Report Entry Doctor id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $reportEntryDoctor = $this->ReportEntryDoctors->get($id, [
            'contain' => ['Doctors', 'Users', 'Products']
        ]);

        $this->set('reportEntryDoctor', $reportEntryDoctor);
        $this->set('_serialize', ['reportEntryDoctor']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $reportEntryDoctor = $this->ReportEntryDoctors->newEntity();
        if ($this->request->is('post')) {
            $reportEntryDoctor = $this->ReportEntryDoctors->patchEntity($reportEntryDoctor, $this->request->data);
            if ($this->ReportEntryDoctors->save($reportEntryDoctor)) {
                $this->Flash->success(__('The report entry doctor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The report entry doctor could not be saved. Please, try again.'));
            }
        }
        $doctors = $this->ReportEntryDoctors->Doctors->find('list', ['limit' => 200]);
        $users = $this->ReportEntryDoctors->Users->find('list', ['limit' => 200]);
        $products = $this->ReportEntryDoctors->Products->find('list', ['limit' => 200]);
        $this->set(compact('reportEntryDoctor', 'doctors', 'users', 'products'));
        $this->set('_serialize', ['reportEntryDoctor']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Report Entry Doctor id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $reportEntryDoctor = $this->ReportEntryDoctors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportEntryDoctor = $this->ReportEntryDoctors->patchEntity($reportEntryDoctor, $this->request->data);
            if ($this->ReportEntryDoctors->save($reportEntryDoctor)) {
                $this->Flash->success(__('The report entry doctor has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The report entry doctor could not be saved. Please, try again.'));
            }
        }
        $doctors = $this->ReportEntryDoctors->Doctors->find('list', ['limit' => 200]);
        $users = $this->ReportEntryDoctors->Users->find('list', ['limit' => 200]);
        $products = $this->ReportEntryDoctors->Products->find('list', ['limit' => 200]);
        $this->set(compact('reportEntryDoctor', 'doctors', 'users', 'products'));
        $this->set('_serialize', ['reportEntryDoctor']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Report Entry Doctor id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        if($this->request->is(["AJAX"])){
            $id=$this->request->data['id'];
        }
        $this->request->allowMethod(['post', 'delete', 'ajax']);
        $reportEntryDoctor = $this->ReportEntryDoctors->get($id);
        if ($this->ReportEntryDoctors->delete($reportEntryDoctor)) {
            if ($this->request->is(["AJAX"])) {
                echo 1;
                exit;
            }
            $this->Flash->success(__('The report entry doctor has been deleted.'));
        } else {
             if ($this->request->is(["AJAX"])) {
                echo 0;
                exit;
            }
            $this->Flash->error(__('The report entry doctor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
