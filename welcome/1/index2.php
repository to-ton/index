


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Bucket List Batangas!</title>
        <style>

            @import url('https://fonts.googleapis.com/css2?family=K2D&display=swap');

            h1,label{
            font-family: 'K2D', sans-serif;
            padding: 10px;
            }

            * { margin: 0; padding: 0; }
                
            html { 
                    background: url(taal_cover.jpg) no-repeat center center fixed; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
            }
                
            #page-wrap {width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
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
            <div id="page-wrap">
                <form action="/welcome/2/index2.php" method="POST" required="required">
                    <h1><b>Pumile ng iyong pinaka nanais:</b></h1>
                    <input type="radio" id="adventure" name="vibe" value="adventure">
                    <label>Maglakbay</label><br>
                    <input type="radio" id="pass_time" name="vibe" value="for_past_time">
                    <label>Pangpalipas oras</label><br>
                    <input type="radio" id="chill" name="vibe" value="chill">
                    <label>Tumambay</label><br>
                    <input type="radio" id="hangout" name="vibe" value="hangout">
                    <label>Sama-sama</label><br>
                    <input type="radio" id="party" name="vibe" value="party">
                    <label>Salo-Salo</label><br>
                    <span style="display:flex; justify-content:flex-end; width:100%; padding:0;">
                        <button class="button" style="    justify-content: right;"><span>Next </span></button>
                    </span>
                    </form>
                <i>Itiman ang bilugan para sa iyong sagot</i>
	    </div>
    </body>
</html>
