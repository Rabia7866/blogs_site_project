<?php
$servername = "localhost";
$username= "root";
$password = "";
$db_name = "blogs_project";


$conn = mysqli_connect($servername,$username,$password,$db_name);
if($conn)
{
    echo "connected";
}
?>