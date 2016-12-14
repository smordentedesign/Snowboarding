

<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <title>Ski & Snowboard Mountains</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">



</head>

    <body>

        <?php include 'nav.php' ?>


        <div class="container">
            <div class="starter-template">
                <h1 style="color:#fff;">Mountains & Trails</h1>
                <button type="button" class="btn btn-lg btn-default"><a href="MountainForm.php">Add a mountain</a></button>
                <button type="button" class="btn btn-lg btn-default"><a href="TrailForm.php">Add a trail</a></button>
            </div>

            <div style="text-align:center">
                <div style="display: inline-block;">
                    <form action="index.php" method="post" style="padding:10px;">
                    <select name="State">
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
                    <input class="btn btn-sm btn-primary" type='submit' value = 'Filter'>
                    </form>
          </div>

          <div style="display: inline-block;">
                <form action="index.php" method="post" style="padding:10px;">
                    <select name="Highest_Elevation">
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
                    <input class="btn btn-sm btn-primary" type='submit' value = 'Filter'>
                    </form>
                </div>

                <div style="display: inline-block;" style="padding:20px;">
                  <a href="index.php" class="btn btn-sm btn-success" >RESET SORTING</a>
                </div>
        </div>

           
            <!--PHP select start-->
            <?php

            include 'dbConnection.php';

            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
                    Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID";

            if (isset($_GET['orderBy']) == 'State') {
            $sql = "SELECT
            Trails.ID as trail_id, Mountain_ID, Trail_Name, Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID ORDER BY State DESC";

            }else{
            $sql = "SELECT
            Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID";

            }



            if (isset($_GET['orderBy']) == 'Trail_Name') {
            $sql = "SELECT
            Trails.ID as trail_id, Mountain_ID, Trail_Name, Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID ORDER BY Trail_Name DESC";

            }else{
            $sql = "SELECT
            Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID";

            }

            if (isset($_GET['orderBy']) == 'Mountain_Name') {
            $sql = "SELECT
            Trails.ID as trail_id, Mountain_ID, Trail_Name, Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID ORDER BY Mountain_Name DESC";

            }else{
            $sql = "SELECT
            Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID";

            }

            if (isset($_GET['orderBy']) == 'Highest_Elevation') {
            $sql = "SELECT
            Trails.ID as trail_id, Mountain_ID, Trail_Name, Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID ORDER BY Highest_Elevation DESC";

            }else{
            $sql = "SELECT
            Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID";

            }

//filter by state
            if (isset($_POST['State'])) {
            $StateSort = $_POST['State'];
  
            if ($StateSort == 'AL') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='AL' ";
            } elseif ($StateSort == 'AK') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='AK' ";

            }elseif ($StateSort == 'AZ') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='AZ' ";

            }elseif ($StateSort == 'AR') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='AR' ";

            }elseif ($StateSort == 'CA') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='CA' ";

            }elseif ($StateSort == 'CO') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='CO' ";

            }elseif ($StateSort == 'CT') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='CT' ";

            }elseif ($StateSort == 'DE') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='DE' ";

            }elseif ($StateSort == 'FL') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='FL' ";

            }elseif ($StateSort == 'GA') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='GA' ";

            }elseif ($StateSort == 'HI') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='HI' ";

            }elseif ($StateSort == 'ID') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='ID' ";

            }elseif ($StateSort == 'IL') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='IL' ";

            }elseif ($StateSort == 'IN') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='IN' ";

            }elseif ($StateSort == 'IA') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='IA' ";

            }elseif ($StateSort == 'KS') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='KS' ";

            }elseif ($StateSort == 'KY') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='KY' ";

            }elseif ($StateSort == 'LA') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='LA' ";

            }elseif ($StateSort == 'ME') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='ME' ";

            }elseif ($StateSort == 'MD') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='MD' ";

            }elseif ($StateSort == 'MA') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='MA' ";

            }elseif ($StateSort == 'MI') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='MI' ";

            }elseif ($StateSort == 'MN') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='MN' ";

            }elseif ($StateSort == 'MS') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='MS' ";

            }elseif ($StateSort == 'MO') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='MO' ";

            }elseif ($StateSort == 'MT') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='MT' ";

            }elseif ($StateSort == 'NE') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='NE' ";

            }elseif ($StateSort == 'NV') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='NV' ";

            }elseif ($StateSort == 'NH') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='NH' ";

            }elseif ($StateSort == 'NJ') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='NJ' ";

            }elseif ($StateSort == 'NM') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='NM' ";

            }elseif ($StateSort == 'NY') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='NY' ";

            }elseif ($StateSort == 'NC') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='NC' ";

            }elseif ($StateSort == 'ND') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='ND' ";

            }elseif ($StateSort == 'OH') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='OH' ";

            }elseif ($StateSort == 'OK') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='OK' ";

            }elseif ($StateSort == 'OR') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='OR' ";

            }elseif ($StateSort == 'PA') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='PA' ";

            }elseif ($StateSort == 'RI') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='RI' ";

            }elseif ($StateSort == 'SC') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='SC' ";

            }elseif ($StateSort == 'SD') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='SD' ";

            }elseif ($StateSort == 'TN') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='TN' ";

            }elseif ($StateSort == 'TX') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='TX' ";

            }elseif ($StateSort == 'UT') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='UT' ";

            }elseif ($StateSort == 'VT') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='VT' ";

            }elseif ($StateSort == 'VA') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='VA' ";

            }elseif ($StateSort == 'WA') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='WA' ";

            }elseif ($StateSort == 'WV') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='WV' ";

            }elseif ($StateSort == 'WI') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='WI' ";

            }elseif ($StateSort == 'WY') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation 
            FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE State='WY' ";

            }





            }



//filter by elevation
            if (isset($_POST['Highest_Elevation'])) {
            $elevationSort = $_POST['Highest_Elevation'];
  
            if ($elevationSort == '1-1000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='1-1000ft' ";
            } elseif ($elevationSort == '1001-2000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='1001-2000ft' ";

            }elseif ($elevationSort == '2001-3000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='2001-3000ft' ";

            }elseif ($elevationSort == '3001-4000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='3001-4000ft' ";

            }elseif ($elevationSort == '4001-5000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='4001-5000ft' ";

            }elseif ($elevationSort == '5001-6000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='5001-6000ft' ";

            }elseif ($elevationSort == '6001-7000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='6001-7000ft' ";

            }elseif ($elevationSort == '7001-8000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='7001-8000ft' ";

            }elseif ($elevationSort == '8001-9000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='8001-9000ft' ";

            }elseif ($elevationSort == '9001-10,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='9001-10,000ft' ";

            }elseif ($elevationSort == '10,0001-11,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='10,0001-11,000ft' ";

            }elseif ($elevationSort == '11,0001-12,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='11,0001-12,000ft' ";

            }elseif ($elevationSort == '12,0001-13,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='12,0001-13,000ft' ";

            }elseif ($elevationSort == '13,0001-14,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='13,0001-14,000ft' ";

            }elseif ($elevationSort == '14,0001-15,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='14,0001-15,000ft' ";

            }elseif ($elevationSort == '15,0001-16,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='15,0001-16,000ft' ";

            }elseif ($elevationSort == '16,0001-17,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='16,0001-17,000ft' ";

            }elseif ($elevationSort == '17,0001-18,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='17,0001-18,000ft' ";

            }elseif ($elevationSort == '18,0001-19,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='18,0001-19,000ft' ";

            }elseif ($elevationSort == '19,0001-20,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='19,0001-20,000ft' ";

            }elseif ($elevationSort == '21,0001-22,000ft') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='21,0001-22,000ft' ";

            }elseif ($elevationSort == '22,000ft + ') {
            $sql = "SELECT Trails.ID as trail_id, Mountain_ID, Trail_Name, 
            Mountains.ID as mountain_id, State, Mountain_Name, Highest_Elevation FROM Trails JOIN Mountains ON Mountains.ID = Trails.Mountain_ID WHERE Highest_Elevation='22,000ft + ' ";

            }






            }





//$sql = "SELECT 
//players.id as Players_id, Player_Name, Team_id, Position, Number,
//nfl_football_teams.id as TeamID, Team, Uniform_Color, State, Division
//FROM players JOIN nfl_football_teams ON players.Team_id = nfl_football_teams.id";



            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo '<table class="table table-bordered">
                        <tr style="background-color: #222222;">
                            <th><a href="?orderBy=Mountain_ID">Mountain ID</a></th>
                            <th><a href="?orderBy=Trail_Name">Trail Name</a></th>
                            <th><a href="?orderBy=State">State</a></th>
                            <th><a href="?orderBy=Mountain_Name">Mountain Name</a></th>
                            <th><a href="?orderBy=Highest_Elevation">Highest Elevation</a></th>
                            <th style="color: #fff;">Delete</th>
                            <th style="color: #fff;">Update</th>

                        </tr>';
                while($row = $result->fetch_assoc()) {
                    echo '<tr>'.

                    '<td style="background: rgba(192,192,192, 0.4); width:100px; padding-left:50px;">'. $row['Mountain_ID'] . '</td>' . 
                    '<td style="background: rgba(192,192,192, 0.4); width=130px;">'. $row['Trail_Name'] . '</td>' . 
                    '<td style="background: rgba(192,192,192, 0.4); width=60px;">'. $row['State'] . '</td>' . 
                    '<td style="background: rgba(192,192,192, 0.4); width=160px;">'. $row['Mountain_Name'] . '</td>' . 
                    '<td style="background: rgba(192,192,192, 0.4); width=130px;">'. $row['Highest_Elevation'] . '</td>'.
                    '<td style="background: rgba(192,192,192, 0.4); width=60px;">'. " <a href=deleteTrail.php?trail_id=" . $row['trail_id'] ."> delete</a>"  . "<br>" . '</td>'.
                    '<td style="background: rgba(192,192,192, 0.4); width=60px;">'. " <a href=TrailForm.php?trail_id=" . $row['trail_id'] ."> update</a>" . "<br>" . '</td>'.
                    '</tr>';
                }
                echo '</table>';
            }


            ?>


        </div><!-- /.container -->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>


    </body>

</html>
