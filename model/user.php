<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://necolas.github.io/normalize.css/5.0.0/normalize.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Baloo|Sansita|Acme|Source+Code+Pro" rel="stylesheet">
	<title>Саня</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script>
		function accountMenu() {
			var menu = $("#account");
			if(menu.css("display") == "none") {
				setTimeout(function() {
					menu.css("margin-right", "70px");
				}, 75);
				menu.fadeIn(300);
			} else {
				menu.fadeOut(200);
				menu.css("margin-right", "50px");
			}
		}
	</script>
</head>
<body>

	<header>

		<div id="logo">

			<img src="imgs/speech.svg" title="Main page">

			<div>MeetToU</div>

		</div>

		<div id="profile">

			<img src="imgs/user.svg" onclick="accountMenu()">

			<div id="account" >
				<ul>
					<li><a  id="log" href="">Log in</a></li>
					<li><a  id="reg" href="">Registration</a></li>
				</ul>
			</div>

		</div>
		
	
	</header>

</body>
</html>
