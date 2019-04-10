<?php 

session_start();


    
    if (!isset($_SESSION['sid'])){
            
            header('Location:../login_unsuccessful.php');
            
        }


include("connector.php");

$user = $_SESSION['sid'];
$fac = $_SESSION['fac'];
$qu = $_POST['qu'];
$point = $_POST['point'];


if($point==1){
    if($fac==1){        
        $emp="0004";        
    }
    elseif($fac==2){
        $emp="0005";
    }
    elseif($fac==3){
        $emp="0006";
    }
}
elseif($point==2){
    $emp="0003";
}
elseif($point==3){
    $emp="0002";
}
elseif($point==4){
    $emp="0001";
}

$trdate=date("Y/m/d");

$sql = "INSERT INTO complains SET status='0', categoryi='other', categoryii='other', quer='$qu', studentid='$user', employeeid='$emp', answer='Not answered yet!', date='$trdate'";

            if($conn->query($sql) === TRUE){

                $last_id = mysqli_insert_id($conn);

                header('Location:../dashboard/other.php?msg=1&id='.$last_id.'');

            }
            else{

                header('Location:../dashboard/other.php?msg=2');

            }




?>