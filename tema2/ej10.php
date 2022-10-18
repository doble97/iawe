<?php
    function calcular_media($arr){
        $media = array_sum($arr)/ count($arr);
        return $media;
    }

$ar1 = array(4,12,-5,8,13,-9,0,3);
$ar2 = array(1,-2,3,-6,4,12,-7,-8);
$media1=calcular_media($ar1);
$media2=calcular_media($ar2);
$result1= "";
$result2="";
foreach($ar1 as $value){
    if($value>$media1){
        $result1 = $result1 .$value.":";
    }
}
$result1 = rtrim($result1, ':');
echo "<h5>Primera media $media1</h5>";
echo "<p>$result1</p>";

foreach($ar2 as $value){
    if($value>$media2){
        $result2= $result2.$value.":";
    }
}
$result2 = rtrim($result2,':');
echo "<h5>Segunda media $media2</h5>";
echo "<p>$result2</p>";

?>