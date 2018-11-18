<html>
<head>
	
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Projects@DOOR</title>
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
<body style="background:url(https://uaitsmart.com/wp-content/uploads/2018/05/Background-Light.jpg)">
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
            <a class="nav-link" href="home.html">Home
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="form.html" >Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.html" >Help</a>
          </li>
          <li class="nav-item active">
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
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

<div style="background: blue"></div>
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
	$search ="";

	$sql = "select * from computer_science where (project_name like '%".$search."%') or (members like '%".$search."%') or (detail like '%".$search."%') or (completion_detail like '%".$search."%') or (link_to_project like '%".$search."%')";
	$sql1 = "select * from Machine_Learning where (project_name like '%".$search."%') or (members like '%".$search."%') or (detail like '%".$search."%') or (completion_detail like '%".$search."%') or (link_to_project like '%".$search."%')";
	$sql2 = "select * from Energy_Resources where (project_name like '%".$search."%') or (members like '%".$search."%') or (detail like '%".$search."%') or (completion_detail like '%".$search."%') or (link_to_project like '%".$search."%')";
	$sql3 = "select * from Electronics where (project_name like '%".$search."%') or (members like '%".$search."%') or (detail like '%".$search."%') or (completion_detail like '%".$search."%') or (link_to_project like '%".$search."%')";
	$sql4 = "select * from Ideas where (Topic like '%".$search."%') or (Name like '%".$search."%') or (Email like '%".$search."%') or (Description like '%".$search."%')";
    $result = $link->query($sql);
    $result1 = $link->query($sql1);
    $result2 = $link->query($sql2);
    $result3 = $link->query($sql3);
    $result4 = $link->query($sql4);
    $v = 1;
    if ( $result->num_rows>0) {
    	
            while($row = $result->fetch_assoc()){
            	$p =1;
            echo "<p ><h2 style='color:black'>Project".$v."</h2>";
            echo "<h4 style='color:blue'>Field : Computer Science</h4>";
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Project Name:  '.$row['project_name']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Description About the project:  '.$row['detail']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Working Members:  '.$row['members']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Completion Details:  '.$row['completion_detail']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Link To Project files:  '.$row['link_to_project']."</h4>"; 
            $v +=1; 
        }
	
    } 
     if ( $result1->num_rows>0) {
            
            while($row = $result1->fetch_assoc()){
            	$p =1;
            	 echo "<p ><h2 style='color:black'>Project".$v."</h2>";
            	 echo "<h4 style='color:blue'>Field : Machine_Learning</h4>";
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Project Name:  '.$row['project_name']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Description About the project:  '.$row['detail']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Working Members:  '.$row['members']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Completion Details:  '.$row['completion_detail']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Link To Project files:  '.$row['link_to_project']."</h4>"; 
            $v +=1;   
        }
	
    } 
     if ( $result2->num_rows>0) {
    	
            while($row = $result2->fetch_assoc()){
            	$p =1;
            	 echo "<p ><h2 style='color:black'>Project".$v."</h2>";
            	 echo "<h4 style='color:blue'>Field : Energy_Resources</h4>";
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Project Name:  '.$row['project_name']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Description About the project:  '.$row['detail']."</h4>";$p +=1;
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Working Members:  '.$row['members']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Completion Details:  '.$row['completion_detail']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Link To Project files:  '.$row['link_to_project']."</h4>";  
            $v +=1;  
        }
	
    } 
     if ( $result3->num_rows>0) {
    	
            while($row = $result3->fetch_assoc()){
            	$p =1;
            	 echo "<p ><h2 style='color:black'>Project".$v."</h2>";
            	  echo "<h4 style='color:blue'>Field : Electronics</h4>";
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Project Name:  '.$row['project_name']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Description About the project:  '.$row['detail']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Working Members:  '.$row['members']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Completion Details:  '.$row['completion_detail']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Link To Project files:  '.$row['link_to_project']."</h4>"; 
            $v +=1;   
        }
	
    } 
     if ( $result4->num_rows>0) {
    	
            while($row = $result4->fetch_assoc()){
            	$p =1;
            	 echo "<p ><h2 style='color:black'>Project Idea".$v."</h2>";
            	  echo "<h4 style='color:blue'>Researcher Ideas</h4>";
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Topic:  '.$row['Topic']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Description about the idea:  '.$row['Description']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Researcher Name:  '.$row['Name']."</h4>";$p +=1; 
            echo "<p ><h4 style='color:mediumorchid'>".$p.' Email:  '.$row['Email']."</h4>";
            $v +=1;    
        }
	
    } 
	if($v==1) 
	{
	    echo "No Results";
	    echo "Error: " . $sql . "<br>" . $link->error;
	}

	
	?>

<!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn ">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-mediumorchid" href="aboutus.html" target="_blank" role="button">About US
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