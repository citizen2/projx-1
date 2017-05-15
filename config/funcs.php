<?php
	function fatalError($page, $json_str) {
		$GLOBALS['SQL']->query("
			INSERT INTO `fatal` (`text`)
			VALUES('$page --> $json_str')
		");
	}

	function hashPass($pass) {
		return crypt($pass, "$6$1000$".sha1("fuckoff"));
	}

	function lookSame ($arr, $subj) {
		for($i = 0; isset($arr[$i]); $i++) {
			if($arr[$i] == $subj) {
				return true;
				break;
			}
		}
		return false;
	}
?>
