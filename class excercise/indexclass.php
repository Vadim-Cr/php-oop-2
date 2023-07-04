<?php
require_once("./models/User.php");
require_once("./models/Membership.php");
require_once("./models/PremiumUser.php");




$user1 = new User("Mario", "mia_pws", "mario@gmail.com", false);
$membership1 = new Membership("Sconto Giovani", 10);
$premiumUser = new PremiumUser("Marietto", "marietto_pws", "marietto@gmail.com", false, 50, $membership1);
echo "il prezzo scontato è per " . $premiumUser->getUsername() . " ed è " . $premiumUser->getActualPrice() . " €.";

// var_dump($user1);
// echo "<br>------------------------<br>";
// var_dump($membership1);
// echo "<br>------------------------<br>";
// var_dump($premiumUser);
// echo "<br>------------------------<br>";



?>
