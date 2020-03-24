<?php 
require 'functions.php';
$username = "paijoganteng";
$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
$row = mysqli_fetch_assoc($result);
var_dump($row["Id"]);
 ?>