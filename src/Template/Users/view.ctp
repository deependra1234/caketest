<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chemists'), ['controller' => 'Chemists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chemist'), ['controller' => 'Chemists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doctors'), ['controller' => 'Doctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doctor'), ['controller' => 'Doctors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Patchs'), ['controller' => 'Patchs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patch'), ['controller' => 'Patchs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Report Entry Chemists'), ['controller' => 'ReportEntryChemists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Entry Chemist'), ['controller' => 'ReportEntryChemists', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Report Entry Doctors'), ['controller' => 'ReportEntryDoctors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Entry Doctor'), ['controller' => 'ReportEntryDoctors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Report Masters'), ['controller' => 'ReportMasters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Master'), ['controller' => 'ReportMasters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User Type') ?></th>
            <td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($user->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created On') ?></th>
            <td><?= h($user->created_on) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated On') ?></th>
            <td><?= h($user->updated_on) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Chemists') ?></h4>
        <?php if (!empty($user->chemists)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Owner Name') ?></th>
                <th><?= __('Owner Email') ?></th>
                <th><?= __('Owner Mobile') ?></th>
                <th><?= __('Contact Email') ?></th>
                <th><?= __('Contact Mobile') ?></th>
                <th><?= __('Contact Name') ?></th>
                <th><?= __('Patch Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('State Id') ?></th>
                <th><?= __('City Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created On') ?></th>
                <th><?= __('Updated On') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->chemists as $chemists): ?>
            <tr>
                <td><?= h($chemists->id) ?></td>
                <td><?= h($chemists->name) ?></td>
                <td><?= h($chemists->owner_name) ?></td>
                <td><?= h($chemists->owner_email) ?></td>
                <td><?= h($chemists->owner_mobile) ?></td>
                <td><?= h($chemists->contact_email) ?></td>
                <td><?= h($chemists->contact_mobile) ?></td>
                <td><?= h($chemists->contact_name) ?></td>
                <td><?= h($chemists->patch_id) ?></td>
                <td><?= h($chemists->user_id) ?></td>
                <td><?= h($chemists->address) ?></td>
                <td><?= h($chemists->state_id) ?></td>
                <td><?= h($chemists->city_id) ?></td>
                <td><?= h($chemists->status) ?></td>
                <td><?= h($chemists->created_on) ?></td>
                <td><?= h($chemists->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Chemists', 'action' => 'view', $chemists->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Chemists', 'action' => 'edit', $chemists->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chemists', 'action' => 'delete', $chemists->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chemists->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Doctors') ?></h4>
        <?php if (!empty($user->doctors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Patch Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Specialzation') ?></th>
                <th><?= __('Dob') ?></th>
                <th><?= __('Marriage Date') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('State Id') ?></th>
                <th><?= __('City Id') ?></th>
                <th><?= __('Mail') ?></th>
                <th><?= __('Mobile') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created On') ?></th>
                <th><?= __('Updated On') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->doctors as $doctors): ?>
            <tr>
                <td><?= h($doctors->id) ?></td>
                <td><?= h($doctors->name) ?></td>
                <td><?= h($doctors->patch_id) ?></td>
                <td><?= h($doctors->user_id) ?></td>
                <td><?= h($doctors->specialzation) ?></td>
                <td><?= h($doctors->dob) ?></td>
                <td><?= h($doctors->marriage_date) ?></td>
                <td><?= h($doctors->address) ?></td>
                <td><?= h($doctors->state_id) ?></td>
                <td><?= h($doctors->city_id) ?></td>
                <td><?= h($doctors->mail) ?></td>
                <td><?= h($doctors->mobile) ?></td>
                <td><?= h($doctors->status) ?></td>
                <td><?= h($doctors->created_on) ?></td>
                <td><?= h($doctors->updated_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Doctors', 'action' => 'view', $doctors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Doctors', 'action' => 'edit', $doctors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Doctors', 'action' => 'delete', $doctors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $doctors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Patchs') ?></h4>
        <?php if (!empty($user->patchs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Created On') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->patchs as $patchs): ?>
            <tr>
                <td><?= h($patchs->id) ?></td>
                <td><?= h($patchs->name) ?></td>
                <td><?= h($patchs->user_id) ?></td>
                <td><?= h($patchs->status) ?></td>
                <td><?= h($patchs->created_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Patchs', 'action' => 'view', $patchs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Patchs', 'action' => 'edit', $patchs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Patchs', 'action' => 'delete', $patchs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patchs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Report Entry Chemists') ?></h4>
        <?php if (!empty($user->report_entry_chemists)): ?>
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
            <?php foreach ($user->report_entry_chemists as $reportEntryChemists): ?>
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
    <div class="related">
        <h4><?= __('Related Report Entry Doctors') ?></h4>
        <?php if (!empty($user->report_entry_doctors)): ?>
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
            <?php foreach ($user->report_entry_doctors as $reportEntryDoctors): ?>
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
    <div class="related">
        <h4><?= __('Related Report Masters') ?></h4>
        <?php if (!empty($user->report_masters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Report Date') ?></th>
                <th><?= __('Work Status') ?></th>
                <th><?= __('Created On') ?></th>
                <th><?= __('Updated On') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->report_masters as $reportMasters): ?>
            <tr>
                <td><?= h($reportMasters->id) ?></td>
                <td><?= h($reportMasters->user_id) ?></td>
                <td><?= h($reportMasters->report_date) ?></td>
                <td><?= h($reportMasters->work_status) ?></td>
                <td><?= h($reportMasters->created_on) ?></td>
                <td><?= h($reportMasters->updated_on) ?></td>
                <td><?= h($reportMasters->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ReportMasters', 'action' => 'view', $reportMasters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ReportMasters', 'action' => 'edit', $reportMasters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ReportMasters', 'action' => 'delete', $reportMasters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportMasters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
