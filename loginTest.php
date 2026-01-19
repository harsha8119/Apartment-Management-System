
<?php
use SebastianBergmann\Type\TrueType;



function validateCredentials($username, $email) {
    $db = mysqli_connect('localhost', 'root', '', 'project');
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username ) {
            if ($user['email'] === $email) {
                return true;
            }
            else{
                return false;
            }
        }
        
      }
      else{
        return false;
      }
}
?>
<?php

use PHPUnit\Framework\TestCase;

require_once 'index.php';

class loginTest extends TestCase {
    public function testValidCredentials() {
        $username = 'Ankita Anan';
        $email = 'ankita.anant7@gmail.com';

        $result = validateCredentials($username, $email);

        $this->assertTrue($result);
    }
    public function testValidCredentials1() {
        $username = 'Harsha';
        $email = 'harsha_suryadevara@srmap.edu.in';

        $result = validateCredentials($username, $email);

        $this->assertTrue($result);
    }
    public function testValidCredentials2() {
        $username = 'Lily';
        $email = 'lilyy@gmail.com';

        $result = validateCredentials($username, $email);

        $this->assertTrue($result);
    }
}