<?php
$servername="localhost";
$username="root";
$password="";
$dbname="zalego_interview";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo"no connection".mysqli_error($conn);
}
else{
    //echo"connection created";
}
//mysqli_close($conn);
?>