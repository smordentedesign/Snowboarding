<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Mountain Form</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">

  </head>


  <body>

    <?php include 'nav.php' ?>

    <div class="container">
      <div class="starter-template">
      <h1>Tell us about your state's highest elevation!</h1><br>

        <form action="addMountain.php" method="post">
            <div>
                <label>State: </label>
                <input type="text" required id="state" name="State" placeholder="state"/>
            </div>
            <div>
                <label>Mountain Name: </label>
                <input type="text" required id="mountain" name="Mountain_Name" placeholder="mountain"/>
            </div>
            <div>
                <label>Highest Elevation: </label>
                <input type="text" required id="elevation" name="Highest_Elevation" placeholder="elevation"/>
            </div>
            
            <div class="button">
                <button type="submit">Add!</button>
                <button><a href="index.php">Back</a></button>
            </div>

        </form>
      </div>
    </div> <!--container-->
    


  </body>

</html>
