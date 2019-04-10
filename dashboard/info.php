<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if (!isset($_SESSION['sid'])){
            
            header('Location:../login_unsuccessful.php');
            
        }
    ?>

<head>
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
            
            <div class="logo">
                <a href="" class="simple-text logo-normal">
                   NSBM Green University Town
                </a>
                
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="info.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>User Info</p>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="academic.php">
                            <i class="now-ui-icons education_hat"></i>
                            <p>Academic Complaints</p>
                        </a>
                    </li>
                    <li>
                        <a href="administrative.php">
                            <i class="now-ui-icons business_bank"></i>
                            <p>Administrative Complaints</p>
                        </a>
                    </li>
                    <li>
                        <a href="other.php">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Other Complaints</p>
                        </a>
                    </li>
                    <li>
                        <a href="student.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Student Complaint against </p> 
                            <i class="now-ui-icons ui-1_email-85" style="visibility:hidden;"></i>
                            <p>another Student</p>
                        </a>
                    </li>
                    <hr>
                    
                    <li class="active-pro">
                        <a href="mycomplaints.php">
                            <i class="now-ui-icons ui-1_email-85"></i>
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
                                    <i class="now-ui-icons ui-1_lock-circle-open " title="Logout"></i>
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
                                <h5 class="title">User Info</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>Student ID</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Student ID" value="<?php echo $_SESSION['sid']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" disabled="" placeholder="name" value="<?php echo $_SESSION['name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Faculty</label>
                                                <input type="text" value="<?php if ($_SESSION['fac']==1){$x="Computing";}elseif($_SESSION['fac']==2){$x="Business";}elseif($_SESSION['fac']==3){$x="Engineering";} echo $x; ?>" class="form-control" placeholder="Faculty" disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" class="form-control" placeholder="Contact Number" value="<?php echo $_SESSION['phone']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="Email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['email']; ?>" disabled="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Batch</label>
                                                <input type="text" class="form-control" placeholder="Batch" value="<?php echo $_SESSION['batch']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="container-fluid"><hr>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, 
                        Powered by
                        <a href="https://www.nsbm.lk" target="_blank">NSBM Green University Town</a>.
                        Designed by 
                        <a href="https://www.smartvalley.lk" target="_blank">Smart Valley Lanka</a>.
                    </div>
                </div>
                                    
                                </form>
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
