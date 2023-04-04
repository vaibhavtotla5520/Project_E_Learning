<?php
$user_name = "";
session_start();
$user_name = !empty($_SESSION["user_name"]) ? $_SESSION["user_name"] : "";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <![endif]-->
    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body>
    <div class="navbar navbar-inverse set-radius-zero">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar" href="../index.html"> Back to Home </a>
        </div>

        <div class="right-div">
          <a href="#" class="btn btn-danger pull-right">Sign Out</a>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="container">
        <div class="row pad-botm">
          <div class="col-md-12">
            <h5 class="header-line">Hi, <?php echo $user_name; ?></h5>
          </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="panel panel-default">
            <div class="panel-heading">Courses you have purchased</div>
            <div class="panel-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Course Name</th>
                      <th>Purchase Date</th>
                      <th>Class Timing</th>
                      <th>Live Class URL</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>C Programming</td>
                      <td>12-12-2022</td>
                      <td>M-T-W-T-F-8:00 PM</td>
                      <td><a href="https://developers.google.com/meet">Join Meeting</a></td>
                      <td>Active</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            &copy; 2014 Yourdomain.com |<a
              href="http://www.binarytheme.com/"
              target="_blank"
            >
              Designed by : binarytheme.com</a
            >
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  </body>
</html>
