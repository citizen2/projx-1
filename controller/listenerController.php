<?php
	if(isset($_POST['listener']))
		define('LISTENER', $_POST['listener']);
	elseif(isset($_GET['listener']))
		define('LISTENER', $_GET['listener']);

	require_once '../config/db.php';
	require_once '../config/globals.php';
	require_once '../model/jsonModel.php';
	require_once '../model/userModel.php';
	require_once '../model/apiModel.php';

	$reserver = [
		'quizcheck',
		'quizanswer',
		'quizready'
	]
	$private = [
		'quizcreate'
	];

	$JSON = new JSON();
	$User = new User();

	if(API::lookSame($private, LISTENER)) {
		if($User->login($_POST['id'], $_POST['email'], $_POST['pass'])) {

			if(API::lookSame($reserver, LISTENER)) {
				// API::select("
				// 	SELECT
				// ");
			}

		} else {
			$JSON->write("user", "You are not logged.");
		}
	}

	if($JSON->ok())
		require_once '../listener/' . LISTENER . 'Listener.php';

	$SQL->close();
	$JSON->pop(TRUE);
?>
