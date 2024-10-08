<?php
namespace App\Interactions;

class Comment {
    private $content;
    private $author;
    private $postID;

    public function __construct(string $author, string $content, int $postID) {
        $this->author = $author;
        $this->content = $content;
        $this->postID = $postID;
    }

    
    public function getComments() {
        $filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';
        return "Tornant comentaris {$filter} del Post amb ID {$this->postID}";
    }

    public function addComment(): string {
        return "Coment de {$this->author} afegtit al post {$this->postID}.";
    }
}
?>
