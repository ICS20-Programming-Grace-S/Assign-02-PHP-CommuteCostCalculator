<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Commute Cost Calculator, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Commute Cost Calculator, with PHP</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <center><h1><?php 
      echo "Commute Cost Calculator";?></h1></center>
    
    <!-- Image -->
    <center><?php
      echo '<img src= "./images/commute.jpg" alt="commute" width="55%" height="auto">';
      ?></center>

    <center><?php
      echo '<img src= "./images/commute-work.gif" alt="commute-work" width="40%" height="auto">';
      ?></center>

    <!-- Echo to print text into PHP -->
    <center>
      <h2><?php echo "Enter Inputs Here!";?></h2>
    </center>
    
    <!-- Starting of table for textfields -->
    <center>
      <form method= "post">
        <table>
          <tr>
            <td>
              
              <!-- Textfield for daily roundtrip commute -->
              Daily Roundtrip Commute (km): <input type="number" step="0.01" min="0" name="dailyCommute">
              <br>
              <br>
            </td>
              
              <!-- Working Days (per month) -->
            <td>
              Working Days (per month): <input type="float" name="workingDays"> 
              <br>
              <br>
            </td>
            
            <!-- Kilometres per Gallon -->
            <td>  
              Kilometres per Gallon (km): <input type="float" name="kilometresGallon">
              <br>
              <br>
            </td>
          </tr>
          
          <!-- Fuel Price per Gallon -->   
          <tr>
            <td>
              Fuel Price per gallon ($): <input type="float" name="fuel">
              <br>
              <br>
            </td>

            <!-- Car Payment per Month -->
            <td>
              Car Payment per Month ($): <input type="float" name="payment">
              <br>
              <br>
            </td>
            
            <!-- Parking Cost -->
            <td>
              Parking Cost (per month): <input type="float" name="parking">
              <br>
              <br>
            </td>
          </tr>
          <tr>
            <td></td>
            <td><!-- Calculate Cost Button -->
    <input type="submit" name="submit" value="Calculate Cost" /> 
            <br>
            <br>
            
            <!-- Variables and Formulas -->
              <?php
                if($_POST['submit']=="Calculate Cost")
                {
                  $dailyCommute = $_POST["dailyCommute"];
                  $workingDays = $_POST["workingDays"];
                  $kilometresGallon = $_POST["kilometresGallon"];
                  $fuel = $_POST["fuel"];
                  $payment = $_POST["payment"];
                  $parking = $_POST["parking"];    
                          
                  $distanceKilometres = ($workingDays * $dailyCommute);                   
                  $gallonsFuel = ($distanceKilometres / $kilometresGallon);
                  $moneyFuel = (($fuel * $distanceKilometres)/$kilometresGallon);
                  $total = ($payment + $moneyFuel + $parking);
                  $yearTotal = ($total * 12);
                            
                  $distanceKilometres = number_format($distanceKilometres, 2);
                  $gallonsFuel = number_format($gallonsFuel, 2);
                  $moneyFuel = number_format($moneyFuel, 2);
                  $total = number_format($total, 2);
                  $yearTotal = number_format($yearTotal, 2);
                       
                  echo "<center><h3>My Distance travelled per month is:" . $distanceKilometres . " km</h3></center>";
                  echo "<center><h3>Gallons of fuel: " .  $gallonsFuel . " gallons</h3></center>";
                  echo "<center><h3> Spent on Fuel: " . $moneyFuel . " dollars</h3></center>";
                  echo "<center><h3> My Cost of Commuting: $ " . $total . "/month</h3></center>";
                  echo "<center><h3> ($ " . $yearTotal . " /year)</h3></center>";
                }       
              ?> 
            </td>
            <td></td>
          </tr>
        </table>
      </form>
    </center>
    
    <!-- MDL checkbox -->
    <center><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
      <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
      <span class="mdl-checkbox__label"> Click this box if you enjoyed seeing how much money you spend COMMUTING TO WORK!!!</span>
    </label></center>
    
  </body>
</html>