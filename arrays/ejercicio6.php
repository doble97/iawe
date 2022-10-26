<?php
function mostrar($paises, $titulo){
    echo "<h2>$titulo</h2>";
    foreach($paises as $key=>$value){
        echo "<p>La capital de $key es $value<p>";
    }
}
$EU = array( "Italia"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Belgica"=> "Bruselas", "Dinamarca"=>"Copenhage",
"Finlandia"=>"Helsinki", "Francia" => "Paris",
"Eslovakia"=>"Bratislava", "ESlovenia"=>"Ljubljana",
"Alemania" => "Berlin", "Grecia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
"Portugal"=>"Lisboa", "España"=>"Madrid",
"Suecia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicosia", "República Checa"=>"Praga", "Estonia"=>"Tallin",
"Hungria"=>"Budapest", "Malta"=>"Valetta",
"Austria" => "Viena", "Polonia"=>"Varsovia") ;
mostrar($EU, "ARRAY NO ORDENADO");
ksort($EU);
mostrar($EU, "ARRAY ORDENADO POR PAÍS");
asort($EU);
mostrar($EU, "ARRAY ORDENADO POR CAPITAL");

?>