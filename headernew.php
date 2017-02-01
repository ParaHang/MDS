<!DOCTYPE html>
<html class="no-js">
    <head>
        <title>Medical Diagnosis System</title>
    <meta name="description" content="Learning Management System">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Torilaure">
    <meta charset="UTF-8">
        <!-- Bootstrap -->
       <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/jquery.jgrowl.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css" href="css/mystyles.css">
          <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <?php include('script.php'); ?>
        <?php include('connect.php'); ?>
        <?php include('session.php'); ?>
    </head>
    <body>
<div class="container">
  <!-- Topper w/ logo -->
  <div class="row ">
    <div class="col-md-12">
      <h2 id="main">Medical Diagnosis System</h2>
    </div>
   
  </div> <!-- End Topper -->
  <!-- Navigation -->
  <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs-inline-block nav-logo" href="/"><img src="/images/logo-dark-inset.png" class="img-responsive" alt=""></a>
        </div>
      <?php  $query= mysqli_query($con ,"SELECT * FROM `doc` WHERE `id`=$session_id ");
                  $row = mysqli_fetch_array($query);?>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav js-nav-add-active-class">
            <li><a href="patient_info.php">Home</a></li>

            <li><a href="/contact.html">Contact Us</a></li>
            <li class="visible-xs-block"><a href="/about.html">About Us</a></li>
            <li class="visible-xs-block"><a href="/careers.html">Careers</a></li>
           
        
          </ul>
          <ul class="nav navbar-nav navbar-right hidden-xs">
               <li class="dropdown">
                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-large"></i><?php echo "Welcome"." ".$row['fname']." ".$row['lname'];  ?> <i class="caret"></i></a>
                  <ul class="dropdown-menu">
                    <li id="er"><a href="change_pass.php">Change Password</a></li>
                    <li class="divider"></li>
                    <li id="er">
                      <a  href="logout.php">Logout</a>
                    </li>
                  </ul>
              </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
  </div>
</div>

