<?php
echo "This is config";
$server= "localhost";
$user= "root";
$pass="";
$database="advocate";

$conn=mysqli_connect($server,$user,$pass,$database);
if (!$conn) {
    # code...
    die("<script>alert('Connection failed')</script>");
}
?>