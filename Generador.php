<?php
 function ContarDivisores($num){
 $divisor = 0;
 for($i=1;$i<=$num;$i++){
 if($num % $i == 0){
 $divisor +=1;
 }
 }
 return $divisor;
 }
 
 function SumaDivisores($num){
 $suma = 0;
 for($i=1;$i<$num;$i++){
 if($num % $i == 0){
 $suma += $i;
 }
 }
 return $suma;
 }
 
 function Generador($tope){
 $cadena = "";
 for($i=1;$i<=$tope;$i++){
 if(ContarDivisores($i) == 2){
 $cadena = $cadena.$i.",";
 }
 }
 $cadena = substr($cadena,0,-1);
 return $cadena;
 } 
 
 function GeneradorPerfecto($tope){
 $cadena = "";
 for($i=1;$i<=$tope;$i++){
 if(SumaDivisores($i) == $i){
 $cadena = $cadena.$i.",";
 }
 }
 $cadena = substr($cadena,0,-1);
 return $cadena;
 }
 
?>