<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>New User</h2>

                <div class="clearfix"></div>
            </div>





            <div class="x_content">
                <br />
                    <?php
                    $this->Form->templates(\Cake\Core\Configure::read("Templates.fullForm"));
                    echo $this->Form->create($user);
                    echo $this->Form->input('user_type_id', ['options' => $userTypes]);
                    echo $this->Form->input('username');
                    echo $this->Form->input('password');
                    echo $this->Form->input('name');

                    echo $this->Form->input('status', ['options' => [1 => 'Active', 0 => 'Inactive']]);
                    ?><div class="ln_solid"></div> <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"><?php echo $this->Form->submit(__('Submit'), ['class' => 'btn btn-success']); ?></div><?php
                        echo $this->Form->end()
                        ?>
            </div></div></div></div>
