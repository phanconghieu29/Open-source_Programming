<?php
$m=[];
$r=['id'=>1, 'name'=> 'Dog', 'img'=>'h1.jpg'];
$m[]=$r;
echo '<pre>';

$r=['id'=>2, 'name'=> 'Cat', 'img'=>'h2.jpg'];
$m[]=$r;

$r=['id'=>3, 'name'=> 'Rabbit', 'img'=>'h3.jpg'];
$m[]=$r;
print_r($m);
$x = $m[1]['name']; echo $x;
$a = $m; $y = $a['id']; echo "<br>y=$y<hr>";

$m2 = [
    ['id'=>1, 'name'=> 'Dog', 'img'=>'h1.jpg'],
    ['id'=>2, 'name'=> 'Cat', 'img'=>'h2.jpg'],
    ['id'=>3, 'name'=> 'Rabbit', 'img'=>'h3.jpg']
];

print_r($m2);