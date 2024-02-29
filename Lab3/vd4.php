<pre><?php
$m1 = array();
$m2 = array(2,4);
$m3 = [];
$m4 = [2, 4];
print_r ($m4);
var_dump($m4);
$m5 = array('x'=>10, 'y'=>'abc');
$m6 = ['x'=>10, 'y'=>'abc'];

echo '<hr>';
if(isset($m6['z']))echo 'Gia tri phan tu z la: '.$m6['z'];
else echo 'chua co phan tu nay';

$m6['z'] = 100;
echo '<hr>';
var_dump($m6);
unset($m6['y']);
$m7 = [];
$m7[] = 7;
$m7[] = 8;
print_r($m7);
$m8 =[];
for($i = 1; $i <= 10; $i++) $m8[] = rand(1,100);
print_r($m8);