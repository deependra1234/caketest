<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $doctor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Report Entry Doctors'), ['controller' => 'ReportEntryDoctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report Entry Doctor'), ['controller' => 'ReportEntryDoctors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="doctors form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor) ?>
    <fieldset>
        <legend><?= __('Edit Doctor') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('patch_id');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('specialzation');
            echo $this->Form->input('dob', ['empty' => true]);
            echo $this->Form->input('marriage_date', ['empty' => true]);
            echo $this->Form->input('address');
            echo $this->Form->input('state_id');
            echo $this->Form->input('city_id');
            echo $this->Form->input('mail');
            echo $this->Form->input('mobile');
            echo $this->Form->input('status');
            echo $this->Form->input('created_on');
            echo $this->Form->input('updated_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
