<?php
$num = 11;
$name = "Alex";
do{
    echo $num."<br>";
    $num++;
    if($num >= 10){
        $name = "Billy";
    }
}
while($name == "Alex");
?>