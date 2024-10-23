<?php
/*programa que almacena los precios de 5 articulos en un arreglo llamado $arrayPrecios, posterior mente por medio de un ciclo calcula el IVA en otro arreglo llamado $arrayIVA y a su ves almacena la suma de cada precioy su IVA*/
 
$ArrayPrecios= [500,400,200,700,100];
$Longitud=count($ArrayPrecios);
//$Arrayarticulos= [1,1,1,1,1];
$ArrayIVA =[16,16,16,16,16];
$Longitud=count($ArrayIVA);
$ArrayDescuentos= [10,20,30,40,50];
$Longitud=count($ArrayDescuentos);
//$Longitud=count($Arrayarticulos);


echo "ARREGLO PRECIOS <br>";
for ($i=0;$i<$Longitud;$i++){
$ArraySuma[$i]= $ArrayPrecios[$i] ;
echo $ArraySuma[$i];
echo "<br>";}

echo "<br> Arreglo IVA <br>";
for ($i=0;$i<$Longitud;$i++){
$ArrayResta[$i]= $ArrayPrecios[$i] / $ArrayIVA[$i];
echo $ArrayResta[$i] ;
   echo "<br>";}

echo "<br> Arreglo subtotal <br>";
for ($i=0;$i<$Longitud;$i++){
$ArrayMulti[$i]= $ArraySuma[$i] + $ArrayResta[$i];
 echo $ArrayMulti[$i] ;
   echo "<br>";}

echo "<br> Arreglo descuentos <br>";
for ($i=0;$i<$Longitud;$i++){
$ArrayDivi[$i]= $ArraySuma[$i] / $ArrayDescuentos[$i];  
 echo $ArrayDivi[$i];
   echo "<br>";}

   echo "<br> Arreglo Total <br>";
for ($i=0;$i<$Longitud;$i++){
$ArrayDivi[$i]= $ArraySuma[$i] + $ArrayResta[$i];  
 echo $ArrayDivi[$i];
   echo "<br>";}
?>
