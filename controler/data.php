<?php
    class Data{
        public static function createPassword($rawPassword)
        {
            $salt = bin2hex(random_bytes(16));
            $hash = hash_pbkdf2("sha512", $rawPassword, $salt, 1000, 64);
            return array("salt" => $salt, "hash" => $hash);
        }

        public static function checkPassword($rawPassword, $salt, $hash)
        {
            $checkHash = hash_pbkdf2("sha512", $rawPassword, $salt, 1000, 64);
            return $checkHash == $hash;
        }

        public static function verifyEmailExist($email){
            global $account;
            if($account->findOne(['email' => $email]) == null){
                return -1;
            }else{
                return $account->findOne(["email" => $email], ['projection' => []])['_id'];
            }
        }
    }
?>