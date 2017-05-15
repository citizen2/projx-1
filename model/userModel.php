<?php
    class User extends API {

        private $data = [
            'logged' => FALSE
        ];

        public function login($id, $email, $pass, $hash = FALSE) {
            if($hash)
                $pass = self::hashPass($pass, $email);

            if($id != NULL)
                $query = '
                    SELECT `id`, `email`, `pass` FROM `users`
                    WHERE `id` = '$id'
                    AND `email` = '$email'
                    AND `pass` = '$pass'
                    LIMIT 0, 1
                ';
            else
                $query = '
                    SELECT `id`, `email`, `pass` FROM `users`
                    WHERE `email` = '$email'
                    AND `pass` = '$pass'
                    LIMIT 0, 1
                ';

            $user = self::select($query);

            if(!empty($user)) {
                $data['id'] = $user['id'];
                $data['email'] = $user['email'];
                $data['pass'] = $user['pass'];
                $data['level'] = $user['level'];
                $data['money'] = $user['money'];
                $data['logged'] = TRUE;

                return TRUE;
            }

            return FALSE;
        }
        public function get($var) {
            echo $this->data[$var];
        }
        public function logged() {
            echo $this->data['logged'];
        }
    }
?>
