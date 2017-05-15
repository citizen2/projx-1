<?php

    class API {

        public static function select($str, $array = FALSE) {
            $answer = $GLOBALS['SQL']->query($str);
            if(!$array)
                $answer = $answer->fetch_assoc();
            else
                while(($row = $answer->fetch_assoc()) != FALSE) {
                    $answer[] = $row;
                }

            return $answer;
        }
        public static function fatalError($page, $str) {
    		$GLOBALS['SQL']->query("
    			INSERT INTO `fatal` (`text`)
    			VALUES('$page --> $str')
    		");
    	}

    	public static function hashPass($pass, $email) {
    		return crypt($pass, "$6$1000$".md5("fuckoff").sha1($email));
    	}

    	public static function lookSame ($arr, $subj) {
    		for($i = 0; isset($arr[$i]); $i++) {
    			if($arr[$i] == $subj) {
    				return true;
    				break;
    			}
    		}
    		return false;
    	}
    }

?>
