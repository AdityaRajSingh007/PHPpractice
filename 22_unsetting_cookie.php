<?php
$exp_unset = time() - 86400;
setcookie("name", "", $exp_unset); //unsetting a cookie
if(isset($_COOKIE[ "name" ])) {
    echo 'Cookie named "name" is set!<br>';
} else {
    echo 'Cookie named "name" is not set.<br>';
}
?>