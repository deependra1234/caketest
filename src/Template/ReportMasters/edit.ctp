<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reportMaster->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reportMaster->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Report Masters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportMasters form large-9 medium-8 columns content">
    <?= $this->Form->create($reportMaster) ?>
    <fieldset>
        <legend><?= __('Edit Report Master') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('report_date');
            echo $this->Form->input('work_status');
            echo $this->Form->input('created_on');
            echo $this->Form->input('updated_on');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
