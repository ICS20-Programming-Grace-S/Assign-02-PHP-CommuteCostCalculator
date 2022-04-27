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

      <?php
        echo '<center><img src= "./images/surface_area_rectangular_prism.jpg" alt="area" width="55%" height="auto"></center>';
      ?>

      <center>
        <h2><?php echo "Enter Inputs Here!";?></h2>
      </center>
                                                       
        <!-- Buttons and Text Field -->
        <center>
          <table>
            <tr>
              <td>
                <form method= "post">
      Daily Roundtrip Commute (km): <input type="number" step="0.01" min="0" name="dailyCommute">
                  <br>
                  <br>
                  Working Days (per month): <input type="float" name="workingDays">
                </td>
                  <br>
                  <br>
                  <td>                    
                    Kilometres per Gallon (km): <input type="float" name="kilometresGallon">
                    <br>
                    <br>
                    Fuel Price per gallon ($): <input type="float" name="fuel">
                    <br>
                    <br>
                    <br>
                    <br>
                      <input type="submit" name="submit" value="Calculate Cost" />  
                    <br>
                    <br>
                      <?php
                        if($_POST['submit']=="Calculate Cost")
                        {
                          $dailyCommute = $_POST["dailyCommute"];
                          $workingDays = $_POST["workingDays"];
                          $kilometresGallon = $_POST["kilometresGallon"];
                          $fuel = $_POST["fuel"];
                          $payement = $_POST["payement"];
                          $parking = $_POST["parking"];           
                          
                          $distanceKilometres = ($workingDays * $dailyCommute);                   
                          $gallonsFuel = ($distanceKilometres / $kilometresGallon);
                          $moneyFuel = (($fuel * $distanceKilometres)/$kilometresGallon);
                          $total = ($payement + $moneyFuel + $parking);
                          $yearTotal = ($total * 12);
                            
                          $distanceKilometres = number_format($distanceKilometres, 2);
                          $gallonsFuel = number_format($gallonsFuel, 2);
                           $moneyFuel = number_format($moneyFuel, 2);
                          $total = number_format($total, 2);
                          $yearTotal = number_format($yearTotal, 2);
                          
                          echo "<br><center><h3>My Distance travelled per month is:" . $distanceKilometres . " km</h3></center>";
                          echo "<center><h3>Gallon of fuel: " . $gallonsFuel . " cm<sup>2</sup></h3></center>";
                          echo "<center><h3>Money spent on fuel: " . $moneyFuel . " cm<sup>2</sup></h3></center>";
                          echo "<center><h3> Monthly total is: " . $total . " cm<sup>2</sup></h3></center>";
                          echo "<center><h3> Yearly total is: " . $yearTotal . " cm</h3></center>";
                        }       
                      ?>
                  </td>
                  <td>
                    Car Payement per Month ($): <input type="float" name="payement">
                    <br>
                    <br>
                    Parking Cost (per month): <input type="float" name="parking">
                  </td>
                </form>
                </td>
              </tr>
            </table>
          </center>
    
                
        <!-- Calculations for area -->
        
          
  </body>
</html>