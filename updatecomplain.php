<?php 

session_start();
if (!isset($_SESSION['adid'])){
            
            header('Location:index.php');
            
        }

include("connector.php");


$cid = $_POST['cid'];
$answ = $_POST['answ'];
$sta = $_POST['sta'];


$sql = "UPDATE complains SET status='$sta', answer='$answ' WHERE complainid='$cid'";

            if($conn->query($sql) === TRUE){

                $last_id = mysqli_insert_id($conn);

                header('Location:viewcomplain.php?point='.$cid.'&msg=1');

            }
            else{

                header('Location:viewcomplain.php?point='.$cid.'&msg=2');

            }




?>