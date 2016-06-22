<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel"><div class="x_title">
                <h2>Doctors</h2>

                <div class="clearfix"></div>
            </div>
          <table  id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('patch') ?></th>
              
                <th><?= $this->Paginator->sort('dob') ?></th>
                <th><?= $this->Paginator->sort('marriage_date') ?></th>
              
                <th><?= $this->Paginator->sort('mail') ?></th>
                <th><?= $this->Paginator->sort('mobile') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_on') ?></th>
            
                <th class="actions"><?= __('Actions') ?></th>
                  <th><?= $this->Paginator->sort('State') ?></th>
                <th><?= $this->Paginator->sort('City') ?></th>
                <th><?= $this->Paginator->sort('updated_on') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($doctors as $doctor): ?>
                <tr>
                    <td><?= $this->Number->format($doctor->id) ?></td>
                    <td><?= ($doctor->name) ?></td>
                    <td><?= $doctor->patch->name ?></td>
                    <td><?= h($doctor->dob) ?></td>
                    <td><?= h($doctor->marriage_date) ?></td>
                    
                  
                    <td><?= h($doctor->mail) ?></td>
                    <td><?= h($doctor->mobile) ?></td>
                    <td><?= ($doctor->status==1?"Active":"InActive") ?></td>
                   <td><?= h($doctor->created_on) ?></td>
                    <td class="actions">
                       
                        <?= $this->Html->link("<i class='fa fa-edit'></i>", ['action' => 'add', base64_encode($doctor->id)],['escape'=>false]) ?>
                     
                        <?= $this->Form->postLink("<i class='fa fa-remove'></i>", ['action' => 'delete', $doctor->id],['escape'=>false], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?>
                    </td>
                    <td><?= ($doctor->state->name) ?></td>
                    <td><?= ($doctor->city->name) ?></td>
                    <td><?= h($doctor->updated_on) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table></div></div></div>
<script>

    $(function () {

        $('#datatable-responsive').DataTable();
     
    });</script>

   
    
