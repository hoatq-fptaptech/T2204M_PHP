<?php
 $x = 10;
 $x = "hello";
 $y = 20;
 $z = $y + 10;
 $x = $x.$y;// hello20
 $t = true;

 echo $x;
 echo $y;

 if($t == true){
     echo "T is True";
 }else{
     echo "T is False";
 }
for($i=0;$i<10;$i++){
    echo "<h2>i=".$i."</h2>";
}
$arr = [];// array
$arr[0] = 50;
$arr[] = 125;
$arr[] = 25;
$arr[] = 225;
$arr[] = 12;
$arr[] = "world";
foreach ($arr as $item){
    // $item <=> $arr[i]
}
foreach ($arr as $key=>$item){
    // $item <=> $arr[i]
    echo "<h3>key: $key = value: $item</h3>";
}
$sv = [];
$sv["name"] = "Nguyen Van An";
$sv["age"] = 18;
$sv["address"] = "So 8 Ton That Thuyet";
echo $sv["name"];
echo $sv["age"];

foreach ($sv as $key=>$value){
    echo "key: $key = value: $value";
}

function tinhTong($a,$b){
    //return $a+$b;
    echo $a+$b;
}
tinhTong(5,7);
