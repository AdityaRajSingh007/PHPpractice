<html>
    <form action="17_postvariable.php" method="POST">
        <input type="password" name="password">
        <input type="submit" value="Click Here">
        </form>
</html>
<?php
$password  = $_POST['password'];
echo "Thanks For Your Password".$password;
?>