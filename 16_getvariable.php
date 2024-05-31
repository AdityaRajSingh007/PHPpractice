<html>
    <form action="16_getvariable.php" method="GET">
        <label for="myname">Name : </label><br>
        <input type="text" name="myname" placeholder="Name">
        <input type="submit" value="Click Here">
    </form>
</html>
<?php
$name = $_GET["myname"];
if($name){
    echo "Hello, $name";
}
echo time();
?>