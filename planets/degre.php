<?php

function convert($val,$indice){
    if(strTolower($indice)=="f"){
        return($val." degrés Farenheit = ".number_format((($val-32)/1.8),2)." degrés Celsius");
    }
    if(strTolower($indice)=="c"){
        return($val." degrés Celsius = ".number_format((($val*1.8)+32),2)." degrés Farenheit");
    }
    if(strTolower($indice)=="m"){
        return($val." Miles = ".number_format(($val*1.609),2)." Kilometres");
    }
    if(strTolower($indice)=="k"){
        return($val." Kilometres = ".number_format(($val*0.6215),2)." Miles");
    }
}


echo convert(37.2,"F")."<br>";
echo convert(8,"c")."<br>";
echo convert(50,"M")."<br>";
echo convert(80,"k")."<br>";

