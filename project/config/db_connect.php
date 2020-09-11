<?php
//connect to database
$conn = mysqli_connect('localhost','root','','php_tutorial');
//check connection
if(!$conn){
    echo 'Connection error: '.mysqli_connect_error();
}
?>