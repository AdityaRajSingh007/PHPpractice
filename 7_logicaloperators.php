<?php
$username = "Aditya";
$password = "abc";
if($username && $password){
    echo "OK";
} 
else{
    echo "Field Missing";
}
if($username || $password){
    echo "at least one field is filled";
}
else{
    echo "nothing is filled";
}
?>