<?php
namespace App\Actions;

class UserActions {
    // Anonymous function as a callback
    public function deactivateAccount($username, $callback) {
        echo "Deactivating account for {$username}...<br>";
        if (is_callable($callback)) {
            $callback($username);
        }
    }
}

// Example usage
$userActions = new UserActions();
$callback = function($username) {
    echo "Compte de {$username} s'ha desactivat.";
};
$userActions->deactivateAccount("Joan Illa", $callback);
?>
