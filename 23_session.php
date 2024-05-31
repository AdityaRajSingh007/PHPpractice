<?php
session_start();
$_SESSION["name"] = "Aditya";
echo $_SESSION["name"];
//to unset a session their are two ways unset and session_destroy()
unset( $_SESSION['name'] ); //this is used to delete a particular session
session_destroy(); //this will delete all sessions
?>