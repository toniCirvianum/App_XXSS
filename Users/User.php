<?php
namespace App\Users;

class User {
    public $username;
    public $email;
    private $password;

    public function __construct(string $username, string $email, string $password) {
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
    }

    public function register(): string {
        return "Usuari {$this->username} registrat!!!.";
    }

    private function setPassword(string $password): void {
        $this->password = $password;
    }
}
?>
