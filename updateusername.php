<?php
//start a session and connect
session_start();
include('connection.php');

//get user_id
$id = $_SESSION['user_id'];
//get new username through ajax 
$username = $_POST['username'];
//run query and update username
$sql = "UPDATE users SET username='$username' WHERE user_id='$id'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">There was an error updating the username. Please try again later</div>';
}
?>