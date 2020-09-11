<?php 
if(isset($_POST['submit'])){
    setcookie('gender',$_POST['gender'],time()+86400);
    session_start();
    $_SESSION['name'] = $_POST['name'];
    header('Location:sample1.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample 101</title>
</head>
<body>

<form action="sandbox.php" method = "POST">
    <input type="text" name = "name">
    <select name="gender">
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
    </select>
    <input type="submit" name = "submit" value = "Submit">
</form>
    
</body>
</html>