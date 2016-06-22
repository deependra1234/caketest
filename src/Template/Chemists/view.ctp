<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chemist'), ['action' => 'edit', $chemist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chemist'), ['action' => 'delete', $chemist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chemist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chemists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chemist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Report Entry Chemists'), ['controller' => 'ReportEntryChemists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Entry Chemist'), ['controller' => 'ReportEntryChemists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chemists view large-9 medium-8 columns content">
    <h3><?= h($chemist->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($chemist->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Owner Name') ?></th>
            <td><?= h($chemist->owner_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Owner Email') ?></th>
            <td><?= h($chemist->owner_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Owner Mobile') ?></th>
            <td><?= h($chemist->owner_mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Email') ?></th>
            <td><?= h($chemist->contact_email) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Mobile') ?></th>
            <td><?= h($chemist->contact_mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact Name') ?></th>
            <td><?= h($chemist->contact_name) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $chemist->has('user') ? $this->Html->link($chemist->user->name, ['controller' => 'Users', 'action' => 'view', $chemist->user->]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($chemist->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Patch Id') ?></th>
            <td><?= $this->Number->format($chemist->patch_id) ?></td>
        </tr>
        <tr>
            <th><?= __('State Id') ?></th>
            <td><?= $this->Number->format($chemist->state_id) ?></td>
        </tr>
        <tr>
            <th><?= __('City Id') ?></th>
            <td><?= $this->Number->format($chemist->city_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($chemist->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created On') ?></th>
            <td><?= h($chemist->created_on) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated On') ?></th>
            <td><?= h($chemist->updated_on) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($chemist->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Report Entry Chemists') ?></h4>
        <?php if (!empty($chemist->report_entry_chemists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Chemist Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Samples Given') ?></th>
                <th><?= __('Gift') ?></th>
                <th><?= __('Comment') ?></th>
                <th><?= __('Created On') ?></th>
                <th><?= __('Updated On') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($chemist->report_entry_chemists as $reportEntryChemists): ?>
            <tr>
                <td><?= h($reportEntryChemists->id) ?></td>
                <td><?= h($reportEntryChemists->chemist_id) ?></td>
                <td><?= h($reportEntryChemists->user_id) ?></td>
                <td><?= h($reportEntryChemists->product_id) ?></td>
                <td><?= h($reportEntryChemists->samples_given) ?></td>
                <td><?= h($reportEntryChemists->gift) ?></td>
                <td><?= h($reportEntryChemists->comment) ?></td>
                <td><?= h($reportEntryChemists->created_on) ?></td>
                <td><?= h($reportEntryChemists->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ReportEntryChemists', 'action' => 'view', $reportEntryChemists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ReportEntryChemists', 'action' => 'edit', $reportEntryChemists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ReportEntryChemists', 'action' => 'delete', $reportEntryChemists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportEntryChemists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
