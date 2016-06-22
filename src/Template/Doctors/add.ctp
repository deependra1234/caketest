<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Doctor</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <style>
                    textarea{
                        height: 108px;
                        margin-left: 1%;
                        width: 48%;
                    }
                </style>
                <?php
                $this->Form->templates(Cake\Core\Configure::read("Templates.fullForm"));
$this->Form->unlockField("dob");
$this->Form->unlockField("marriage_date");
                echo $this->Form->create($doctor, ['id' => 'adddoctor']);
           
                echo $this->Form->input('name');
                echo $this->Form->input('patch_id');

                echo $this->Form->input('specialzation', ['cols' => 50]);
                echo $this->Form->input('dob', [ 'type' => 'date', 'templates' => ['dateWidget' => '<div class="col-lg-6 input-group date "><input  type="text"  class="form-control" name="dob"   {{attrs}} name="{{name}}" /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>']]);
                echo $this->Form->input('marriage_date', [ 'type' => 'date', 'templates' => ['dateWidget' => '<div class="col-lg-6 input-group date "><input  type="text"  class="form-control" name="marriage_date"   {{attrs}} name="{{name}}" /><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div>']]);
                echo $this->Form->input('address');
                echo $this->Form->input('state_id');
                echo $this->Form->input('city_id');
                echo $this->Form->input('mail');
                echo $this->Form->input('mobile');
                echo $this->Form->input('status', ['options' => array(1 => "Active", 0 => "Inactive")]);
                ?>

                <div class="col-lg-offset-8 col-md-3"><?= $this->Form->button(__('Add'), ['class' => 'btn btn-success']); ?></div>
                <?php
                     echo $this->Form->hidden("user_id", ['value' => $this->request->session()->read("Auth.User.id")]);
                echo $this->Form->end();
                ?>
            </div></div></div></div>
<script>
    
    $(function () {
        
        
        $('#dob,#marriage-date').daterangepicker({
            singleDatePicker: true, calender_style: "picker_1"
                    
        });
        
        $("#adddoctor").validate({
            rules: {
                name: "required",
                patch_id: "required",
                dob: "required",
                marriage_date: "required",
                state_id: "required",
                city_id: "required",
                mail: "required",
                mobile: "required",
                status: "required"
            }
        });
        
    });</script>
