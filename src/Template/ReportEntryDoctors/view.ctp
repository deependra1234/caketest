<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Report Entry Doctor'), ['action' => 'edit', $reportEntryDoctor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report Entry Doctor'), ['action' => 'delete', $reportEntryDoctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportEntryDoctor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Report Entry Doctors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Entry Doctor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reportEntryDoctors view large-9 medium-8 columns content">
    <h3><?= h($reportEntryDoctor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Doctor') ?></th>
            <td><?= $reportEntryDoctor->has('doctor') ? $this->Html->link($reportEntryDoctor->doctor->name, ['controller' => 'Doctors', 'action' => 'view', $reportEntryDoctor->doctor->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $reportEntryDoctor->has('user') ? $this->Html->link($reportEntryDoctor->user->name, ['controller' => 'Users', 'action' => 'view', $reportEntryDoctor->user->]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $reportEntryDoctor->has('product') ? $this->Html->link($reportEntryDoctor->product->name, ['controller' => 'Products', 'action' => 'view', $reportEntryDoctor->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($reportEntryDoctor->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Samples Given') ?></th>
            <td><?= $this->Number->format($reportEntryDoctor->samples_given) ?></td>
        </tr>
        <tr>
            <th><?= __('Created On') ?></th>
            <td><?= h($reportEntryDoctor->created_on) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated On') ?></th>
            <td><?= h($reportEntryDoctor->updated_on) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Gift') ?></h4>
        <?= $this->Text->autoParagraph(h($reportEntryDoctor->gift)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($reportEntryDoctor->comment)); ?>
    </div>
</div>
