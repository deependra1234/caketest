<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Chemists Controller
 *
 * @property \App\Model\Table\ChemistsTable $Chemists
 */
class ChemistsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patches', 'Users', 'States', 'Cities']
        ];
        $chemists = $this->paginate($this->Chemists);

        $this->set(compact('chemists'));
        $this->set('_serialize', ['chemists']);
    }

    /**
     * View method
     *
     * @param string|null $id Chemist id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chemist = $this->Chemists->get($id, [
            'contain' => ['Patches', 'Users', 'States', 'Cities', 'ReportEntryChemists']
        ]);

        $this->set('chemist', $chemist);
        $this->set('_serialize', ['chemist']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chemist = $this->Chemists->newEntity();
        if ($this->request->is('post')) {
            $chemist = $this->Chemists->patchEntity($chemist, $this->request->data);
            if ($this->Chemists->save($chemist)) {
                $this->Flash->success(__('The chemist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chemist could not be saved. Please, try again.'));
            }
        }
        $patches = $this->Chemists->Patches->find('list', ['limit' => 200]);
        $users = $this->Chemists->Users->find('list', ['limit' => 200]);
        $states = $this->Chemists->States->find('list', ['limit' => 200]);
        $cities = $this->Chemists->Cities->find('list', ['limit' => 200]);
        $this->set(compact('chemist', 'patches', 'users', 'states', 'cities'));
        $this->set('_serialize', ['chemist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chemist id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chemist = $this->Chemists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chemist = $this->Chemists->patchEntity($chemist, $this->request->data);
            if ($this->Chemists->save($chemist)) {
                $this->Flash->success(__('The chemist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chemist could not be saved. Please, try again.'));
            }
        }
        $patches = $this->Chemists->Patches->find('list', ['limit' => 200]);
        $users = $this->Chemists->Users->find('list', ['limit' => 200]);
        $states = $this->Chemists->States->find('list', ['limit' => 200]);
        $cities = $this->Chemists->Cities->find('list', ['limit' => 200]);
        $this->set(compact('chemist', 'patches', 'users', 'states', 'cities'));
        $this->set('_serialize', ['chemist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chemist id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chemist = $this->Chemists->get($id);
        if ($this->Chemists->delete($chemist)) {
            $this->Flash->success(__('The chemist has been deleted.'));
        } else {
            $this->Flash->error(__('The chemist could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
