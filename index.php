


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">  
    <title>Bucket List Batanags!</title>
    <style>

      @import url('https://fonts.googleapis.com/css2?family=K2D&display=swap');

      h1{
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
        background-color: #339966;
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
    </style>
  </head>
  <body>
      <center></center>
        <div id="page-wrap">
          <h1><b>Choose Your Language:</b></h1>
          <br>
          <br>
          <button class="button" onclick="window.location.href='/welcome'"><span>English </span></button>
          <span> </span>
          <button class="button" onclick="window.location.href='/welcome/index2.php'"><span>Tagalog </span></button>
      </div>
      </center>
  </body>
</html>
