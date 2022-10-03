<?php
        $a =1;
        $b=2;
        $c=3;
        $d = (($a*$b)/$c)*2;
        print "<table >";
        echo "<tr>";
        echo "<td>".$a."+".$b."+".$c."=".$a+$b+$c."</td>";
        echo "<td>".$d."</td>";
        echo "<td>".++$d."</td>";
        echo "</tr>";
        //2.2
        $x=10;
        $y=23;
        echo "<tr>";
        echo "<td>".$y."/".$x."=".$y/$x."</td>";
        echo "<td>".$y."*".$x."=".$y*$x."</td>";
        echo "<td>".$y."+".$x."=".$y+$x."</td>";
        echo "</tr>";
        //2.3
        $silabas = array("ja","je","ji");
        $palabras = array();
        
        $palabras[0] = $silabas[0].$silabas[1].$silabas[2];
        $palabras[1] = $silabas[0].$silabas[2].$silabas[1];
        $palabras[2] = $silabas[1].$silabas[0].$silabas[2];
        $palabras[3] = $silabas[1].$silabas[2].$silabas[0];
        $palabras[4] = $silabas[2].$silabas[0].$silabas[1];
        $palabras[5] = $silabas[2].$silabas[2].$silabas[0];

        echo "<tr>";
        $count = 0;
        foreach($palabras  as $value){
            echo "<td>$value</td>";
            $count++;
            if ($count==3){
                echo "</tr><tr>";
            }
        }
        echo "</tr>";

        print "</table>";
    ?>