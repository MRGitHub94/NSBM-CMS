<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    session_start();
    if (isset($_SESSION['sid'])){
            
            header('Location:dashboard/info.php');
            
        }
    elseif (isset($_SESSION['adid'])){
            
            header('Location:dashboard/employee.php');
            
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

<body >
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login <font color="#2F8600"><strong>(You've been logged out successfully)</strong></font></div>
      <div class="card-body">
        <form action="process/logchecker.php" method="post">
            <?php
                    if(empty($_GET['point'])){
                        $itm='';
                    }
                    elseif($_GET['point']==1){
                        $itm='<div class="alert alert-danger" role="alert"><strong>Error!</strong> Something went wrong!</div>';
                    }
                    elseif($_GET['point']==2){
                        $itm='<div class="alert alert-danger" role="alert"><strong>Error!</strong> Invalid Student ID or Password.</div>';
                    }
                    
                    else{
                        $itm='';
                    }
                    echo $itm;
                ?>
          <div class="form-group">
            <label for="exampleInputEmail1">User ID</label>
            <input class="form-control" name="id" type="text" placeholder="BSC-XXX-XXX-00.0-000" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" name="pass" type="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <input type="radio" name="det" value="1" checked="checked"> Student
            <input type="radio" name="det" value="2"> Employee
          </div>
          
          <input type="submit" class="btn btn-primary btn-block" value="Login">
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
