<?php
const HOST = 'localhost';//hang so host
define('DB', 'bookstore');//hang so db
echo "Hang so host = " . HOST; //. de noi chuoi

//isset: kiem tra bien 
$n = 5;
if(isset($n)) echo "Bien n da duoc tao = " . $n;
else echo "Chua co bien n";

unset($n);//xoa bien n
if(isset($n)) echo "Bien n da duoc tao = " . $n;
else echo "Chua co bien n";

$n = 5;
echo '<hr>';
var_dump($n); //kiem tra kieu du lieu
print_r($n);