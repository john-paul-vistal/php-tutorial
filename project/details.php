<?php
include('config/db_connect.php');

if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn,$_POST['id_to_delete']);
    $sql = "DELETE FROM pizza WHERE id = $id_to_delete";
    if(mysqli_query($conn,$sql)){
        header('Location:index.php');
    }else{
        echo 'ERROR:'.mysqli_error($conn);
    }
}
//Check Get request id params
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $sql = "SELECT * FROM pizza WHERE id = $id";
    $result = mysqli_query($conn,$sql);

    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php');?>
    <div class = "container center">
        <?php if($pizza):?>
            <h4><b><?php echo htmlspecialchars($pizza['title'])?></b></h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email'])?></p>
            <p><?php echo htmlspecialchars($pizza['created_at'])?></p>
            <h5>Ingredients</h5>
            <p><?php echo htmlspecialchars($pizza['ingredients'])?></p>
            <form action="details.php" method = "POST">
                <input name = 'id_to_delete' type="hidden" value = "<?php echo $pizza['id']?>">
                <input name = 'delete' type="submit" class="btn red z-depth-1" value = "Delete">
            </form>
        <?php else:?>
        <h5>No such pizza exist!</h5>
        <?php endif;?>
    </div>
<?php include('templates/footer.php');?>
</html>