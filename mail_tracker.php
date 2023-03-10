<?php
if(isset($_GET['token'])!=''){
    $token = $_GET['token'];
    $connection = mysqli_connect("localhost","root","password","dbaname");
    mysqli_query($connection,"update cudata set status='open' where uniqid='$token'");
}
?>
