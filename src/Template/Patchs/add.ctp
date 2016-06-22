<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Create New Patch</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <center><?= $this->Form->create($patch, ['id' => 'addpatch']) ?>
                    <div class="col-lg-5"><?= $this->Form->input('name', ['label'=>'Patch Name', 'class' => 'form-control']) ?></div>
                    <div class="col-lg-5"><?= $this->Form->input('status', ['class' => 'form-control', 'options' => array(1 => 'Active', 0 => 'Inactive')]) ?></div>
                    <div class="col-lg-2"><label>&nbsp;</label><?= $this->Form->submit(__('Submit'), ['class' => 'btn btn-success']) ?></div>
                    <?php
                    echo $this->Form->end()
                    ?></center>
                <div class="x_title">
                    <h2>Patches</h2>

                    <div class="clearfix"></div>
                </div>
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><?= __('id') ?></th>
                            <th><?= __('name') ?></th>
                            <th><?= __('status') ?></th>
                            <th><?= __('created_on') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($patchs as $patch): ?>
                            <tr>
                                <td><?= $this->Number->format($patch->id) ?></td>
                                <td><?= ($patch->name) ?></td>
                                <td><?= ($patch->status == 1 ? "ACTIVE" : 'INACTIVE') ?></td>
                                <td><?= h($patch->created_on) ?></td>
                                <td class="actions">

                                    <?= $this->Html->link("<i class='fa fa-edit'></i>", ['action' => 'add', base64_encode($patch->id)], ['escape' => false]) ?>
                                    <?= $this->Form->postLink("<i class='fa fa-remove'></i>", ['action' => 'delete', $patch->id], ['escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $patch->name)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div></div>



    </div></div>
<script>

    $(function () {

        $('#datatable-responsive').DataTable();
        $("addproduct").validate({
            rules: {
                name: "required",
                status: "required"
            }
        });
    });</script>