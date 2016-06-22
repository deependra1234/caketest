<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chemists'), ['controller' => 'Chemists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chemist'), ['controller' => 'Chemists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Patchs'), ['controller' => 'Patchs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Patch'), ['controller' => 'Patchs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Report Entry Chemists'), ['controller' => 'ReportEntryChemists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report Entry Chemist'), ['controller' => 'ReportEntryChemists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Report Entry Doctors'), ['controller' => 'ReportEntryDoctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report Entry Doctor'), ['controller' => 'ReportEntryDoctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Report Masters'), ['controller' => 'ReportMasters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report Master'), ['controller' => 'ReportMasters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('user_type_id', ['options' => $userTypes]);
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('name');
            echo $this->Form->input('created_on');
            echo $this->Form->input('updated_on');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
