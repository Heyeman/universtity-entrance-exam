<?php
if (!isset($_GET['year']) || $_GET['year'] == '') {
  header("location: ../../../pages/NE_grade_12_NS.php");
} else {
  if (isset($_GET['grade'])) {
    $grade = $_GET['grade'];
  } else {
    $grade = null;
  }
  $year = $_GET['year'];
  $subject = $_GET['subject'];
  require_once 'includes/config.php';

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

    <div id="wrapper">
      <!-- Header Starts -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background: #000000;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <table width="100%" bgcolor="#0000" height="70px" border="2">
          <tr>
            <td>
              <i>
                <a href="../pages/NE_index.php"><img bgcolor="#0000" src="../Newlogo.png" width="300px" height="110px" /></a>
                <label bgcolor="#0000" style="color:white; position:relative; left:0px; bottom:0px; font-size:30px;">Ethiopian General Secondary & University Entrance Examinations </td>
          </tr>
        </table>
        <!-- Header Ends Here -->
        <!-- side menu starts here-->
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
      <!-- Navigation ends Here here-->
      <!-- side menu starts here-->
      <div id="page-wrapper">
        <div class="row">
          <?php


          $paragraph = 'NATIONAL EDUCATIONAL ASSESMENT AND EXAMINATIONS AGENCY (NEAEA) <br> ETHIOPIAN UNIVERSITY ENTRANCE EXAMINATION (EUEE)';
          ?>
          <div class="col-lg-12">
            <div class="col-lg-12">
              <h4 class="page-header" style="text-align: center;"><?php echo $paragraph; ?><br> <?php echo strtoupper($subject) . " EXAMINTION " . $year; ?>
              </h4>
              <div class="col-lg-6 text-center">
                <i style="text-align: center;">BOOKLET CODE: 00</i>
                <br>
                <i style="text-align: center;">NUMBER OF ITEMS:</i>
              </div>
              <div class="col-lg-6">
                <i style="text-align: center;"> SUBJECT CODE: 00</i>
                <br>
                <i style="text-align: center;">TIME ALLOWED: 00</i>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <!-- Exam form starts Here -->
        <?php if (!isset($_GET['grade'])) { ?>
          <form id="regForm" method="POST" action="submit.php?subject=<?php echo $subject; ?>&year=<?php echo $year; ?>"><?php } else { ?>
            <form id="regForm" method="POST" action="submit.php?subject=<?php echo $subject; ?>&year=<?php echo $year; ?>&grade=<?php echo $grade;?>">

            <?php  } ?>
            <!-- One "tab" for each step in the form: -->
            <!-- first TAB (10 questions) starts here -->
            <h2><a href="javascript: document.body.scrollIntoView(false);">
                <p style="color:green;" id="result"></p>
              </a></h2>
            <div class='panel panel-default'>
              <div class="panel-heading">

                <p> </p>
                <p></p>
              </div>
              <div class='form-group'>
                <div class="panel-body">
                  <?php

                 
                  //		mysqli_query("SET character_set_results=utf8", $mysqli_id)or die(mysqli_error());
                  mb_language('uni');
                  mb_internal_encoding('UTF-8');
                  //  mysqli_query("set names 'utf8'",$mysqli_id)or die(mysqli_error());
                  $li = 10;
                  //	mysqli_set_charset("utf8");
                  //		mysqli_query("SET character_set_results=utf8", $mysqli_id);
                  //	$r=mysqli_select_db('euee', $mysqli_id);


                  if (!isset($_GET['grade'])) {
                    $return = mysqli_query($mysqli_id, "SELECT * from euee where Subject='$subject' AND Year='$year' and stream!='Social'");
                  } else {
                    $return = mysqli_query($mysqli_id, "SELECT * from euee where Subject='$subject' AND Year='$year' and GradeHS='$grade' and stream!='Social'");
                  }

                  $rn = 0;
                  $inc = 1;
                  $tab = 10;
                  $count = mysqli_num_rows($return);
                  while ($fet = mysqli_fetch_assoc($return)) {
                    $q = $fet['Question'];
                    $path = $fet['Question_image'];
                    $ca = mb_convert_encoding($fet['A'], "UTF-8");
                    $cb = $fet['B'];
                    $cc = $fet['C'];
                    $cd = $fet['D'];
                    $rn++;
                    $sel = 1;
                    $ansche = 1;
                    $td = 10;
                    $answered_corectly = 0;
                    $answered_incorectly = 0;

                    echo "
							<label>" . $q . " </label>
                      <div class='radio'>";
                    if ($path != null) {
                      echo "
                           <img style='width:170px;height:100px;' src='" . $path . "' /><br>";
                    }

                    echo "<label>
                          <input type='radio' id=" . "q" . $rn . " name=" . "q" . $rn . " value='A'  > " . $ca . "
                        </label>
                      </div>
                      <div class='radio'>
                        <label>
                          <input type='radio' value='B' name=" . "q" . $rn . "  name=" . "q" . $rn . ">
                          " . $cb . "
                        </label>
                      </div>
                      <div class='radio'>
                        <label>
                          <input type='radio' value='C' name=" . "q" . $rn . " id=" . "q" . $rn . ">
                          " . $cc . "
                        </label>
                      </div>
                      <div class='radio'>
                        <label>
                          <input type='radio' value='D' name=" . "q" . $rn . "  id=" . "q" . $rn . ">
                          " . $cd . "
                        </label>
                        ";

                    echo "
                      </div>
                 
                    
                    ";
                  }
                  echo "</div><br><br>";



                  ?>
                </div>
              </div>

              <button name="submit" value="submit" <?php echo isset($_POST['submit']) ? 'disabled="true"' : ''; ?> type="submit">Submit</button>


            </div>
      </div>


      </form>
      <!-- slider script query-->
      <!--slider script query ends here -->
      <div class="panel-footer" style="background:#7FBD00;color: white;">

        <h6 align="center"> &copy; 2019 Camara Education Ethiopia. Ethiopian General Secondary Education Certificate and University Entrance Examinations</h6>
        <h6 align="center"> Source: Ethiopian National Examinations Agency </h6></span>
        <h6>
        </h6>
        </span>
        <div class="clearfix"></div>
      </div>
      <!-- jQuery -->
      <script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- Metis Menu Plugin JavaScript -->
      <script src="../../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
      <!-- Flot Charts JavaScript -->
      <script src="../../../bower_components/flot/excanvas.min.js"></script>
      <script src="../../../bower_components/flot/jquery.flot.js"></script>
      <script src="../../../bower_components/flot/jquery.flot.pie.js"></script>
      <script src="../../../bower_components/flot/jquery.flot.resize.js"></script>
      <script src="../../../bower_components/flot/jquery.flot.time.js"></script>
      <script src="../../../bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
      <script src="../../../js/flot-data.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="../../../dist/js/sb-admin-2.js"></script>
  </body>

  </html>

<?php
} ?>
