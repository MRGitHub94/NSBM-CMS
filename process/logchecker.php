<?php 

session_start();

include("connector.php");

$sid = $_POST['id'];
$passw = $_POST['pass'];
$vag = $_POST['det'];

if($vag==1){
    
    $sql = "SELECT * FROM student WHERE sid='$sid' AND pass='$passw'";
    $result = mysqli_query($conn,$sql);
    
    if(!$row = mysqli_fetch_assoc($result)){
	   header('Location:../index.php?point=2');//wrong
    }else {
        $_SESSION['name'] = $row['name'];
        $_SESSION['sid'] = $row['sid'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['batch'] = $row['batch'];
        $_SESSION['pass'] = $row['pass'];
        $_SESSION['fac'] = $row['faculty'];
        header('Location:../dashboard/info.php');
        
    }
    
}
elseif($vag==2){
    
    $sql = "SELECT * FROM employee WHERE employeeid='$sid' AND password='$passw'";
    $result = mysqli_query($conn,$sql);
    
    if(!$row = mysqli_fetch_assoc($result)){
	   header('Location:../index.php?point=2');//wrong
    }else {
        $_SESSION['adid'] = $row['employeeid'];
        $_SESSION['adpass'] = $row['password'];
        $_SESSION['adname'] = $row['name'];
        header('Location:../employee.php');
        
    }
    
    
    
    
    
    
}
else{
    header('Location:index.php?point=1');//error
}

?>