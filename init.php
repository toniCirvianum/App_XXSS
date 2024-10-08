<?php
// Amb el autoload fem tots els require de les classes
require_once 'autoload.php';

use App\Actions\UserActions;
use App\Interactions\Comment;
use App\Interactions\FriendRequest;
use App\Interactions\Like;
use App\Interactions\Post;
use App\Messaging\Message;
use App\Notifications\Notification;
use App\Users\Admin;
use App\Users\Profile;
use App\Users\User;

// Instanciem objectes

// 1. User
$user = new User("pau_pujol", "paupujol@cirvi.cat", "123");
echo $user->register();
echo "<br>";

// 2. Admin (hereda de User)
$admin = new Admin("admin_user", "admin@cirvi.cat", "adminpass");
echo $admin->banUser("pau_pujol");
echo "<br>";

// 3. Profile
$profile = new Profile();
echo $profile->updateProfileInfo("Ramon Casas", 30, "Torello", "IT");
echo "<br>";

// 4. Post
$post = new Post("pau_pujol", "Hola, el meu primer post");
echo $post->createPost();
echo "<br>";

// 5. Comment
$comment = new Comment("pau_pujol", "Comment de prova", 1);
echo $comment->getComments();
echo "<br>";

// 6. Like
$like = new Like(1, 1);
echo $like->likePost();
echo "<br>";

// 7. Friend Request
$friendRequest = new FriendRequest("pau_pujol", "ramon_casas");
echo $friendRequest->updateRequestStatus();
echo "<br>";

// 8. Message
$message = new Message("pau_pujol", "ramon_casas", "Hola gent!!");
echo $message->sendMessage();
echo "<br>";

// 9. Notification
$notification = new Notification();
echo $notification->sendNotification("Tens un nou request", "pau_pujol");
echo "<br>";

// 10. User Actions with Anonymous Function
$userActions = new UserActions();
$callback = function($username) {
    echo "El compte {$username} ha estat desactivat.<br>";
};
$userActions->deactivateAccount("pau_pujol", $callback);

?>
