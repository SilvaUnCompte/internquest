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

        public static function checkPasswordEmailCouple($email, $password){
            global $account;
            $accountId = Data::verifyEmailExist($email);
            if($accountId!= -1){
                $passwordTab = $account->findOne(["_id" => $accountId], ['projection' => ["_id" => 0, "password" => 1]]);
                if(Data::checkPassword($password, $passwordTab['salt'], $passwordTab['hash'])){
                    return 0;
                }else{
                    return -2;
                }
            }else{
                return -1;
            }
        }

        public static function researchStudent(){}
        public static function researchPilot(){}
        public static function researchCompany(){}
        public static function research(){}
        public static function wishlist($id){}

    }
?>
