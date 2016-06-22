<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reportEntryDoctor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reportEntryDoctor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Report Entry Doctors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportEntryDoctors form large-9 medium-8 columns content">
    <?= $this->Form->create($reportEntryDoctor) ?>
    <fieldset>
        <legend><?= __('Edit Report Entry Doctor') ?></legend>
        <?php
            echo $this->Form->input('doctor_id', ['options' => $doctors]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('product_id', ['options' => $products]);
            echo $this->Form->input('samples_given');
            echo $this->Form->input('gift');
            echo $this->Form->input('comment');
            echo $this->Form->input('created_on');
            echo $this->Form->input('updated_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
