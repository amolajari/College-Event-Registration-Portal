<?php

include('../includes/database.php');

if(isset($_POST['remove']))
{
    $reg = $_POST['regno'];
    $sql = "DELETE FROM `reg_form` WHERE regno=$reg";
    mysqli_query($con,$sql);
    header('Location: admin.php');
    
} 

?>
