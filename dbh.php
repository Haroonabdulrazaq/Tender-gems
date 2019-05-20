<?php
return $conn = mysqli_connect('localhost', 'root','','tendergems');
if (!$conn) {
   die('Connection failed: '. mysqli_connect_error());
}
?>