<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Report Entry Chemists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Chemists'), ['controller' => 'Chemists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chemist'), ['controller' => 'Chemists', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reportEntryChemists form large-9 medium-8 columns content">
    <?= $this->Form->create($reportEntryChemist) ?>
    <fieldset>
        <legend><?= __('Add Report Entry Chemist') ?></legend>
        <?php
            echo $this->Form->input('chemist_id', ['options' => $chemists]);
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
