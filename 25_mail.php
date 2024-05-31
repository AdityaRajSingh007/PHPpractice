<?php
if($_POST["submit"]){
    $name = $_POST['name'];
    $message = $_POST["text"];
    if( $name && $message){
        if( strlen( $name ) <= 20 && strlen($message) <= 300 ){
            ini_set("SMTP", "mailhost.shef.ac.uk");
            echo ini_get("SMTP");
            $to = "adityashailendra477@gmail.com";
            $subject   = "Test mail";
            $headers = "From: adityashailendra477@gmail.com\r\n";
            $body = "Name : ".$name."\n\nMessage : ".  $message;
            mail($to, $subject, $body, $headers);
            die();
        }
        else{
            die("Name length should be <= 20 and message length should be <=300");
        }
    }
}
?>
<html>
    <form action="25_mail.php" method="POST">
        Name : <input type="text" name="name" maxlength="20"><br>
        Message : <textarea name="text"></textarea><br>
        <input type="submit" name="submit" value="Send Email">
    </form>
</html>