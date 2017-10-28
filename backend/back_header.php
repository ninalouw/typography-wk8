<?php error_reporting(0); ?>
<?php
	// Start the session
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- <title>Box Spring Studios</title> -->
    <title>VANARTS STUDENT MOCK PROJECT SITE</title>
    <link rel="icon" type="image/x-icon" href="../favicon.ico" />
    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span><a class="navbar-brand" href="../index.php"><img class="logo" src="../img/logo.png" alt="logo"></a></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio_form.php">Add New Font</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logIn.php">Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logOut.php">Log Out</a>
            </li>
            <li class="nav-item text-muted text-capitalize">
                <a class='nav-link disabled'>Welcome, <?php echo $_SESSION['username'] ?></a>
            </li>
          </ul>
        </div>
      </nav>
      <hr>