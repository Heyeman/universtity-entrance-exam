<?php
if (!isset($_GET['year']) || $_GET['year'] == '') {
    header("location: ../pages/NE_grade_12_NS.php");
} else {
    $year = $_GET['year'];
    $subject = $_GET['subject'];

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>National Examinations</title>
        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <!-- Timeline CSS -->
        <link href="../css/timeline.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <script type="text/css">
            li.correct {
                color: green;
            }

            li.incorrect {
                color: red;
            }

            ​
        </script>
    </head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
        }

        #regForm {
            background-color: #ffffff;
            margin: 10px auto;
            font-family: Times New Roman;
            padding: 10px;
            width: 100%;
            min-width: 500px;
        }

        h1 {
            text-align: center;
        }

        /*input {
          padding: 10px;
          width: 100%;
          font-size: 17px;
          font-family: Raleway;
          border: 1px solid #aaaaaa;
          }*/
        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        #prevBtn {
            background-color: #bbbbbb;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }
    </style>

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
                            <a href="../../startup/New_Startup/index.html"> <img style="border-radius:25px;outline:none;border-color:#9ecaed;box-shadow: 0 0 10px #9ecaed;" bgcolor="#0000" src="../Newlogo.png" width="300px" height="130px" /></a>

                            <label bgcolor="#0000" style="color:white; position:relative; left:0px; bottom:0px; font-size:30px;">Ethiopian General Secondary & University Entrance Examinations
                        </td>
                    </tr>
                </table>
                <div class="navbar-default sidebar" role="navigation" style="margin-bottom:50px;">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="../pages/NE_grade_12_NS.php"><i class="fa fa-edit fa-2x"></i>Grade 12 National Exams</a>
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
                        <h1 class="page-header">Grade 12 <?php echo $subject . " " . $year ?> National Exam</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <a href="exam.php?year=<?php echo $year; ?>&subject=<?php echo $subject; ?>">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12 ">
                                            <div>
                                                <h3>Take Full Exam </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">

                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <a href="exam.php?year=<?php echo $year; ?>&subject=<?php echo $subject; ?>&grade=11">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div>
                                                <h3>Try All Questions From Grade 11 Topics</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="exam.php?year=<?php echo $year; ?>&subject=<?php echo $subject; ?>&grade=12">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div>
                                                <h3>Try All Questions From Grade 12 Topics</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="chooseCh.php?subject=<?php echo $subject; ?>&grade=12">
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div>
                                                <h3>Try Questions Only from Specific Chapters</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>


            </div>

            <!-- /#page-wrapper -->
        </div>
        <div class="panel-footer" style="background:#7FBD00;color: white;">

            <h6 align="center"><b> &copy; 2019 Camara Education Ethiopia. Ethiopian General Secondary Education Certificate and University Entrance Examinations</h6></b>
            <h6 align="center"> <b>Source: Ethiopian National Examinations Agency </b></h6></span>
            <h6>
            </h6>
            </span>
            <div class="clearfix"></div>
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="../bower_components/raphael/raphael-min.js"></script>
        <script src="../bower_components/morrisjs/morris.min.js"></script>
        <script src="/js/morris-data.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
        <script src="../bower_components/flot/excanvas.min.js"></script>
        <script src="../bower_components/flot/jquery.flot.js"></script>
        <script src="../bower_components/flot/jquery.flot.pie.js"></script>
        <script src="../bower_components/flot/jquery.flot.resize.js"></script>
        <script src="../bower_components/flot/jquery.flot.time.js"></script>
        <script src="../bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="/js/flot-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../dist/js/sb-admin-2.js"></script>
    </body>

    </html>

<?php




} ?>