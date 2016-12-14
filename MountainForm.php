<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Mountain Form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  </head>


  <body>

    <?php include 'nav.php' ?>

    <div class="container">
      <div class="starter-template">
      <h1 style="color:#fff;">Tell us about your state's highest elevation!</h1><br>

        <form action="addMountain.php" method="post">
            <div>
                <label style="color:#fff;">State: </label>
                <select name="State" required>
                  <option disabled selected value> -- select a state -- </option>
                  <option value="AL">AL</option>
                  <option value="AK">AK</option>
                  <option value="AZ">AZ</option>
                  <option value="AR">AR</option>
                  <option value="CA">CA</option>
                  <option value="CO">CO</option>
                  <option value="CT">CT</option>
                  <option value="DE">DE</option>
                  <option value="FL">FL</option>
                  <option value="GA">GA</option>
                  <option value="HI">HI</option>
                  <option value="ID">ID</option>
                  <option value="IL">IL</option>
                  <option value="IN">IN</option>
                  <option value="IA">IA</option>
                  <option value="KS">KS</option>
                  <option value="KY">KY</option>
                  <option value="LA">LA</option>
                  <option value="ME">ME</option>
                  <option value="MD">MD</option>
                  <option value="MA">MA</option>
                  <option value="MI">MI</option>
                  <option value="MN">MN</option>
                  <option value="MS">MS</option>
                  <option value="MO">MO</option>
                  <option value="MT">MT</option>
                  <option value="NE">NE</option>
                  <option value="NV">NV</option>
                  <option value="NH">NH</option>
                  <option value="NJ">NJ</option>
                  <option value="NM">NM</option>
                  <option value="NY">NY</option>
                  <option value="NC">NC</option>
                  <option value="ND">ND</option>
                  <option value="OH">OH</option>
                  <option value="OK">OK</option>
                  <option value="OR">OR</option>
                  <option value="PA">PA</option>
                  <option value="RI">RI</option>
                  <option value="SC">SC</option>
                  <option value="SD">SD</option>
                  <option value="TN">TN</option>
                  <option value="TX">TX</option>
                  <option value="UT">UT</option>
                  <option value="VT">VT</option>
                  <option value="VA">VA</option>
                  <option value="WA">WA</option>
                  <option value="WV">WV</option>
                  <option value="WI">WI</option>
                  <option value="WY">WY</option>
                </select>
            </div>
            <div>
                <label style="color:#fff;">Mountain Name: </label>
                <input type="text" required id="mountain" name="Mountain_Name" placeholder="mountain"/>
            </div>
            <div>
                <label style="color:#fff;">Highest Elevation: </label>
                <select name="Highest_Elevation" required/>
                        <option disabled selected value> -- select an elevation -- </option>
                        <option value="1-1000ft">1-1000ft</option>
                        <option value="1001-2000ft">1001-2000ft</option>
                        <option value="2001-3000ft">2001-3000ft</option>
                        <option value="3001-4000ft">3001-4000ft</option>
                        <option value="4001-5000ft">4001-5000ft</option>
                        <option value="5001-6000ft">5001-6000ft</option>
                        <option value="6001-7000ft">6001-7000ft</option>
                        <option value="7001-8000ft">7001-8000ft</option>
                        <option value="8001-9000ft">8001-9000ft</option>
                        <option value="9001-10,000ft">9001-10,000ft</option>
                        <option value="10,0001-11,000ft">10,0001-11,000ft</option>
                        <option value="11,0001-12,000ft">11,0001-12,000ft</option>
                        <option value="12,0001-13,000ft">12,0001-13,000ft</option>
                        <option value="13,0001-14,000ft">13,0001-14,000ft</option>
                        <option value="14,0001-15,000ft">14,0001-15,000ft</option>
                        <option value="15,0001-16,000ft">15,0001-16,000ft</option>
                        <option value="16,0001-17,000ft">16,0001-17,000ft</option>
                        <option value="17,0001-18,000ft">17,0001-18,000ft</option>
                        <option value="18,0001-19,000ft">18,0001-19,000ft</option>
                        <option value="19,0001-20,000ft">19,0001-20,000ft</option>
                        <option value="21,0001-22,000ft">21,0001-22,000ft</option>
                        <option value="22,000ft + ">22,000ft + </option>
                </select>            
            </div>
            
            <div class="button">
                <button type="submit" class="btn btn-success">Add!</button>
                <button type="button" class="btn btn-warning"><a href="index.php">Back</a></button>
            </div>

        </form>
      </div>
    </div> <!--container-->
    


  </body>

</html>
