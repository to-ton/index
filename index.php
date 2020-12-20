


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Full Page Background Image | Progressive</title>
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
<h1><b>Choose Your Language:</b></h1>
<br>
<br>
<button class="button" onclick="window.location.href='welcome.html'"><span>English </span></button>
<span> </span>
<button class="button"><span>Tagalog </span></button>
</div>
</center>
</body>
</html>
