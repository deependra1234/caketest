<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Report Entry Chemist'), ['action' => 'edit', $reportEntryChemist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report Entry Chemist'), ['action' => 'delete', $reportEntryChemist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportEntryChemist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Report Entry Chemists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Entry Chemist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chemists'), ['controller' => 'Chemists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chemist'), ['controller' => 'Chemists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reportEntryChemists view large-9 medium-8 columns content">
    <h3><?= h($reportEntryChemist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Chemist') ?></th>
            <td><?= $reportEntryChemist->has('chemist') ? $this->Html->link($reportEntryChemist->chemist->name, ['controller' => 'Chemists', 'action' => 'view', $reportEntryChemist->chemist->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $reportEntryChemist->has('user') ? $this->Html->link($reportEntryChemist->user->name, ['controller' => 'Users', 'action' => 'view', $reportEntryChemist->user->]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $reportEntryChemist->has('product') ? $this->Html->link($reportEntryChemist->product->name, ['controller' => 'Products', 'action' => 'view', $reportEntryChemist->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($reportEntryChemist->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Samples Given') ?></th>
            <td><?= $this->Number->format($reportEntryChemist->samples_given) ?></td>
        </tr>
        <tr>
            <th><?= __('Created On') ?></th>
            <td><?= h($reportEntryChemist->created_on) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated On') ?></th>
            <td><?= h($reportEntryChemist->updated_on) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Gift') ?></h4>
        <?= $this->Text->autoParagraph(h($reportEntryChemist->gift)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($reportEntryChemist->comment)); ?>
    </div>
</div>
