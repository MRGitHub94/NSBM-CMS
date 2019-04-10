<?php 

session_start();

    
    if (!isset($_SESSION['sid'])){
            
            header('Location:../login_unsuccessful.php');
            
        }
   

include("connector.php");

$user = $_SESSION['sid'];
$fac = $_SESSION['fac'];
$qu = $_POST['qu'];
$deg = $_POST['deg'];
$point = $_POST['point'];

if($fac==1){
    
    $facl="SOC";
    
    if($deg==1){
        
        if($point==1){            
            $emp="0015";            
        }
        elseif($point==2){
            $emp="0012";
        }
        elseif($point==3){
            $emp="0004";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
    }
    elseif($deg==2){
        
        if($point==1){
            $emp="0016";
        }
        elseif($point==2){
            $emp="0012";
        }
        elseif($point==3){
            $emp="0004";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
    }
    elseif($deg==3){
        
        if($point==1){
            $emp="0017";
        }
        elseif($point==2){
            $emp="0012";
        }
        elseif($point==3){
            $emp="0004";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
    }
    elseif($deg==4){
        
        if($point==1){
            $emp="0018";
        }
        elseif($point==2){
            $emp="0012";
        }
        elseif($point==3){
            $emp="0004";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
    }
    
}
elseif($fac==2){
    
    $facl="SOB";
    
    if($deg==1){
        
        if($point==1){
            $emp="0019";
        }
        elseif($point==2){
            $emp="0013";
        }
        elseif($point==3){
            $emp="0005";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
        
    }
    elseif($deg==2){
        
        if($point==1){
            $emp="0020";
        }
        elseif($point==2){
            $emp="0013";
        }
        elseif($point==3){
            $emp="0005";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
        
    }
    elseif($deg==3){
        
        if($point==1){
            $emp="0022";
        }
        elseif($point==2){
            $emp="0013";
        }
        elseif($point==3){
            $emp="0005";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
        
    }
    elseif($deg==4){
        
        if($point==1){
            $emp="0021";
        }
        elseif($point==2){
            $emp="0013";
        }
        elseif($point==3){
            $emp="0005";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
        
    }
    elseif($deg==5){
        
        if($point==1){
            $emp="0025";
        }
        elseif($point==2){
            $emp="0013";
        }
        elseif($point==3){
            $emp="0005";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
        
    }
    
}
elseif($fac==3){
    
    $facl="SOE";
    
    if($deg==1){
        
        if($point==1){
            $emp="0023";
        }
        elseif($point==2){
            $emp="0014";
        }
        elseif($point==3){
            $emp="0006";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
        
    }
    elseif($deg==2){
        
        if($point==1){
            $emp="0024";
        }
        elseif($point==2){
            $emp="0014";
        }
        elseif($point==3){
            $emp="0006";
        }
        elseif($point==4){
            $emp="0002";
        }
        elseif($point==5){
            $emp="0001";
        }
        
        
    }
    
}

$trdate=date("Y/m/d");

$sql = "INSERT INTO complains SET status='0', categoryi='Academic Complaint', categoryii='$facl', quer='$qu', studentid='$user', 	employeeid='$emp', answer='Not answered yet!', date='$trdate'";

            if($conn->query($sql) === TRUE){

                $last_id = mysqli_insert_id($conn);

                header('Location:../dashboard/academic.php?msg=1&id='.$last_id.'');

            }
            else{

                header('Location:../dashboard/academic.php?msg=2');

            }




?>