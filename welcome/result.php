



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">  
    <title>Full Page Background Image | Progressive</title>
    <style>

      @import url('https://fonts.googleapis.com/css2?family=K2D&display=swap');

      h1,b{
        font-family: 'K2D', sans-serif;
      }
    
      * { margin: 0; padding: 0; }
          
      html { 
        background: url(taal_cover.jpg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
         background-size: cover;
       }
          
      #page-wrap { width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
      p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }

      .button {
        display: inline-block;
        border-radius: 4px;
        color: #FFFFFF;
        background-color: green;
        border: none;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      }
      .button {
        display: inline-block;
        border-radius: 4px;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\1F5F8';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }
    </style>
  </head>
  <body>
      <center></center>
        <div id="page-wrap">
          <h1><b>here's your bucket destination:</b></h1>
          <br>
          <?php
            if($_POST["vibe"] == "adventure" && $_POST["taste"] == "mountains" &&  isset($_POST["setting"]) && isset($_POST["budget"])){

              echo "<i>details: mountains suites in most every situation and absolutely swak sa budget! hope you have a good day :)</i><br><br>";
              echo "<b>Mt. Gulugod Baboy<br>";
              echo "Mt. Batulao<br>";
              echo "Mt. Talamitam<br>";
              echo "Mt. Manabu<br>";
              echo "Mt. Daguldol<br>"; 
              echo "Mt. Banoi<br>";
              echo "Mt. Matoco<br></b>";
              echo "Fortune Island<br>";
              echo " <span style='display:flex; justify-content:flex-end; width:100%; padding:0;'><button class='button' style='justify-content: right;' onclick=\"window.location.href='/welcome'\"><span>Again </span></button></span>
";

            }elseif($_POST["vibe"] == "party" && $_POST["taste"] == "mountains" && isset($_POST["setting"]) && isset($_POST["budget"])){
             
             echo "<i>details: Please observe safety and cleanliness during your travels.</i><br><br><b><font color='red'>Parties are restricted on mountains</font>.</b>";
             echo " <span style='display:flex; justify-content:flex-end; width:100%; padding:0;'><button class='button' style='justify-content: right;' onclick=\"window.location.href='/welcome'\"><span>Again </span></button></span>
";
            }elseif(isset($_POST["vibe"]) && $_POST["taste"] == "beaches" && isset($_POST["setting"]) && isset($_POST["budget"] == "yes"){
             
              echo "<i>details: here are the list of budget beaches available.</i><br><br>";
              echo "<b>Anilao<br>";
              echo "laiya<br>";
              echo "Masasa Beach, Tingloy<br>";
              echo "Mabini<br>";
              echo "Isla Verde<br>";
              echo "Calatagan<br>"; 
              echo "Mabini<br>";    
              echo " <span style='display:flex; justify-content:flex-end; width:100%; padding:0;'><button class='button' style='justify-content: right;' onclick=\"window.location.href='/welcome'\"><span>Again </span></button></span>
";
            }elseif(isset($_POST["vibe"]) && $_POST["taste"] == "beaches" && isset($_POST["setting"]) == "romantic" && $_POST["budget"] == "no"){
             
              echo "<b>Aquaria Water Park<br>";
              echo "Sepoc Beach<br>";
              echo "Lemery Resorts<br>";
              echo " <span style='display:flex; justify-content:flex-end; width:100%; padding:0;'><button class='button' style='justify-content: right;' onclick=\"window.location.href='/welcome'\"><span>Again </span></button></span>
";
            }elseif(isset($_POST["vibe"]) && $_POST["taste"] == "tourist_spots" && isset($_POST["setting"]) && isset($_POST["budget"])){
              echo "<i>details: enjoy the rest of batangas with the following top tourist spots. All deals under your budget!</i><br><br>";
              echo "<b>Fantasy World, Batangas<br>";
              echo "Taal, Volcano<br>";
              echo "San Nicolas Ecotour<br>";
              echo "Saint Padre Pio Shrine<br>";
              echo "Taal Heritage Town<br>";
              echo "Kapusod Threehouse";
              echo "Cape Santiago Lighthouse"<br>";
              echo "Malabrigo Lighthouse<br>";
              echo " <span style='display:flex; justify-content:flex-end; width:100%; padding:0;'><button class='button' style='justify-content: right;' onclick=\"window.location.href='/welcome'\"><span>Again </span></button></span>
";
            }else{
                    echo "we run into an error. please try again and don't skip per questions. ";             
                    echo " <span style='display:flex; justify-content:flex-end; width:100%; padding:0;'><button class='button' style='justify-content: right;' onclick=\"window.location.href='/welcome'\"><span>Again </span></button></span>
";}
                    ?>
          
          
      </div>
      </center>
  </body>
</html>
