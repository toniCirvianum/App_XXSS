<?php
namespace App\Interactions;

class FriendRequest {
    private $sender;
    private $receiver;
    private $status;

    public function __construct(string $sender, string $receiver) {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->status = 'pendent';
    }

    public function updateRequestStatus(string $status = 'pendent'): string {
        $this->status = $status;
        return "La resposta de {$this->sender} de {$this->receiver} esta {$this->status}.";
    }
}
?>
