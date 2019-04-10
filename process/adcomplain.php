<?php 

session_start();


    
    if (!isset($_SESSION['sid'])){
            
            header('Location:../login_unsuccessful.php');
            
        }


include("connector.php");

$user = $_SESSION['sid'];
$qu = $_POST['qu'];
$point = $_POST['point'];
$catii = $_POST['catii'];


if($point==1){
    $emp="0007";
}
elseif($point==2){
    $emp="0008";
}
elseif($point==3){
    $emp="0009";
}
elseif($point==4){
    $emp="0003";
}
elseif($point==5){
    $emp="0010";
}
elseif($point==6){
    $emp="0011";
}
elseif($point==7){
    $emp="0002";
}
elseif($point==8){
    $emp="0001";
}

$trdate=date("Y/m/d");

$sql = "INSERT INTO complains SET status='0', categoryi='Administrative & Service Related Complaint', categoryii='$catii', quer='$qu', studentid='$user', 	employeeid='$emp', answer='Not answered yet!', date='$trdate'";

            if($conn->query($sql) === TRUE){

                $last_id = mysqli_insert_id($conn);

                header('Location:../dashboard/administrative.php?msg=1&id='.$last_id.'');

            }
            else{

                header('Location:../dashboard/administrative.php?msg=2');

            }




?>