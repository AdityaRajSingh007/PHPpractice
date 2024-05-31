<?php
$name = "Aditya";
if($name == "Alex"){
    echo "Hi, Alex";
}
else{
?>
You are not Alex? Please Type your name:<br/>
<form action="19_commondisplayphp.php" method="POST">
    <input type="text" name="input">
    <input type="submit" value="Click Here">
</form>
<?php
}
$input = $_POST["input"];
if($input){
echo "Hi, ".$input;
}
?>