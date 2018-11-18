<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Thank You</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">
      @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                  background: #1C2331!important;
              }
          }
    </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="">
        <strong>DOOR</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.html">Home
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="form.html" >Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.html" >Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="project.php" >Projects</a>
          </li>
        </ul>

        <!-- Right -->
        <form class="form-inline mr-auto" method="POST" action="search.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
          <button class="btn blue-gradient btn-rounded btn-sm my-0" type="submit" name="submit">Search</button>
        </form>
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://github.com/hibaghel" class="nav-link" target="_blank">
              <i class="fa fa-github" aria-hidden="true"></i>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

<?php
$dbhost = "localhost";
$port='8080';
$server=$dbhost . ':' . $port;
$dbuser = 'root';
$dbpass = '';
$link=count($t_tmp = explode(':',$server)) > 1 ? mysqli_connect($t_tmp[0], $dbuser, $dbpass,'',$t_tmp[1]) : mysqli_connect($server,$dbuser,$dbpass);
 if(!$link)
 {
   die('Error: Could not connect: ' . mysqli_error($link));

 }

$dbname = 'door';
//Select Database
mysqli_select_db($link,$dbname);
$name = $email = $topic = $description ="";
if(isset($_POST['submit']))
{

 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $topic = $_REQUEST['topic'];
 $description = $_REQUEST['description'];
}

$sql = "INSERT INTO Ideas (Name,Email,Topic,Description)
VALUES ('$name','$email','$topic','$description')";

if ($link->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

 mysqli_close($link);
 ?>



  <!--Main layout-->
  <main>
    <!--Main layout-->
    <br>
        <div class="container">
            <!--First row-->
            <div class="row wow fadeIn" data-wow-delay="0.2s">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h2 class="h2-responsive">Thank You</h2>
                        <br>
                        <p>We appreciate your idea. Visit our projects and explore.</p>
                    </div>
                </div>
            </div>
            <!--/.First row-->
        </div>


  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn fixed-bottom">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="aboutus.html" target="_blank" role="button">About US
        <i class="fa fa-hand-spock-o" aria-hidden="true"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="" target="_blank">
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-twitter mr-3"></i>
      </a>

      <a href="h" target="_blank">
        <i class="fa fa-youtube mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-google-plus mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-dribbble mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-pinterest mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-github mr-3"></i>
      </a>

      <a href="" target="_blank">
        <i class="fa fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="" target="_blank"> Te3nsome </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
