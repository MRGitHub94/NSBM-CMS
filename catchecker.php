<?php 

session_start();

    
    if (!isset($_SESSION['sid'])){
            
            header('Location:index.php');
            
        }


include("connector.php");

$vag = $_POST['det'];

if($vag==1){    
    header('Location:academic.php');    
}
elseif($vag==2){
    header('Location:administrative.php');
}
elseif($vag==3){
    header('Location:other.php');
}

?>