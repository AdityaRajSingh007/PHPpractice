<?php
$user_password = "abc";
$password_enc = md5($user_password);
echo $user_password."<br>";
echo $password_enc;
if($_POST["password"]){
    if(md5( $_POST["password"]) == $password_enc ){
        die("<br>Correct Password");
    }
    else{
        die("<br>Incorrect Password");
    }
}
?>
<html>
    <form action="24_md5_encryption.php" method="POST">
        <input type="text" name="password">
        <input type="submit" value="Log In">
    </form>
</html>