<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    
        session_start();
    
    if (!isset($_SESSION['sid'])){
            
            header('Location:index.php');
            
        }
    ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>NSBM - Complaint Management System</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Complaint Category<a href="logout.php" style="float:right;">
            <i class="fa fa-fw fa-sign-out"></i>Exit</a></div>
      <div class="card-body">
        <form action="catchecker.php" method="post">
            
          
          <div class="form-group">
            <input type="radio" name="det" value="1" checked="checked"> Academic<br>
            <input type="radio" name="det" value="2"> Administrative & Services<br>
            <input type="radio" name="det" value="3"> Other
          </div>
          
          <input type="submit" class="btn btn-primary btn-block" value="Proceed">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" target="blank" href="http://smartvalley.lk">NSBM Green University</a>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
