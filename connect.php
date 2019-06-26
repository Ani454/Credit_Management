<?php

$link= mysqli_connect("localhost","root","","student") or die("Unable to connect");
if(!$link)
echo("DB is not connected".mysqli_error($$link));

?>