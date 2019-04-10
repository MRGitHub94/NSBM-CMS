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
          <i class="fa fa-table"></i> Complaint Information</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Complaint ID</th>
                  <th>Date of Submission</th>
                  <th>Status</th>
                </tr>
              </thead>
              
              <tbody>
                  <?php
                  include("connector.php");
                  
                  $id=$_SESSION['adid'];
                  
                  $sqlcount = "SELECT * FROM complains";
                  $resultcount = mysqli_query($conn,$sqlcount);
                  $rowcount = mysqli_num_rows($resultcount);
                  
                  $x=$rowcount;
                  
                  while($x>=1){
                      
                      $sqltbv = "SELECT * FROM complains WHERE complainid='$x' AND status='0' AND employeeid='$id'";
                      $resulttbv = mysqli_query($conn,$sqltbv);
                      
                      if($rowtbv = mysqli_fetch_assoc($resulttbv)){
                          
                          $date = $rowtbv['date'];
                          
                          echo'<tr>
                                  <td><a href="viewcomplain.php?point='.$x.'"><strong>'.$x.'</strong></a></td>
                                  <td>'.$date.'</td>
                                  <td><span style="color:brown;"><strong>Pending</strong></span></td>
                                </tr>';
                          
                      }
                      
                      
                      $x--;
                  }
                  
                  $x=$rowcount;
                  
                  while($x>=1){
                      
                      $sqltbv = "SELECT * FROM complains WHERE complainid='$x' AND status='1' AND employeeid='$id'";
                      $resulttbv = mysqli_query($conn,$sqltbv);
                      
                      if($rowtbv = mysqli_fetch_assoc($resulttbv)){
                          
                          $date = $rowtbv['date'];
                          
                          echo'<tr>
                                  <td><a href="viewcomplain.php?point='.$x.'"><strong>'.$x.'</strong></a></td>
                                  <td>'.$date.'</td>
                                  <td><span style="color:green;"><strong>In Progress</strong></span></td>
                                </tr>';
                          
                      }
                      
                      
                      $x--;
                  }
                  
                  
                  
                  ?>
                  
                
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated <?php echo date("Y/m/d"); echo' '; echo date("h:i:sa"); ?>
    </div>
      </div>
            <?php 
            
            if ($_SESSION['adid']=="0001"){
                
                echo '<a class="btn btn-primary btn-block" href="admin.php">Full Overview</a>';
                
            }
            
            ?>
          
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
        <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
