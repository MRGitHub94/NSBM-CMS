<!DOCTYPE html>
<html lang="en">

<head>
     <?php
        session_start();
    if (!isset($_SESSION['adid'])){
            
            header('Location:index.php');
            
        }
        include("connector.php");
    
        $x = $_GET['point'];
        
        $sqltbv = "SELECT * FROM complains WHERE complainid='$x'";
        $resulttbv = mysqli_query($conn,$sqltbv);
                      
        if($rowtbv = mysqli_fetch_assoc($resulttbv)){
                          
            $_SESSION['date'] = $rowtbv['date'];
            $_SESSION['complainid'] = $rowtbv['complainid'];
            $_SESSION['status'] = $rowtbv['status'];
            $_SESSION['categoryi'] = $rowtbv['categoryi'];
            $_SESSION['categoryii'] = $rowtbv['categoryii'];
            $_SESSION['quer'] = $rowtbv['quer'];
            $_SESSION['answer'] = $rowtbv['answer'];
            $_SESSION['studentid'] = $rowtbv['studentid'];
            
            
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
    <style>
        textarea {
          height: 200px;
        }
    
    </style>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Resolve the Complaint<a href="logout.php" style="float:right;">
            <i class="fa fa-fw fa-sign-out"></i>Exit</a></div>
      <div class="card-body">
        <form method="post" action="updatecomplain.php">
            <?php
                    if(empty($_GET['msg'])){
                        $itm='';
                    }
                    elseif($_GET['msg']==1){
                        $itm='<div class="alert alert-success" role="alert">Complaint succefully updated!</div>';
                    }
                    elseif($_GET['msg']==2){
                        $itm='<div class="alert alert-danger" role="alert"><strong>Error!</strong> Unable to submit your Complaint!</div>';
                    }
                    
                    else{
                        $itm='';
                    }
                    echo $itm;
                ?>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="cid">Complain ID : </label>
                <input class="form-control" name="cid" id="cid" type="text" value="<?php echo $_SESSION['complainid']; ?>" readonly>
              </div>
              <div class="col-md-6">
                <label for="date">Date of Submission : </label>
                <input class="form-control" id="date" type="text" value="<?php echo $_SESSION['date']; ?>" readonly>
              </div>
            </div>
          </div>
          <div class="form-group">
            
                <label for="des">Description : </label>
              <textarea class="form-control" id="des" type="text"  readonly><?php echo $_SESSION['quer']; ?></textarea>
              
          </div>
            <div class="form-group">
            
                <label for="desv">Student Information : </label>
              
        
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Student ID</th>
                          <th>Name</th>
                          <th>Batch</th>
                          <th>Contact</th>
                        </tr>
                      </thead>

                      <tbody>
                          <?php
                                
                                $sid=$_SESSION['studentid'];
                          
                                $sql = "SELECT * FROM student WHERE sid='$sid'";
                                $result = mysqli_query($conn,$sql);

                                if($row = mysqli_fetch_assoc($result)){
                                   $sname = $row['name'];
                                    $contact = $row['phone'];
                                    $batch = $row['batch'];
                                    
                                    echo '<td>'.$sid.'</td>
                                          <td>'.$sname.'</td>
                                          <td>'.$batch.'</td>
                                          <td>'.$contact.'</td>';
                                }  

                          ?>
                          



                      </tbody>
                    </table>
                  </div>
                </div>
                
              
              
          </div>
            <div class="form-group">
            
                <label for="desi">Inform message to the Student : </label>
              <textarea class="form-control" name="answ" id="desi" type="text" required><?php echo $_SESSION['answer']; ?></textarea>
              
          </div>
            <div class="form-group">
                <label for="desi">Status : </label>
            <input type="radio" name="sta" value="2" required> Resolved
            <input type="radio" name="sta" value="1"> In Progress
            <input type="radio" name="sta" value="3"> Not Relevent
          </div>
            
            <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <input type="submit" class="btn btn-primary btn-block" value="Update">
              </div>
              <div class="col-md-6">
                 <a class="btn btn-primary btn-block" href="employee.php">Back</a>
              </div>
            </div>
          </div>
            
            
          
         
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
