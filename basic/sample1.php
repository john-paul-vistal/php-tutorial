<?php
session_start();
//?? is use if the session or cookie is not defined 
//it is Null Coalescing
$name = $_SESSION['name']??"GUEST";
$gender = $_COOKIE['gender'] ??"UNKOWN";
?>


<html>
<body>
    <p>THIS THING IS FROM SESSION <?php echo $name ?></p>
    <p>THIS THING IS FROM COOKIE <?php echo $gender ?></p>
</body>
</html>