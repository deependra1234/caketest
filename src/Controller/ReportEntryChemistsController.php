<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReportEntryChemists Controller
 *
 * @property \App\Model\Table\ReportEntryChemistsTable $ReportEntryChemists
 */
class ReportEntryChemistsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Chemists', 'Users', 'Products']
        ];
        $reportEntryChemists = $this->paginate($this->ReportEntryChemists);

        $this->set(compact('reportEntryChemists'));
        $this->set('_serialize', ['reportEntryChemists']);
    }

    /**
     * View method
     *
     * @param string|null $id Report Entry Chemist id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reportEntryChemist = $this->ReportEntryChemists->get($id, [
            'contain' => ['Chemists', 'Users', 'Products']
        ]);

        $this->set('reportEntryChemist', $reportEntryChemist);
        $this->set('_serialize', ['reportEntryChemist']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reportEntryChemist = $this->ReportEntryChemists->newEntity();
        if ($this->request->is('post')) {
            $reportEntryChemist = $this->ReportEntryChemists->patchEntity($reportEntryChemist, $this->request->data);
            if ($this->ReportEntryChemists->save($reportEntryChemist)) {
                $this->Flash->success(__('The report entry chemist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The report entry chemist could not be saved. Please, try again.'));
            }
        }
        $chemists = $this->ReportEntryChemists->Chemists->find('list', ['limit' => 200]);
        $users = $this->ReportEntryChemists->Users->find('list', ['limit' => 200]);
        $products = $this->ReportEntryChemists->Products->find('list', ['limit' => 200]);
        $this->set(compact('reportEntryChemist', 'chemists', 'users', 'products'));
        $this->set('_serialize', ['reportEntryChemist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Report Entry Chemist id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reportEntryChemist = $this->ReportEntryChemists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportEntryChemist = $this->ReportEntryChemists->patchEntity($reportEntryChemist, $this->request->data);
            if ($this->ReportEntryChemists->save($reportEntryChemist)) {
                $this->Flash->success(__('The report entry chemist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The report entry chemist could not be saved. Please, try again.'));
            }
        }
        $chemists = $this->ReportEntryChemists->Chemists->find('list', ['limit' => 200]);
        $users = $this->ReportEntryChemists->Users->find('list', ['limit' => 200]);
        $products = $this->ReportEntryChemists->Products->find('list', ['limit' => 200]);
        $this->set(compact('reportEntryChemist', 'chemists', 'users', 'products'));
        $this->set('_serialize', ['reportEntryChemist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Report Entry Chemist id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reportEntryChemist = $this->ReportEntryChemists->get($id);
        if ($this->ReportEntryChemists->delete($reportEntryChemist)) {
            $this->Flash->success(__('The report entry chemist has been deleted.'));
        } else {
            $this->Flash->error(__('The report entry chemist could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
