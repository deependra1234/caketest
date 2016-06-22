<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> | Login </title>

        <!-- Bootstrap -->
        <?= $this->Html->css(['/vendors/bootstrap/dist/css/bootstrap.min', '/vendors/font-awesome/css/font-awesome.min', 'https://colorlib.com/polygon/gentelella/css/animate.min.css', 'custom']) ?>
<?=$this->Html->script(['/vendors/jquery/dist/jquery.min.js','/vendors/bootstrap/dist/js/bootstrap.min.js','/vendors/validator/validator.js'])?>
    </head>

    <body class="login">
        <div>
            <div style="margin: 2% auto 0;
    max-width: 500px;
    position: relative;"><?php
                 if ($this->request->session()->check("Flash.auth")) {
                     ?>
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign pull-left" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        <?php
                        echo "&nbsp;" . $this->Flash->render("auth", ['element' => 'loginmsg']);
                        ?>
                    </div>


                    <?php
                }
                ?></div>





            <a class="hiddenanchor" id="signin"></a>

            <div class="login_wrapper">

                <div class="animate form login_form">
                    <section class="login_content">
                        <?= $this->fetch('content') ?>
                    </section>
                </div>


            </div>
        </div>
    </body>
</html>