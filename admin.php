<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start();
    
    
    if (!isset($_SESSION['adid'])){
            
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
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Employee Account<a href="logout.php" style="float:right;">
            <i class="fa fa-fw fa-sign-out"></i>Exit</a></div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label ><strong>Employee ID :</strong> <?php echo $_SESSION['adid']; ?></label>
                  <lable id="exampleid"></lable>
              </div>
              <div class="col-md-6">
                <label ><strong>Employee :</strong> <?php echo $_SESSION['adname']; ?> </label>
                
              </div>
            </div>
          </div>
          <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Complaint History</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Pending</th>
                  <th>In Progress</th>
                  <th>Resolved</th>
                  <th>Not Relevant</th>
                </tr>
              </thead>
              
              <tbody>
                  <?php
                  include("connector.php");
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='Academic Complaint' AND status='0'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $x=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='Academic Complaint' AND status='1'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $y=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='Academic Complaint' AND status='2'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $z=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='Academic Complaint' AND status='3'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $p=$rowcount;
                  
                  
                  echo'
                  <tr>
                        <td>Academic Complaint</td>
                        <td>'.$x.'</td>
                        <td>'.$y.'</td>
                        <td>'.$z.'</td>
                        <td>'.$p.'</td></tr>';
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='Administrative & Service Relat' AND status='0'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $x=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='Administrative & Service Relat' AND status='1'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $y=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='Administrative & Service Relat' AND status='2'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $z=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='Administrative & Service Relat' AND status='3'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $p=$rowcount;
                  
                  
                  echo'
                  <tr>
                        <td>Administrative & Service Related</td>
                        <td>'.$x.'</td>
                        <td>'.$y.'</td>
                        <td>'.$z.'</td>
                        <td>'.$p.'</td></tr>';
                  
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='other' AND status='0'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $x=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='other' AND status='1'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $y=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='other' AND status='2'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $z=$rowcount;
                  
                  $sqlcount = "SELECT * FROM complains WHERE categoryi='other' AND status='3'";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);                  
                  $p=$rowcount;
                  
                  
                  echo'
                  <tr>
                        <td>Other</td>
                        <td>'.$x.'</td>
                        <td>'.$y.'</td>
                        <td>'.$z.'</td>
                        <td>'.$p.'</td></tr>';
                  
                 
                      
                      
                      
                  
                  
                  
                  
                  
                  
                  ?>
                  
                
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated <?php echo date("Y/m/d"); echo' '; echo date("h:i:sa"); ?>
    </div>
      </div>
            <a class="btn btn-primary btn-block" href="employee.php">Back</a>';
                
            
          
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
