<?php
session_start();

include 'dbh.php';
$First=$_POST['First'];
$Last=$_POST['Last'];
$Admin=$_POST['Admin'];
$Password=$_POST['Password'];

$sql="INSERT INTO signUp( firstName, lastName,Admission,pwd) 
VALUES ('$First','$Last','$Admin','$Password')"; 
$result = $conn-> query($sql);

header('Location: Login.html');

?>