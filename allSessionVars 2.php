
<?php
session_start();
include "functions.php";
foreach($_SESSION as $k=>$v){
	echo $k." : ".$v." <br>";
}
?>