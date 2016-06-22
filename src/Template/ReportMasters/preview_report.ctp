<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Preview Report</h2>
                <?php
                if ($reportEntity->status == 0) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$this->Html->link("Edit", '/ReportMasters/fillReportData/' . base64_encode($reportEntity->id), ['class' => 'btn btn-info']);
                    echo $this->Form->postLink("Send Report", '/ReportMasters/sendReport', ['class' => 'btn btn-danger pull-right', 'data' => ['id' => $reportEntity->id]], ['You will not able to Delete/Change details in report ?']);
                }
                ?>
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
                            <h2 class="pull-left">Doctor Visited Report Details</h2>                          

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

                                    </tr>
                                </thead>
                                <tbody id="reportdetailtable">
                                    <?php
                                    $srno = 1;
                                    foreach ($reportEntity->report_entry_doctors as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $srno ?></td>
                                            <td><?= $value['patch']['name'] ?></td>
                                            <td><?= $value['doctor']['name'] ?></td>
                                            <td><?= $value['product']['name'] ?></td>
                                            <td><?= $value['samples_given'] ?></td>
                                            <td><?= $value['gift'] ?></td>
                                            <td><?= $value['comment'] ?></td>

                                        </tr>

                                        <?php
                                        $srno++;
                                    }
                                    ?>


                                </tbody>
                            </table>




                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="panel panel-info">
                        <div class="panel-heading" style="height: auto;overflow: hidden">
                            <h2 class="pull-left">Chemist Visited Report Details</h2>                            

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

                                    </tr>
                                </thead>
                                <tbody id="reportdetailtable1">
                                    <?php
                                    $srno = 1;
                                    foreach ($reportEntity->report_entry_chemists as $value) {
                                        ?>
                                        <tr>
                                            <td><?= $srno ?></td>
                                              <td><?= $value['patch']['name'] ?></td>
                                            <td><?= $value['chemist']['name'] ?></td>
                                            <td><?= $value['product']['name'] ?></td>
                                            <td><?= $value['samples_given'] ?></td>
                                            <td><?= $value['gift'] ?></td>
                                            <td><?= $value['comment'] ?></td>

                                        </tr>

                                        <?php
                                        $srno++;
                                    }
                                    ?>


                                </tbody>
                            </table>






                        </div>
                    </div>
                </div>
            </div></div>



    </div></div>
