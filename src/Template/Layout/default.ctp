<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> <?= $this->fetch("title") ?> </title>
        <?= $this->Html->css(['/vendors/bootstrap/dist/css/bootstrap.min', '/vendors/font-awesome/css/font-awesome.min', 'https://colorlib.com/polygon/gentelella/css/animate.min.css', '/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min', '/vendors//iCheck/skins/flat/green.css', '/vendors/datatables.net-bs/css/dataTables.bootstrap.min', '/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min', '/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min', '/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min', '/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min', 'custom.min.css']) ?>
        <?= $this->Html->script(['/vendors/jquery/dist/jquery.min.js', '/vendors/bootstrap/dist/js/bootstrap.min.js', '/vendors/fastclick/lib/fastclick.js', '/vendors/validator/validator.js', '/vendors/nprogress/nprogress.js', '/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js', '/vendors/datatables.net/js/jquery.dataTables.min','jquery.validate.min.js', 'custom.min.js']) ?>
        <?= $this->Html->script("/vendors/datatables.net-bs/js/dataTables.bootstrap.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-buttons/js/dataTables.buttons.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-buttons/js/buttons.flash.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-buttons/js/buttons.html5.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-buttons/js/buttons.print.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-keytable/js/dataTables.keyTable.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-responsive/js/dataTables.responsive.min") ?>
        <?= $this->Html->script("/vendors/datatables.net-responsive-bs/js/responsive.bootstrap") ?>
        <?= $this->Html->script("/vendors/datatables.net-scroller/js/datatables.scroller.min") ?>
        <?= $this->Html->script("moment/moment.min") ?>
        <?= $this->Html->script("datepicker/daterangepicker") ?>
        <?= $this->Html->script("/vendors/jszip/dist/jszip.min") ?>
        <?= $this->Html->script("/vendors/pdfmake/build/pdfmake.min") ?>
        <?= $this->Html->script("/vendors/pdfmake/build/vfs_fonts") ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>

    <body class="nav-md">
        <?php
        echo $this->Flash->render();
        ?>
        <div class="container body">
            <div class="main_container">
                <?= ""// $this->element("sidebar_menu")   ?>

                <!-- top navigation -->
                <?= ""// $this->element("topnavigation")   ?>

                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">


                    <?= $this->fetch('content') ?>

                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        <style>
/*            #fountainTextG{
                width:234px;
                margin:auto;
            }*/

            .fountainTextG{
                color:rgb(0,0,0);
                font-family:Arial;
                font-size:50px;
                text-decoration:none;
                font-weight:normal;
                font-style:normal;
                float:left;
                animation-name:bounce_fountainTextG;
                -o-animation-name:bounce_fountainTextG;
                -ms-animation-name:bounce_fountainTextG;
                -webkit-animation-name:bounce_fountainTextG;
                -moz-animation-name:bounce_fountainTextG;
                animation-duration:2.09s;
                -o-animation-duration:2.09s;
                -ms-animation-duration:2.09s;
                -webkit-animation-duration:2.09s;
                -moz-animation-duration:2.09s;
                animation-iteration-count:infinite;
                -o-animation-iteration-count:infinite;
                -ms-animation-iteration-count:infinite;
                -webkit-animation-iteration-count:infinite;
                -moz-animation-iteration-count:infinite;
                animation-direction:normal;
                -o-animation-direction:normal;
                -ms-animation-direction:normal;
                -webkit-animation-direction:normal;
                -moz-animation-direction:normal;
                transform:scale(.5);
                -o-transform:scale(.5);
                -ms-transform:scale(.5);
                -webkit-transform:scale(.5);
                -moz-transform:scale(.5);
            }#fountainTextG_1{
                animation-delay:0.75s;
                -o-animation-delay:0.75s;
                -ms-animation-delay:0.75s;
                -webkit-animation-delay:0.75s;
                -moz-animation-delay:0.75s;
            }
            #fountainTextG_2{
                animation-delay:0.9s;
                -o-animation-delay:0.9s;
                -ms-animation-delay:0.9s;
                -webkit-animation-delay:0.9s;
                -moz-animation-delay:0.9s;
            }
            #fountainTextG_3{
                animation-delay:1.05s;
                -o-animation-delay:1.05s;
                -ms-animation-delay:1.05s;
                -webkit-animation-delay:1.05s;
                -moz-animation-delay:1.05s;
            }
            #fountainTextG_4{
                animation-delay:1.2s;
                -o-animation-delay:1.2s;
                -ms-animation-delay:1.2s;
                -webkit-animation-delay:1.2s;
                -moz-animation-delay:1.2s;
            }
            #fountainTextG_5{
                animation-delay:1.35s;
                -o-animation-delay:1.35s;
                -ms-animation-delay:1.35s;
                -webkit-animation-delay:1.35s;
                -moz-animation-delay:1.35s;
            }
            #fountainTextG_6{
                animation-delay:1.5s;
                -o-animation-delay:1.5s;
                -ms-animation-delay:1.5s;
                -webkit-animation-delay:1.5s;
                -moz-animation-delay:1.5s;
            }
            #fountainTextG_7{
                animation-delay:1.64s;
                -o-animation-delay:1.64s;
                -ms-animation-delay:1.64s;
                -webkit-animation-delay:1.64s;
                -moz-animation-delay:1.64s;
            }




            @keyframes bounce_fountainTextG{
                0%{
                    transform:scale(1);
                    color:rgb(0,0,0);
                }

                100%{
                    transform:scale(.5);
                    color:rgb(255,255,255);
                }
            }

            @-o-keyframes bounce_fountainTextG{
                0%{
                    -o-transform:scale(1);
                    color:rgb(0,0,0);
                }

                100%{
                    -o-transform:scale(.5);
                    color:rgb(255,255,255);
                }
            }

            @-ms-keyframes bounce_fountainTextG{
                0%{
                    -ms-transform:scale(1);
                    color:rgb(0,0,0);
                }

                100%{
                    -ms-transform:scale(.5);
                    color:rgb(255,255,255);
                }
            }

            @-webkit-keyframes bounce_fountainTextG{
                0%{
                    -webkit-transform:scale(1);
                    color:rgb(0,0,0);
                }

                100%{
                    -webkit-transform:scale(.5);
                    color:rgb(255,255,255);
                }
            }

            @-moz-keyframes bounce_fountainTextG{
                0%{
                    -moz-transform:scale(1);
                    color:rgb(0,0,0);
                }

                100%{
                    -moz-transform:scale(.5);
                    color:rgb(255,255,255);
                }
            }
        </style>
        <div id="loading" style="display: none;z-index: 999;position: absolute;top: 0;right: 0;width: 100%;height: 100%"><div style=" margin-top: 17%;   margin-left: 45%;
    ">
                <div id="fountainTextG"><div id="fountainTextG_1" class="fountainTextG">L</div><div id="fountainTextG_2" class="fountainTextG">o</div><div id="fountainTextG_3" class="fountainTextG">a</div><div id="fountainTextG_4" class="fountainTextG">d</div><div id="fountainTextG_5" class="fountainTextG">i</div><div id="fountainTextG_6" class="fountainTextG">n</div><div id="fountainTextG_7" class="fountainTextG">g</div></div>
            </div></div>


        <script>


            $(function(){

            ajaxStart: function() { $("#loading").css({"display":"block"}) },
                    ajaxStop: function() { $("#loading").css({"display":"none"}) }

            });
        </script>
    </body>
</html>

