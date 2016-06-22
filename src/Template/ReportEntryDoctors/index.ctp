<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Report Entry Doctor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportEntryDoctors index large-9 medium-8 columns content">
    <h3><?= __('Report Entry Doctors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('doctor_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('samples_given') ?></th>
                <th><?= $this->Paginator->sort('created_on') ?></th>
                <th><?= $this->Paginator->sort('updated_on') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reportEntryDoctors as $reportEntryDoctor): ?>
            <tr>
                <td><?= $this->Number->format($reportEntryDoctor->id) ?></td>
                <td><?= $reportEntryDoctor->has('doctor') ? $this->Html->link($reportEntryDoctor->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $reportEntryDoctor->doctor->id]) : '' ?></td>
                <td><?= $reportEntryDoctor->has('user') ? $this->Html->link($reportEntryDoctor->user->name, ['controller' => 'Users', 'action' => 'view', $reportEntryDoctor->user->]) : '' ?></td>
                <td><?= $reportEntryDoctor->has('product') ? $this->Html->link($reportEntryDoctor->product->name, ['controller' => 'Products', 'action' => 'view', $reportEntryDoctor->product->id]) : '' ?></td>
                <td><?= $this->Number->format($reportEntryDoctor->samples_given) ?></td>
                <td><?= h($reportEntryDoctor->created_on) ?></td>
                <td><?= h($reportEntryDoctor->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reportEntryDoctor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reportEntryDoctor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reportEntryDoctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportEntryDoctor->id)]) ?>
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
