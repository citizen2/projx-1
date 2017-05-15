<?php
	require_once "config/globals.php";
	require_once "config/db.php";
?>

<html>
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel='stylesheet' href='js/jquery-ui-1.12.1.custom/jquery-ui.min.css'>
		<link rel='stylesheet' href='css/normalize_css.css'>
        <link rel='stylesheet' href='css/layout.css'>
		<link rel='stylesheet' media='all' href='css/animate.css'>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>


		<script src="js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
		<script src='js/header_main.js'></script>
		<script src='js/viewportchecker.js'></script>
		<script src='js/animation.js'></script>
    </head>
    <body>
		<?php require_once 'view/layout/sidemenu.php'; ?>
		<?php require_once 'view/layout/header.php'; ?>

		<div class='wrapper'>

			<!--Основной контент-->
			<div class='main_content'>

				<?php require_once 'view/'.VIEW.'View.php'; ?>

			</div>

			<?php require_once 'view/layout/footer.php'; ?>

		</div>

	</body>

</html>

<?php //$SQL->close(); ?>
