<?php

namespace App\Controller;

use App\Controller\AppController;
use \Cake\I18n\Date;

/**
 * ReportMasters Controller
 *
 * @property \App\Model\Table\ReportMastersTable $ReportMasters
 */
class ReportMastersController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function beforeFilter(\Cake\Event\Event $event) {
        parent::beforeFilter($event);
        $this->Security->config('unlockedActions', ['fillReportData']);
    }

    public function index() {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $reportMasters = $this->paginate($this->ReportMasters);

        $this->set(compact('reportMasters'));
        $this->set('_serialize', ['reportMasters']);
    }

    /**
     * View method
     *
     * @param string|null $id Report Master id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $reportMaster = $this->ReportMasters->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('reportMaster', $reportMaster);
        $this->set('_serialize', ['reportMaster']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $reportMaster = $this->ReportMasters->newEntity();
        if ($this->request->is('post')) {
            $reportMaster = $this->ReportMasters->patchEntity($reportMaster, $this->request->data);
            if ($this->ReportMasters->save($reportMaster)) {
                $this->Flash->success(__('The report master has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The report master could not be saved. Please, try again.'));
            }
        }
        $users = $this->ReportMasters->Users->find('list', ['limit' => 200]);
        $this->set(compact('reportMaster', 'users'));
        $this->set('_serialize', ['reportMaster']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Report Master id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $reportMaster = $this->ReportMasters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportMaster = $this->ReportMasters->patchEntity($reportMaster, $this->request->data);
            if ($this->ReportMasters->save($reportMaster)) {
                $this->Flash->success(__('The report master has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The report master could not be saved. Please, try again.'));
            }
        }
        $users = $this->ReportMasters->Users->find('list', ['limit' => 200]);
        $this->set(compact('reportMaster', 'users'));
        $this->set('_serialize', ['reportMaster']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Report Master id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $reportMaster = $this->ReportMasters->get($id);
        if ($this->ReportMasters->delete($reportMaster)) {
            $this->Flash->success(__('The report master has been deleted.'));
        } else {
            $this->Flash->error(__('The report master could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    function submitReport() {
        $mr_id = 2;
        if ($this->Auth->user("user_type_id") == 2) {
            $mr_id = $this->Auth->user("id");
        }
        $reportsDetails = $this->ReportMasters->find("all")->where(['user_id' => $mr_id])->order(["report_date" => 'DESC']);
        $this->set(compact('reportsDetails'));
        if ($this->request->is(["POST"])) {


            $query = $this->ReportMasters->find()->where(['user_id' => $mr_id, 'status' => 1])->order(["report_date" => 'DESC']);

            $res = $query->select(['report_date'])->first();
            $last_report_date = "";
            if (!empty($res)) {
                $last_report_date = $res->report_date;
            } else {
                $last_report_date = $this->Auth->user("created_on");
            }

            $s = new Date($last_report_date);

            $s->modify('+1 days');
            if (date($s->format("d/m/y")) == date("d/m/y", strtotime($this->request->data['report_on']))) {
                if ($this->request->data['work_status'] == 2) {
                    $reportEntity = $this->ReportMasters->newEntity(array('user_id' => $mr_id, 'work_status' => $this->request->data['work_status'], 'status' => 1, 'report_date' => date("Y-m-d", strtotime($this->request->data['report_on']))));
                }else{
                    $reportEntity = $this->ReportMasters->newEntity(array('user_id' => $mr_id, 'work_status' => $this->request->data['work_status'], 'report_date' => date("Y-m-d", strtotime($this->request->data['report_on']))));
                }
                
                $reportEntity = $this->ReportMasters->save($reportEntity);

                if ($reportEntity->work_status == 2) {
                    $this->Flash->success("Report Saved");
                    return $this->redirect($this->referer());
                }
                if ($reportEntity) {
                    $this->redirect(['controller' => "ReportMasters", 'action' => "fillReportData", base64_encode($reportEntity->id)]);
                } else {
                    $this->Flash->error("Error In Report Filling");
                }
            } else {

                $this->Flash->error("Please Fill Report for " . $s->format("d/m/y") . " Date");

                return $this->redirect($this->referer());
            }
        }
    }

    function fillReportData($reportId) {
        $reportId = base64_decode($reportId);

        if (empty($reportId))
            throw new Exception("Invalid Request");

        if ($this->request->is(["POST"])) {
            $data = $this->request->data;
            $doctorReport = [];
            $chemistReport = [];
            foreach ($data['data']['ReportEntryDoctors'] as $key => $value) {
                $value['report_master_id'] = $data['report_master_id'];
                $value['user_id'] = $this->Auth->user("id");
                $doctorReport[] = $value;
            }
            foreach ($data['data']['ReportEntryChemists'] as $key => $value) {
                $value['report_master_id'] = $data['report_master_id'];
                $value['user_id'] = $this->Auth->user("id");
                $chemistReport [] = $value;
            }

            $chemistTable = \Cake\ORM\TableRegistry::get("ReportEntryChemists");
            $DoctorsTable = \Cake\ORM\TableRegistry::get("ReportEntryDoctors");

            if ($DoctorsTable->saveMany($DoctorsTable->newEntities($doctorReport))) {
                
            }
            if ($chemistTable->saveMany($chemistTable->newEntities($chemistReport))) {
                
            }

            $this->Flash->success("Report Saved Successfully");

            return $this->redirect(['controller' => 'ReportMasters', 'action' => 'previewReport', base64_encode($reportId)]);
        }
        $reportEntity = $this->ReportMasters->get($reportId, ['contain' => ['ReportEntryDoctors', 'ReportEntryChemists']]);
        if ($reportEntity->status == 1) {
            $this->Flash->error("Can't Edit Report Already Sent");
            return $this->redirect(['controller' => 'ReportMasters', 'action' => 'previewReport', base64_encode($reportId)]);
        }
        $patchTable = \Cake\ORM\TableRegistry::get("Patchs");
        $DoctorsTable = \Cake\ORM\TableRegistry::get("Doctors");
        $ChemistsTable = \Cake\ORM\TableRegistry::get("Chemists");
        $ProductsTable = \Cake\ORM\TableRegistry::get("Products");
        $patchesList = $patchTable->find("list")->where(['user_id' => $reportEntity->user_id])->toArray();
        $doctorsList = $DoctorsTable->find("list")->where(['user_id' => $reportEntity->user_id])->toArray();
        $chemistsList = $ChemistsTable->find("list")->where(['user_id' => $reportEntity->user_id])->toArray();
        $productsList = $ProductsTable->find("list")->toArray();

        $this->set(compact("reportEntity", "patchesList", "doctorsList", "chemistsList", "productsList"));
    }

    function previewReport($id) {
        $reportEntity = $this->ReportMasters->get(base64_decode($id), ['contain' => ['ReportEntryDoctors' => ['Products' => ['fields' => ['name']], 'Doctors' => ['fields' => ['name']], 'Patchs' => ['fields' => ['name']]], 'ReportEntryChemists' => ['Products' => ['fields' => ['name']], 'Chemists' => ['fields' => ['name']], 'Patchs' => ['fields' => ['name']]]]]);

        if (empty($reportEntity)) {
            throw new \Exception("No Record Found");
        }
        $this->set(compact("reportEntity"));
    }

    function sendReport() {
        if ($this->request->is(["POST"])) {
            $id = $this->request->data['id'];
            if ($this->ReportMasters->updateAll(['status' => 1], ['id' => $id])) {
                $this->Flash->success("Report Send Successfully");
                return $this->redirect($this->referer());
            }
        }
    }

}
