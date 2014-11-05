<html>
<head>
  <!--<link rel="stylesheet" href="style.css" />-->
  <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/activeClass.js"></script>
  <?php 
  $link = mysqli_connect("localhost", "root", "root", "ca-sax"); 
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }

  //get path
  //about.php
  //trim .php off?
  //string split string.split('.');
  //set to a variable
    ?>
  </head>
  <body>
    <div id="top-bar" style="margin: 10px 0 0 20px;">
     <a href="http://ca-sax.dev">www.saxapahawrivermill.com</a>
     <h1>Saxapahaw Rivermill</h1>
   </div>
   <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Home</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="about.php">About</a></li>
          <li><a href="archive.php">News Blog</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
          <li class="menu-social"><a class="fa fa-rss fa-lg"></a></li>
          <li class="menu-social"><a class="fa fa-twitter fa-lg"></a></li>
          <li class="menu-social"><a class="fa fa-facebook fa-lg"></a></li>
          <li class="menu-social"><a class="fa fa-google-plus fa-lg"></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>