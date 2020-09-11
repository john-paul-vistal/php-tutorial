<?php

include('config/db_connect.php');
//query for getting the data
$sql = "SELECT * FROM pizza ORDER BY created_at";
//make query and get result
$result = mysqli_query($conn,$sql);
//fetch the resulting row as an array
$pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC);
//free result from memory
mysqli_free_result($result);
//close connection
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<?php include('templates/header.php');?>
  <!-- Modal Trigger -->
  <div class="sticky">
  <a id ="cart" style = "position:absolute;right:20px;top:40px;z-index:500" class='cart modal-trigger btn btn-floating btn-large waves-effect waves-light green' href="#modal1"><i class="fa fa-shopping-cart"></i></a>
  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Your Order</h4>
      <table>
        <thead>
          <tr>
              <th>Item Name</th>
              <th>Item Price</th>
              <th>Qty</th>
              <th>Total</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Crazy Shaky Pizza</td>
            <td>P 90</td>
            <td>1</td>
            <td>P 90</td>
          </tr>
          <tr>
            <td>Hawaiian pizza</td>
            <td>P70</td>
            <td>2</td>
            <td>P 140</td>
          </tr>
          <tr>
            <td>Pizza Alla Napoletana</td>
            <td>P 80</td>
            <td>1</td>
            <td>P 80</td>
          </tr>
        </tbody>
      </table>
      <div class = "row">
      <div class="col s9">
      </div>
      <div class="col s3">
      <span><b>TOTAL: </b>P 210</span>
      </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn w3-margin-right">Pay</a>
    </div>
  </div>
<div class = "container">
    <form class="col s12 w3-margin-top">
      <div class="row">
        <div class="input-field col s6">
        <div class="col s9">
            <select>
            <option value="" disabled selected>Pizza Category</option>
            <option value="1">American</option>
            <option value="2">Italian</option>
            <option value="3">Home Made</option>
            <option value="3">Vegetarian</option>
            </select>
        </div>
        </div>
        <div class="input-field col s6">
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Search Pizza</label>
          <i class="material-icons prefix"><i class = "fa fa-search"></i></i>
        </div>
      </div>
    </form>
    <div class = "row">
    <?php foreach($pizzas as $pizza): ?>
    <div class="col s6 md4">
      <div class="card">
          <a style = "position:absolute;margin:2px;width:25px;height:25px;" href = "details.php?id=<?php echo $pizza['id'] ?>" class="btn-floating waves-effect waves-light blue btn-small"><i style = "font-size:15px;position:relative;top:-4px" class = "fa fa-info"></i></a>
        <div class="card-image">
          <img src="pizza.jpg">
          <span class="card-title"><?php echo htmlspecialchars($pizza['title'])?></span>
          <a href = "" class="btn-floating halfway-fab waves-effect waves-light red"><i class = "fa fa-plus"></i></a>
        </div>
        <div class="card-content">
        <h4><b>Ingredients:</b></h4>
            <p><?php echo htmlspecialchars($pizza['ingredients'])?></p>
        </div>
      </div>
    </div>
    <?php endforeach ?>
    </div>
</div>
<?php include('templates/footer.php');?>
</html>
