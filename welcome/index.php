


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Full Page Background Image | Progressive</title>
		<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
		<style>
	
				@import url('https://fonts.googleapis.com/css2?family=K2D&display=swap');

				h1{
					font-family: 'Allura', cursive;
					color: green;
				}

				p{
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

				.button {
					display: inline-block;
					border-radius: 4px;
					background-color: green;
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
					content: '\00bb';
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
		<center>
			<div id="page-wrap">
				<h1><b>Bucket List Batangas!</b></h1>
				<br>
				<p>This is an intuitive tool to create your own bucket list of destinations to explore here in Batangas – its natural attractions, religious sites, sports and recreation destinations, places for various gastronomic adventures, and historical and cultural sites.</p>
				<br>
				<p>Prepare for a meaningful journey and explore the beauty of Batangas. May you be guided accordingly for your safe travels.</p>
				<br><br>
				<button class="button" style="vertical-align:middle" onclick="window.location.href='/welcome/1'"><span>Continue </span></button>
				<br>
				<i>In partial fulfillment in Philippine History - SY2020-1T</i>
			</div>
		</center>
	</body>
</html>
