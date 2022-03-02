<?php
if (!isset($_GET['subject']) || $_GET['subject'] == '') {
    header("location: ../../../pages/NE_grade_12_NS.php");
} else {
    $subject = $_GET['subject'];
    $subject = ucwords($subject);
    if ($subject == 'Mathematics' ||$subject == 'Physics' ||$subject == 'Chemistry' ||$subject == 'Biology') {
        $url = "../../choice.php";
    }
    else {
        $url = "../../exam.php";
    }


    
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="camaraadmin">

        <title>National Examinations</title>

        <!-- Bootstrap Core CSS -->
        <link href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../../../dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../../../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../../../bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>
        <?php


        ?>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #000000;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar">sdsdsdsdsds</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <table width="100%" bgcolor="#0000" height="70px" border="2">
                    <tr>
                        <td>
                            <img bgcolor="#0000" src="../../../Newlogo.png" width="300px" height="110px" />
                            <label bgcolor="#0000" style="color:white; position:relative; left:0px; bottom:0px; font-size:30px;">Ethiopian General Secondary & University Entrance Examinations
                        </td>
                    </tr>
                </table>
                <div class="navbar-default sidebar" role="navigation" style="margin-bottom:50px;">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="../../../pages/NE_grade_12_NS.php"><i class="fa fa-edit fa-2x"></i>Grade 12 National Exams</a>
                            </li>



                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Grade 12 <?php echo $subject; ?> National Exams</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo $url;?>?year=2005&subject=<?php echo $subject; ?>">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12 ">
                                            <div>
                                                <h3><?php echo $subject; ?> 2005</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">

                                    <span class="pull-left">Take Exam</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo $url;?>?year=2006&subject=<?php echo $subject; ?>">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div>
                                                <h3><?php echo $subject; ?> 2006</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">Take Exam</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo $url;?>?year=2007&subject=<?php echo $subject; ?>">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div>
                                                <h3><?php echo $subject; ?> 2007</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">Take Exam</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo $url;?>?year=2008&subject=<?php echo $subject; ?>">
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div>
                                                <h3><?php echo $subject; ?> 2008</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">Take Exam</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- /.row -->
                <!--///////////////////////////second row///////////////////////////-->
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo $url;?>?year=2009&subject=<?php echo $subject; ?>">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div>
                                                <h3><?php echo $subject; ?> 2009</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">Take Exam</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo $url;?>?year=2010&subject=<?php echo $subject; ?>">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12 ">
                                            <div>
                                                <h3><?php echo $subject; ?> 2010</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">Take Exam</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>






                </div>
                <!--////////////////////////second row end//////////////////////-->


            </div>

            <!-- /#page-wrapper -->
        </div>

        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../../bower_components/raphael/raphael-min.js"></script>
        <script src="../../bower_components/morrisjs/morris.min.js"></script>
        <script src="../js/morris-data.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../../dist/js/sb-admin-2.js"></script>
        <script src="../../bower_components/flot/excanvas.min.js"></script>
        <script src="../../bower_components/flot/jquery.flot.js"></script>
        <script src="../../bower_components/flot/jquery.flot.pie.js"></script>
        <script src="../../bower_components/flot/jquery.flot.resize.js"></script>
        <script src="../../bower_components/flot/jquery.flot.time.js"></script>
        <script src="../../bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="../js/flot-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../../dist/js/sb-admin-2.js"></script>
    </body>

    </html>

<?php } ?>