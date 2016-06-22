
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="page-title">
        <div class="title_left">
            <h3>Users </h3>
        </div>

    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>User List</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('user_type_id') ?></th>
                            <th><?= $this->Paginator->sort('username') ?></th>
                            <th><?= $this->Paginator->sort('password') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('created_on') ?></th>
                            <th><?= $this->Paginator->sort('updated_on') ?></th>
                            <th><?= $this->Paginator->sort('status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>

                    </thead>

                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
                                <td><?= h($user->username) ?></td>
                                <td><?= h($user->password) ?></td>
                                <td><?= h($user->name) ?></td>
                                <td><?= h($user->created_on) ?></td>
                                <td><?= h($user->updated_on) ?></td>
                                <td><?= $this->Number->format($user->status) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>




    <script>

        $(function () {

            $('#datatable-responsive').DataTable();

        });</script>
    
</div>
