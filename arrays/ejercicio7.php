<?php
$numeros = array();
$count = 0;
for($i=0; $i<10;$i++){
    array_push($numeros, rand(1,10));
}
foreach($numeros as $value){
    if($value==2){
        $count = $count+1;
    }
}
echo "<h3>NUMERO DE VECES ENCONTRADO EL 2: $count veces";
?>