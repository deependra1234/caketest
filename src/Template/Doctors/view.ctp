<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Doctor'), ['action' => 'edit', $doctor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Doctor'), ['action' => 'delete', $doctor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Report Entry Doctors'), ['controller' => 'ReportEntryDoctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Entry Doctor'), ['controller' => 'ReportEntryDoctors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="doctors view large-9 medium-8 columns content">
    <h3><?= h($doctor->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $doctor->has('user') ? $this->Html->link($doctor->user->name, ['controller' => 'Users', 'action' => 'view', $doctor->user->]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Mail') ?></th>
            <td><?= h($doctor->mail) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($doctor->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($doctor->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= $this->Number->format($doctor->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Patch Id') ?></th>
            <td><?= $this->Number->format($doctor->patch_id) ?></td>
        </tr>
        <tr>
            <th><?= __('State Id') ?></th>
            <td><?= $this->Number->format($doctor->state_id) ?></td>
        </tr>
        <tr>
            <th><?= __('City Id') ?></th>
            <td><?= $this->Number->format($doctor->city_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($doctor->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Dob') ?></th>
            <td><?= h($doctor->dob) ?></td>
        </tr>
        <tr>
            <th><?= __('Marriage Date') ?></th>
            <td><?= h($doctor->marriage_date) ?></td>
        </tr>
        <tr>
            <th><?= __('Created On') ?></th>
            <td><?= h($doctor->created_on) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated On') ?></th>
            <td><?= h($doctor->updated_on) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Specialzation') ?></h4>
        <?= $this->Text->autoParagraph(h($doctor->specialzation)); ?>
    </div>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($doctor->address)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Report Entry Doctors') ?></h4>
        <?php if (!empty($doctor->report_entry_doctors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Doctor Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Samples Given') ?></th>
                <th><?= __('Gift') ?></th>
                <th><?= __('Comment') ?></th>
                <th><?= __('Created On') ?></th>
                <th><?= __('Updated On') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($doctor->report_entry_doctors as $reportEntryDoctors): ?>
            <tr>
                <td><?= h($reportEntryDoctors->id) ?></td>
                <td><?= h($reportEntryDoctors->doctor_id) ?></td>
                <td><?= h($reportEntryDoctors->user_id) ?></td>
                <td><?= h($reportEntryDoctors->product_id) ?></td>
                <td><?= h($reportEntryDoctors->samples_given) ?></td>
                <td><?= h($reportEntryDoctors->gift) ?></td>
                <td><?= h($reportEntryDoctors->comment) ?></td>
                <td><?= h($reportEntryDoctors->created_on) ?></td>
                <td><?= h($reportEntryDoctors->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ReportEntryDoctors', 'action' => 'view', $reportEntryDoctors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ReportEntryDoctors', 'action' => 'edit', $reportEntryDoctors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ReportEntryDoctors', 'action' => 'delete', $reportEntryDoctors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportEntryDoctors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
