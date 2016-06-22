<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Create Report</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row"><?php
                    // $this->Form->templates(\Cake\Core\Configure::read("Templates.inlineForm"));
                    echo $this->Form->create(false);
                    $this->Form->unlockField("report_on");
                 echo "<div class='col-lg-5'>".$this->Form->input('report_on', [ 'type' => 'date', 'templates' => ['dateWidget' => '<div class=" input-group date "><input  type="text"  class="form-control" name="report_on"   {{attrs}} name="{{name}}" /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>']])."</div>" ;
                    echo "<div class='col-lg-5'>". $this->Form->input('work_status', ['options' => \App\Utility\GlobalVariable::getWorkType(),'class'=>'form-control'])."</div>";
                    echo "<div class='col-lg-2'><label>&nbsp;</label>".$this->Form->submit(__('Proceed'), ['class' => 'btn btn-success'])."</div>";
                    echo $this->Form->end()
                    ?></div>
                <div class="x_title">
                    <h2> Reports</h2>

                    <div class="clearfix"></div>
                </div>
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th><?= __('Sr.no') ?></th>
                            <th><?= __('Report Date') ?></th>
                            <th><?= __('work_status') ?></th>
                            <th><?= __('Created on') ?></th>
                            <th><?= __('status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($reportsDetails as $report):
                            ?>
                            <tr>
                                <td><?= $this->Number->format($i++) ?></td>
                                <td><?= date('d M Y', strtotime(($report->report_date))) ?></td>
                                <td><?php
                                    $w = \App\Utility\GlobalVariable::getWorkType();
                                    echo $w[$report->work_status];
                                    ?></td>
                                <td><?= date('d M Y', strtotime($report->created_on)) ?></td>
                                <td><?= ($report->status == 1 ? "<span= class='label label-success'>Report Sent</span>" : "<span= class='label label-danger'>Not Sent</span    >") ?></td>
                                <td class="actions">
                                    <?= $this->Html->link("<i class='fa fa-eye fa-2x red' ></i>", ['action' => 'previewReport', base64_encode($report->id)], ['escape' => false]) ?>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div></div>



    </div></div>
<script>

    $(function () {


        $('#report-on').daterangepicker({
            singleDatePicker: true, calender_style: "picker_1"

        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });

        $("form").validate({
            rules: {
                report_on: "required",
                work_status: "required"
            }
        });

    });</script>