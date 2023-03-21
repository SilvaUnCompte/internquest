<?php

Class account {
    // model de table mongodb
    private $account = [
        "name" => "",
        "email" => "",
        "password" => "",
        "role" => "",
        "created_at" => "",
        "updated_at" => ""
    ];

    // constructeur
    public function __construct($name, $email, $password, $role, $created_at, $updated_at) {
        $this->account["name"] = $name;
        $this->account["email"] = $email;
        $this->account["password"] = $password;
        $this->account["role"] = $role;
        $this->account["created_at"] = $created_at;
        $this->account["updated_at"] = $updated_at;
    }
}