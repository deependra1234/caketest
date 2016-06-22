<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Report Master'), ['action' => 'edit', $reportMaster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report Master'), ['action' => 'delete', $reportMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportMaster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Report Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Master'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reportMasters view large-9 medium-8 columns content">
    <h3><?= h($reportMaster->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $reportMaster->has('user') ? $this->Html->link($reportMaster->user->name, ['controller' => 'Users', 'action' => 'view', $reportMaster->user->]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($reportMaster->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Work Status') ?></th>
            <td><?= $this->Number->format($reportMaster->work_status) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($reportMaster->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Report Date') ?></th>
            <td><?= h($reportMaster->report_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created On') ?></th>
            <td><?= h($reportMaster->created_on) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated On') ?></th>
            <td><?= h($reportMaster->updated_on) ?></td>
        </tr>
    </table>
</div>
