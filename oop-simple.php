<html>
<body>
<?php


class User 
{
    public $public = "Public";
    protected $protected = "Protected";
    protected $username;
    protected $email;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return "Username: ".$this->username;
    }
}

$user = new User();
$user->setUsername("Panyi");

echo $user->getUsername()."<br/>";
echo $user->public;

if(isset($_POST["fname"])){
    echo "<br/>Selamat datang ".$_POST["fname"]." ".$_POST["lname"]."<br/>";
}
?>

<form method="POST">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="<?php @$_POST["fname"]; ?>"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value="<?php @$_POST["lname"]; ?>"><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>

<?php

$b = (true and false);
var_dump($b);