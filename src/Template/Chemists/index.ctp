<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Chemist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Report Entry Chemists'), ['controller' => 'ReportEntryChemists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report Entry Chemist'), ['controller' => 'ReportEntryChemists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chemists index large-9 medium-8 columns content">
    <h3><?= __('Chemists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('owner_name') ?></th>
                <th><?= $this->Paginator->sort('owner_email') ?></th>
                <th><?= $this->Paginator->sort('owner_mobile') ?></th>
                <th><?= $this->Paginator->sort('contact_email') ?></th>
                <th><?= $this->Paginator->sort('contact_mobile') ?></th>
                <th><?= $this->Paginator->sort('contact_name') ?></th>
                <th><?= $this->Paginator->sort('patch_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('state_id') ?></th>
                <th><?= $this->Paginator->sort('city_id') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('created_on') ?></th>
                <th><?= $this->Paginator->sort('updated_on') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chemists as $chemist): ?>
            <tr>
                <td><?= $this->Number->format($chemist->id) ?></td>
                <td><?= h($chemist->name) ?></td>
                <td><?= h($chemist->owner_name) ?></td>
                <td><?= h($chemist->owner_email) ?></td>
                <td><?= h($chemist->owner_mobile) ?></td>
                <td><?= h($chemist->contact_email) ?></td>
                <td><?= h($chemist->contact_mobile) ?></td>
                <td><?= h($chemist->contact_name) ?></td>
                <td><?= $this->Number->format($chemist->patch_id) ?></td>
                <td><?= $chemist->has('user') ? $this->Html->link($chemist->user->name, ['controller' => 'Users', 'action' => 'view', $chemist->user->]) : '' ?></td>
                <td><?= $this->Number->format($chemist->state_id) ?></td>
                <td><?= $this->Number->format($chemist->city_id) ?></td>
                <td><?= $this->Number->format($chemist->status) ?></td>
                <td><?= h($chemist->created_on) ?></td>
                <td><?= h($chemist->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chemist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chemist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chemist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chemist->id)]) ?>
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
