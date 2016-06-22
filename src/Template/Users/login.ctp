


<?php //$this->Form->templates(Cake\Core\Configure::read("Templates.longForm")) ?>
<?= $this->Form->create(false) ?>
<h1>Sign In</h1>
<?php
echo $this->Form->input('username',['placeholder'=>'UserName','label'=>false,'class'=>'form-control']);
echo $this->Form->input('password',['placeholder'=>'Password','label'=>false,'class'=>'form-control']);

?>
<div>
    <?= $this->Form->button(__('Log in'),['type'=>'submit','class'=>'btn btn-default submit']) ?>
    <?= $this->Html->link(__('Lost your password?'),'#',['class'=>'reset_pass']) ?>
   
</div>

<div class="clearfix"></div>

<div class="separator">
    <p class="change_link">New to site?
        <a href="#signup" class="to_register"> Create Account </a>
    </p>

    <div class="clearfix"></div>
    <br />

    <div>
        <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
        <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
    </div>
</div>
<?= $this->Form->end() ?>




