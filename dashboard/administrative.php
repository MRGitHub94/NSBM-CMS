<!DOCTYPE html>
<html lang="en">

<head>
	
	  <?php
    
        session_start();
    
    if (!isset($_SESSION['sid'])){
            
            header('Location:../login_unsuccessful.php');
            
        }
    ?>
	
	
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>NSBM - Complaint Management System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/dashboard.css?v=1.0.1" rel="stylesheet" />
    
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="green">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="" class="simple-text logo-normal">
                   NSBM Green University Town
                </a>
                
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="">
                            <i class="now-ui-icons design_app"></i>
                            <p>User Info</p>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="academic.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>Academic Complaints</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>Administrative Complaints</p>
                        </a>
                    </li>
                    <li>
                        <a href="other.php">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>Other Complaints</p>
                        </a>
                    </li>
                    <hr>
                    
                    <li class="active-pro">
                        <a href="">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>My Complaints</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Complaint Management System</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        
                        <ul class="navbar-nav">
                            
                          
                            <li class="nav-item">
                                <a class="nav-link" href="../process/logout.php">
                                    <i class="now-ui-icons ui-1_lock-circle-open" title="Logout"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">logout</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Administrative Complaints</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="../process/adcomplain.php">
														
			 <?php
                    if(empty($_GET['msg'])){
                        $itm='';
                    }
                    elseif($_GET['msg']==1){
                        $itm='<div class="alert alert-success" role="alert">Your Complaint succefully submitted!<strong> Complain ID: '.$_GET['id'].'</strong></div>';
                    }
                    elseif($_GET['msg']==2){
                        $itm='<div class="alert alert-danger" role="alert"><strong>Error!</strong> Unable to submit your Complaint!</div>';
                    }
                    
                    else{
                        $itm='';
                    }
                    echo $itm;
                ?>					
									
									
                                     <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category</label>
                      <select class="form-control" id="exampleInputcat" name="catii" required>
                      <option value=""></option>
                      <option value="Examinations">Examinations</option>
                      <option value="Library">Library</option>
                      <option value="Sports Clubs & Societies">Sports Clubs & Societies</option>
                      <option value="Canteen">Canteen</option>
                      <option value="Transport">Transport</option>
                      <option value="Janitorial">Janitorial</option>
                      <option value="Security">Security</option>
                      <option value="Hostal">Hostal</option>
                      
                  </select>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Query</label>
          <textarea rows="4" cols="80" name="qu" class="form-control" placeholder="Max 1000 Letters" value=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="checkbox">I Accept Conditions of the NSBM Company Policy
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>This is the content for Layout P Tag</p>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reporting to</label>
                      <select class="form-control" id="examplelec" name="point" required>
                      <option value=""></option>
                      <option value="1">Exam Registar</option>
                      <option value="2">Librarian</option>
                      <option value="3">Head - Student Affairs</option>
                      <option value="4">Admin Manager</option>
                      <option value="5">Transport Manager</option>
                      <option value="6">Marshal</option>
                      <option value="7">D.V.C</option>
                      <option value="8">V.C.</option>
                  </select>
                                            </div>
                                        </div>
                                    </div>
           <input type="submit" class="btn btn-primary btn-block" value="Submit">
        </form>
                                    
                                    
					<!--footer-->				
               <?php require_once 'common/footer.php'; ?> 
                      <!--footer end-->  			
								
								
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="../assets/img//bg5.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="../assets/img//nsbm.png" alt="...">
                                        <h5 class="title">[Name]</h5>
                                    </a>
                                    <p class="description">
                                        Username
                                    </p>
                                </div>
                               
                            </div>
                            <hr>
                            <div class="button-container">
                                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                    <i class="fab fa-twitter"></i>
                                </button>
                                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                                    <i class="fab fa-google-plus-g"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

</html>
