<?php
namespace App\Users;

class Admin extends User {
    public function banUser(string $username): string {
        return "Admin has banned user {$username}.";
    }

    public static function listBannedUsers(): array {
        return ["user1", "user2", "user3"]; 
    }
}
?>
