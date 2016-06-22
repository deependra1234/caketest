<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Create Report</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">


                    <div class="col-md-12"><div class="col-md-6">
                            <div class="form-group">
                                <label>Report Date : </label>
                                <span><?= date("d M Y", strtotime($reportEntity['report_date'])) ?></span>

                            </div>
                            <div class="form-group">
                                <label>Work Status : </label>
                                <span><?= App\Utility\GlobalVariable::getWorkType()[$reportEntity['work_status']] ?></span>

                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="form-group">
                                <label>Name </label>
                                <span><?= $this->request->session()->read("Auth.User.name") ?></span>

                            </div>
                            <div class="form-group">
                                <!--                        <label>Work Status : </label>
                                                        <span><?= App\Utility\GlobalVariable::getWorkType()[$reportEntity['work_status']] ?></span>-->

                            </div>
                        </div></div>


                </div>
                <?php
                $this->Form->templates(\Cake\Core\Configure::read("Templates.inlineForm"));
                echo $this->Form->create(false);
                echo $this->Form->hidden("report_master_id", ['value' => $reportEntity->id]);
                ?>
                <div class="row">

                    <div class="panel panel-info">
                        <div class="panel-heading" style="height: auto;overflow: hidden">
                            <h2 class="pull-left">Doctor Visited Report Details</h2>                            <a id="addrow" href="javascript(0)" class=" pull-right"><i class="fa fa-plus-circle fa-2x"></i></a>

                        </div>
                        <div class="panel-content">


                            <table  class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Patch</th>
                                        <th>Doctor</th>
                                        <th>Product</th> 
                                        <th>Sample</th>
                                        <th>Gift</th>
                                        <th>Comment</th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="reportdetailtable">
                                    <?php
                                    if ($reportEntity->status == 1) {
                                        $srno = 1;
                                        foreach ($reportEntity->report_entry_doctors as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $srno ?></td>
                                                <td><?= $patchesList[$value['patch_id']] ?></td>
                                                <td><?= $doctorsList[$value['doctor_id']] ?></td>
                                                <td><?= $productsList[$value['product_id']] ?></td>
                                                <td><?= $value['samples_given'] ?></td>
                                                <td><?= $value['gift'] ?></td>
                                                <td><?= $value['comment'] ?></td>
                                                <td>NA</td>
                                            </tr>

                                            <?php
                                            $srno++;
                                        }
                                    } elseif ($reportEntity->status == 0) {

                                        $srno = 1;
                                        foreach ($reportEntity->report_entry_doctors as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $srno ?></td>
                                                <td><?= isset($patchesList[$value['patch_id']]) ? $patchesList[$value['patch_id']] : '' ?></td>
                                                <td><?= $doctorsList[$value['doctor_id']] ?></td>
                                                <td><?= $productsList[$value['product_id']] ?></td>
                                                <td><?= $value['samples_given'] ?></td>
                                                <td><?= $value['gift'] ?></td>
                                                <td><?= $value['comment'] ?></td>
                                                <td><a href="#" class="deletereportitem" data-id="<?= $value['id'] ?>" ><i class="fa fa-remove fa-2x"></i></a></td>
                                            </tr>

                                            <?php
                                            $srno++;
                                        }
                                        ?><tr>

                                            <td>
                                                <?= $srno ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->input("patch_id", ['label' => false, 'name' => 'data[ReportEntryDoctors][' . $srno . '][patch_id]', 'options' => $patchesList, 'empty' => 'Select']) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->input("doctor_id", ['label' => false, 'name' => 'data[ReportEntryDoctors][' . $srno . '][doctor_id]', 'options' => $doctorsList, 'empty' => 'Select']) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->input("product_id", ['label' => false, 'name' => 'data[ReportEntryDoctors][' . $srno . '][product_id]', 'options' => $productsList, 'empty' => 'Select']) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->input("samples_given", ['label' => false, 'name' => 'data[ReportEntryDoctors][' . $srno . '][samples_given]',]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->textarea("gift", ['name' => 'data[ReportEntryDoctors][' . $srno . '][gift]',]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->textarea("comment", ['name' => 'data[ReportEntryDoctors][' . $srno . '][comment]',]) ?>
                                            </td>
                                            <td><a  href="#" class="deleterow" ><i class="fa fa-minus-circle "></i></a></td>
                                        </tr>


                                    </tbody>
                                </table>



                                <?php
                            }
                            ?>       


                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="panel panel-info">
                        <div class="panel-heading" style="height: auto;overflow: hidden">
                            <h2 class="pull-left">Chemist Visited Report Details</h2>                            <a id="addrow1" href="javascript(0)" class=" pull-right"><i class="fa fa-plus-circle fa-2x"></i></a>

                        </div>
                        <div class="panel-content">


                            <table  class="table table-striped table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Patch</th>
                                        <th>Chemist</th>
                                        <th>Product</th> 
                                        <th>Sample</th>
                                        <th>Gift</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="reportdetailtable1">
                                    <?php
                                    if ($reportEntity->status == 1) {
                                        $srno = 1;
                                        foreach ($reportEntity->report_entry_chemists as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $srno ?></td>
                                                <td><?= $patchesList[$value['patch_id']] ?></td>
                                                <td><?= $chemistsList[$value['chemist_id']] ?></td>
                                                <td><?= $productsList[$value['product_id']] ?></td>
                                                <td><?= $value['samples_given'] ?></td>
                                                <td><?= $value['gift'] ?></td>
                                                <td><?= $value['comment'] ?></td>
                                                <td><a href="#" class="deletereportitem1" data-id="<?= $value['id'] ?>" ><i class="fa fa-remove fa-2x"></i></a></td>
                                            </tr>

                                            <?php
                                            $srno++;
                                        }
                                    } elseif ($reportEntity->status == 0) {

                                        $srno = 1;
                                        foreach ($reportEntity->report_entry_chemists as $value) {
                                            ?>
                                            <tr>
                                                <td><?= $srno ?></td>
                                                <td><?= $patchesList[$value['patch_id']] ?></td>
                                                <td><?= $chemistsList[$value['chemist_id']] ?></td>
                                                <td><?= $productsList[$value['product_id']] ?></td>
                                                <td><?= $value['samples_given'] ?></td>
                                                <td><?= $value['gift'] ?></td>
                                                <td><?= $value['comment'] ?></td>
                                                <td><a href="#" class="deletereportitem" ><i class="fa fa-remove fa-2x"></i></a></td>
                                            </tr>

                                            <?php
                                            $srno++;
                                        }
                                        ?><tr>

                                            <td>
                                                <?= $srno ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->input("patch_id", ['class' => 'abc', 'label' => false, 'name' => 'data[ReportEntryChemists][' . $srno . '][patch_id]', 'options' => $patchesList, 'empty' => 'Select']) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->input("chemist_id", ['label' => false, 'name' => 'data[ReportEntryChemists][' . $srno . '][chemist_id]', 'options' => $chemistsList, 'empty' => 'Select']) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->input("product_id", ['label' => false, 'name' => 'data[ReportEntryChemists][' . $srno . '][product_id]', 'options' => $productsList, 'empty' => 'Select']) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->input("samples_given", ['label' => false, 'name' => 'data[ReportEntryChemists][' . $srno . '][samples_given]',]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->textarea("gift", ['name' => 'data[ReportEntryChemists][' . $srno . '][gift]',]) ?>
                                            </td>
                                            <td>
                                                <?= $this->Form->textarea("comment", ['name' => 'data[ReportEntryChemists][' . $srno . '][comment]',]) ?>
                                            </td>
                                            <td><a  href="#" class="deleterow1" ><i class="fa fa-minus-circle "></i></a></td>
                                        </tr>


                                    </tbody>
                                </table>



                                <?php
                            }
                            ?>       


                        </div>
                    </div>
                </div>
                <?= $this->Form->submit("Save & Preview", ['class' => 'btn btn-success pull-right']) ?>
                <?= $this->Form->end() ?></div></div>



    </div></div>
<script>

    $(function () {


        $('#report-on').daterangepicker({
            singleDatePicker: true, calender_style: "picker_1"

        }, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
        $('#addrow').on('click', function (e) {
            e.preventDefault();
            var srno = 0;
            var clone = $('#reportdetailtable').find('tr:last').clone();
            $(clone).find("input").each(function () {
                $(this).val('');
            });
            var ii = parseInt($('#reportdetailtable').find('tr:last').find("td:first").text()) + 1;
            ;
            $(clone).find("td:first").text(ii);
            $(clone).find("td:first").next().find("select[name$='[patch_id]']").attr("name", "data[ReportEntryDoctors][" + ii + "][patch_id]");
            $(clone).find("td:first").next().next().find("select[name$='[doctor_id]']").attr("name", "data[ReportEntryDoctors][" + ii + "][doctor_id]");
            $(clone).find("td:first").next().next().next().find("select[name$='[product_id]']").attr("name", "data[ReportEntryDoctors][" + ii + "][product_id]");
            $(clone).find("td:first").next().next().next().next().find("input[name$='[samples_given]']").attr("name", "data[ReportEntryDoctors][" + ii + "][samples_given]");
            $(clone).find("td:first").next().next().next().next().next().find("textarea[name$='[gift]']").attr("name", "data[ReportEntryDoctors][" + ii + "][gift]");
            $(clone).find("td:first").next().next().next().next().next().next().find("textarea[name$='[comment]']").attr("name", "data[ReportEntryDoctors][" + ii + "][comment]");

            $(clone).insertAfter('#reportdetailtable tr:last');
        });
        $('#addrow1').on('click', function (e) {
            e.preventDefault();
            var srno = 0;
            var clone = $('#reportdetailtable1').find('tr:last').clone();
            $(clone).find("input").each(function () {
                $(this).val('');
            });
          
            var ii = parseInt($('#reportdetailtable1').find('tr:last').find("td:first").text()) + 1;
            ;
            $(clone).find("td:first").text(ii);
            $(clone).find("td:first").next().find("select[name$='[patch_id]']").attr("name", "data[ReportEntryChemists][" + ii + "][patch_id]");
            $(clone).find("td:first").next().next().find("select[name$='[chemist_id]']").attr("name", "data[ReportEntryChemists][" + ii + "][chemist_id]");
            $(clone).find("td:first").next().next().next().find("select[name$='[product_id]']").attr("name", "data[ReportEntryChemists][" + ii + "][product_id]");
            $(clone).find("td:first").next().next().next().next().find("input[name$='[samples_given]']").attr("name", "data[ReportEntryChemists][" + ii + "][samples_given]");
            $(clone).find("td:first").next().next().next().next().next().find("textarea[name$='[gift]']").attr("name", "data[ReportEntryChemists][" + ii + "][gift]");
            $(clone).find("td:first").next().next().next().next().next().next().find("textarea[name$='[comment]']").attr("name", "data[ReportEntryChemists][" + ii + "][comment]");
            $(clone).insertAfter('#reportdetailtable1 tr:last');
        });
        $('table').on('click', '.deleterow1', function (e) {

            e.preventDefault();
            if ($("#reportdetailtable1 select[name$='[patch_id]']").length > 1) {
                $(this).parent().parent().remove();
            }


        });
        $('table').on('click', '.deleterow', function (e) {

            e.preventDefault();
            if ($("#reportdetailtable select[name$='[patch_id]']").length > 1) {
                $(this).parent().parent().remove();
            }


        });

        $("table").on('change', "#reportdetailtable select[name$='[patch_id]']", function () {
            var ele = $(this);
            $.ajax({
                url: '<?= Cake\Routing\Router::url("/", true) ?>ReportMasters/getPatchWiseList/' + $(this).val() + "/1",
                type: 'GET',
                dataType: 'JSON',
                error: function () {
                    $('#info').html('<p>An error has occurred</p>');
                },
                success: function (data) {
                    console.log(data);

                    var doctorslist = "<option value=''>Select</option>";
                    $.each(data, function (index, item) {
                        doctorslist += "<option value='" + index + "' >" + item + "</option>";
                    }
                    );

                    $(ele).parent().parent().next("td").find("select[name$='[doctor_id]']").html(doctorslist)

                }
            });
        });
        $("table").on('change', "#reportdetailtable1 select[name$='[patch_id]']", function () {
            var ele = $(this);
            $.ajax({
                url: '<?= Cake\Routing\Router::url("/", true) ?>ReportMasters/getPatchWiseList/' + $(this).val() + "/2",
                type: 'GET',
                dataType: 'JSON',
                error: function () {
                    $('#info').html('<p>An error has occurred</p>');
                },
                success: function (data) {
                    console.log(data);

                    var doctorslist = "<option value=''>Select</option>";
                    $.each(data, function (index, item) {
                        doctorslist += "<option value='" + index + "' >" + item + "</option>";
                    }
                    );

                    $(ele).parent().parent().next("td").find("select[name$='[chemist_id]']").html(doctorslist);

                }
            });
        });


        $('.deletereportitem').on('click', function (e) {
            e.preventDefault();
            if (confirm("Sure To delete?")) {
                var ele = $(this);
                $.ajax({
                    url: '<?= Cake\Routing\Router::url("/", true) ?>ReportEntryDoctors/delete/',
                    type: 'POST',
                    dataType: 'JSON',
                    data: {'id': $(ele).data('id')},
                    error: function () {
                        $('#info').html('<p>An error has occurred</p>');
                    },
                    success: function (data) {
                        if (data == 1) {
                            $(ele).closest("tr").remove();
                            alert("Record Deleted")
                        }

                    }
                });
            }



        });
    });



</script>