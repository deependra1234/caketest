<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Chemists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Report Entry Chemists'), ['controller' => 'ReportEntryChemists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report Entry Chemist'), ['controller' => 'ReportEntryChemists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chemists form large-9 medium-8 columns content">
    <?= $this->Form->create($chemist) ?>
    <fieldset>
        <legend><?= __('Add Chemist') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('owner_name');
            echo $this->Form->input('owner_email');
            echo $this->Form->input('owner_mobile');
            echo $this->Form->input('contact_email');
            echo $this->Form->input('contact_mobile');
            echo $this->Form->input('contact_name');
            echo $this->Form->input('patch_id');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('address');
            echo $this->Form->input('state_id');
            echo $this->Form->input('city_id');
            echo $this->Form->input('status');
            echo $this->Form->input('created_on');
            echo $this->Form->input('updated_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
