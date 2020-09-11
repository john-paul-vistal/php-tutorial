<?php
include('config/db_connect.php');
$email = $title =$ingredients = '';
$errors = array('email'=>'','title'=>'','ingredients'=>'');
if(isset($_POST['submit'])){
    //Check Email
    if(empty($_POST['email'])){
        $errors['email'] = 'An email is required!<br>';
    }else{
        $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'email must be a valid email address';
        }
    }

    //Check title
    if(empty($_POST['title'])){
        $errors['title'] = 'A title is required!<br>';
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

    //Check ingredients
    if(empty($_POST['ingredients'])){
        $errors['ingredients'] = 'At least one ingredients is required!<br>';
    }else{
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)){
            $errors['ingredients'] = 'Ingredients must be a comma separated list!';
        }
    }

    if(array_filter($errors)){
        //echo "<div class = 'center red-text'>An error occured!</div>";
    }else{
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $title = mysqli_real_escape_string($conn,$_POST['title']);
        $ingredients = mysqli_real_escape_string($conn,$_POST['ingredients']);

        $sql = "INSERT INTO pizza(title,ingredients,email) VALUES ('$title','$ingredients','$email')";
        if(mysqli_query($conn,$sql)){
            header('Location:index.php');
        }else{
            echo 'Query error: '.mysqli_erro($conn);
        }
    }
}//End of Post Check

?>
<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php');?>
<section class ="container black-text">
    <h4 class = "center">ADD A PIZZA</h4>
    <form class = "form white z-depth-1" action="add.php" method = "POST">
        <label for="">Your Email: </label>
        <input type="email" name = "email" value = "<?php echo $email?>">
        <div class = "red-text"><?php echo $errors['email']?></div>
        <label for="">Pizza Name: </label >
        <input type="text" name = "title" value = "<?php echo $title?>">
        <div class = "red-text"><?php echo $errors['title']?></div>
        <label for="">Ingredients: </label>
        <input type="text" name = "ingredients" value = "<?php echo $ingredients?>">
        <div class = "red-text"><?php echo $errors['ingredients']?></div>
        <div class = "center">
            <input type="submit" name = "submit" value = "submit" class = "btn z-depth-0">
        </div>
    </form>
</section>
<?php include('templates/footer.php');?>
</html>
