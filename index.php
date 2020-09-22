<?php
class User {
  public $username;
  public $password;
  public $dateOfBirth;
  public $emailAddress;


  function __construct($username, $password, $dateOfBirth, $emailAddress) {
    $this-> username = $username;
    $this-> password = $password;
    $this-> dateOfBirth = $dateOfBirth;
    $this-> emailAddress = $emailAddress;


  }

  public function __toString() {
      return "<strong>User Data:</strong><br>Username: " . $this -> username . "<br>"
           . "Password: " . $this -> password . "<br>"
           . "Data di Nascita: " . $this -> dateOfBirth . "<br>"
           . "Indirizzo Mail: " . $this -> emailAddress . "<br>";
  }

};

$user1 = new User("pippo", "122345", "10/05/89", "mioindirizzo@gmail.com");
$user2 = new User("pluto", "pass", "12/02/69", "altroindirizzo@yahoo.com");
$user3 = new User("topolino", "77aar", "31/01/97", "inrizzomail@gmail.com");

echo $user1;
echo "<br>";
echo $user2;
echo "<br>";
echo $user3;
echo "<br>";

?>
