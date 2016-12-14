<?php

include 'dbConnection.php';

$sql = "SELECT id, Mountain_Name FROM Mountains";
$mountains = $conn->query($sql);


if (isset($_GET['trail_id'])){

  $trail_id = $_GET['trail_id'];

  $trailSQL = "SELECT * FROM Trails where id =$trail_id";

  $trail = $conn->query($trailSQL)->fetch_assoc();

}

 ?>


<!DOCTYPE html>
<html>

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
      <title>Add a Trail</title>

      <link href="dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/starter-template.css" rel="stylesheet">
  </head>

  <body>
      <?php include 'nav.php' ?>

      <div class="container">
      
      <div class="starter-template">
      
      <form action="addTrail.php" method="post">
          <h2 style="color:#fff;">Add/Update Trail</h2>
          <?php if(isset($trail_id)) echo "<input type='hidden' name='trail_id' value=" . $trail_id .">"; ?>
          

          <div>
            <label for="mountain_id" style="color:#fff;">Mountain: </label>
            <select name="mountain_id">
            <?php
              if ($mountains->num_rows > 0){
                //output data for each row
               while($row = $mountains->fetch_assoc()){
                 echo "<option value='" . $row["id"]. "'";
                 if (isset($trail) and $trail['trail_id'] == $row["id"]) echo "selected";
                 echo">" . $row["Mountain_Name"] . "</option>";
                }
              }
              ?>
            </select>
          </div>
        
          <div>
              <label style="color:#fff;">Trail Name: </label>
              <input type="text" required id="trail" name="Trail_Name" placeholder="trail name" <?php if (isset($trail['Trail_Name'])) echo "value='" . $trail['Trail_Name'] . "'"; ?> />
          </div>



          <div class="button">
              <button type="submit" class="btn btn-success">Add!</button>
              <button type="button" class="btn btn-warning"><a href="index.php">Back</a></button>

          </div>
      </form>

    </div>
  </div>
    </div>
  </body>

</html>
