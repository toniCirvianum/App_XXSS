<?php
namespace App\Interactions;

class Post {
    private $content;
    private $author;
    private $timestamp;

    public function __construct(string $author, string $content) {
        $this->author = $author;
        $this->content = $content;
        $this->timestamp = time();
    }

    public function createPost(): string {
        $formattedTime = date("Y-m-d H:i:s", $this->timestamp);
        return "Post by {$this->author} en data
         {$formattedTime}: {$this->content}";
    }
}
?>
