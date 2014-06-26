<?php
require_once("lessc.inc.php");
$input = "/var/www/leroy-restaurant.ru/public_html/asset/bootstrap222/bootstrap.less";
$less = new lessc;
$less->setFormatter("compressed");
try{
header("Content-Type: text/css");
echo $less->compileFile($input);
//print $less->parse();
} catch (exception $ex){
print "LESSC FEHLER:";
print $ex->getMessage();
}
?>