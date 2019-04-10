<!DOCTYPE html>
<html lang="en">
    <?php
        session_start();
        if (!isset($_SESSION['sid'])){
            
            header('Location:../login_unsuccessful.php');
            
        }
    ?>

<head>
   
</head>

<body>
</body>


</html>
