<?php
    //model 1

    $age = array(" Peter "=> " 35", " Ben "=>"37", " Joe "=>"43");

    //print_r($age);

    //echo "Umur dari Peter Adalah".$age[ "Peter"];
    foreach($age as $p => $u){
        echo $p." umurnya ".$u;

        echo "<br>";

    }