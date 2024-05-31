<?php
$exp = time() + 86400;
setcookie("name", "Aditya", $exp);
setcookie("age", "19", $exp);
echo $_COOKIE["name"];
echo $_COOKIE["age"];
echo "<br>My name is ".$_COOKIE["name"]." and my age is ".$_COOKIE["age"]."<br>";
print_r($_COOKIE);
if(isset($_COOKIE["name"])){ //checks if a cookie is set or not
    echo "Name is Set";
}
else{
    echo "Name Cookie is not set";
}
?>