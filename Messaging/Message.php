<?php
namespace App\Messaging;

class Message {
    private $content;
    private $timestamp;
    public $sender;
    public $receiver;

    public function __construct(string $sender, string $receiver, string $content) {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->content = $content;
        $this->timestamp = time();
    }

    
    public function sendMessage(): string {
        return "Missatge de  {$this->sender} cap a  {$this->receiver}: {$this->content}";
    }
}
?>
