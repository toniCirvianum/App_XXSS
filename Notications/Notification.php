<?php
namespace App\Notifications;

class Notification {
    public $message;
    public $receiver;


    public function sendNotification(string $message, string $receiver, string $type = 'General'): string {
        $this->message = $message;
        $this->receiver = $receiver;

        return "Notificació enviada a {$receiver} amb el tipus {$type}: {$message}";
    }
}
?>
