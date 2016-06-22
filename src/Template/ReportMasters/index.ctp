<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Report Master'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportMasters index large-9 medium-8 columns content">
    <h3><?= __('Report Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('report_date') ?></th>
                <th><?= $this->Paginator->sort('work_status') ?></th>
                <th><?= $this->Paginator->sort('created_on') ?></th>
                <th><?= $this->Paginator->sort('updated_on') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reportMasters as $reportMaster): ?>
            <tr>
                <td><?= $this->Number->format($reportMaster->id) ?></td>
                <td><?= $reportMaster->has('user') ? $this->Html->link($reportMaster->user->name, ['controller' => 'Users', 'action' => 'view', $reportMaster->user->]) : '' ?></td>
                <td><?= h($reportMaster->report_date) ?></td>
                <td><?= $this->Number->format($reportMaster->work_status) ?></td>
                <td><?= h($reportMaster->created_on) ?></td>
                <td><?= h($reportMaster->updated_on) ?></td>
                <td><?= $this->Number->format($reportMaster->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reportMaster->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reportMaster->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reportMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportMaster->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
