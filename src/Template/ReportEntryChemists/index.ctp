<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Report Entry Chemist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chemists'), ['controller' => 'Chemists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chemist'), ['controller' => 'Chemists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportEntryChemists index large-9 medium-8 columns content">
    <h3><?= __('Report Entry Chemists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('chemist_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('samples_given') ?></th>
                <th><?= $this->Paginator->sort('created_on') ?></th>
                <th><?= $this->Paginator->sort('updated_on') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reportEntryChemists as $reportEntryChemist): ?>
            <tr>
                <td><?= $this->Number->format($reportEntryChemist->id) ?></td>
                <td><?= $reportEntryChemist->has('chemist') ? $this->Html->link($reportEntryChemist->chemist->name, ['controller' => 'Chemists', 'action' => 'view', $reportEntryChemist->chemist->id]) : '' ?></td>
                <td><?= $reportEntryChemist->has('user') ? $this->Html->link($reportEntryChemist->user->name, ['controller' => 'Users', 'action' => 'view', $reportEntryChemist->user->]) : '' ?></td>
                <td><?= $reportEntryChemist->has('product') ? $this->Html->link($reportEntryChemist->product->name, ['controller' => 'Products', 'action' => 'view', $reportEntryChemist->product->id]) : '' ?></td>
                <td><?= $this->Number->format($reportEntryChemist->samples_given) ?></td>
                <td><?= h($reportEntryChemist->created_on) ?></td>
                <td><?= h($reportEntryChemist->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reportEntryChemist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reportEntryChemist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reportEntryChemist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportEntryChemist->id)]) ?>
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
