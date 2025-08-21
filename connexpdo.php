<?php 
define("HOST","localhost");
define("USER","root");
define("PASS","");


function connex_pdo( $dbname){
$dsn="mysql:host=".HOST.";dbname=".$dbname;
$root=USER;
$pass=PASS;
$bdd=new PDO($dsn, $root, $pass);
return $bdd;
}
