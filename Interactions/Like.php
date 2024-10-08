<?php
namespace App\Interactions;

class Like {
    private $userID;
    private $postID;

    public function __construct(int $userID, int $postID) {
        $this->userID = $userID;
        $this->postID = $postID;
    }

    public function likePost(): string {
        return "Usuari {$this->userID} ha fet like al post {$this->postID}.";
    }

  //Metode per comptar likes
    public static function countLikes(): int {
        return rand(0, 100); 
    }
}
?>
