<?php
namespace App\Users;

class Profile {
    public $name;
    public $age;
    public $location;
    public $bio;

    // Function with default parameter values for optional profile details
    public function updateProfileInfo(string $name, int $age, string $location = "Sense especificar", string $bio = "No bio provided"): string {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
        $this->bio = $bio;

        return "Profile actualitzat: {$name}, {$age} anys, de {$location}.";
    }
}
?>
