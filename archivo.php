gabriela lentino- primer commit
<!DOCTYPE html>
<html>
<body>

<?php


$frutas = array("banana","manzana","peras","uvas");
echo "<br>";
echo $frutas[0];
echo "<br>";
echo $frutas[2]. "<br/>";
print_r($frutas). "<br/>";

echo count($frutas). " elementos". "<br>";
for($i=0; $i<count($frutas); $i++){
    echo $frutas[$i] . "<br/>";
} 
$edades= array("Marcos" =>34, "Juan"=>25,"Tania"=>23,"Maria"=>22);

print_r($edades);
echo "<br>";
echo $edades["Tania"]."<br/>";
foreach($edades as $key => $Value) {
    echo $key ." tiene el valor de ". $Value."<br/>";

}
//arreglos indexados se accede al valor mediante un indice
$ejemploind = array( "elemento 1", "elemento 2" ,"elemento 3");

 echo $ejemploind [0];
 echo $ejemploind [1];
 echo $ejemploind [2]."<br/>";
foreach ($ejemploind  as  $key =>  $Value) {
echo "indice: $key  valor:  $Value";
}

for ($i = 0; $i > count($ejemploind); $i++) 
echo "indice: $i valor: $ejemploind[$i]";

//arreglos asociativos se accede alvalor mediante una clave
$asocia = array( "pedro" => " arg", " juan" =>" uru", " maria"=> " bra", " sonia"=> " chi" ) ;
echo "<br/>". $asocia["pedro"];
echo "<br>";
foreach ($asocia  as  $key =>  $Value) echo "<br>";
    echo "$key: $Value";

//uso de foreach
echo "<br>";

$meses= array("enero", " febrero","marzo", " abril"," mayo"," junio"," julio"," agosto"," septiembre"," octubre"," noviembre"," diciembre");
echo $meses[3];//esto es sin foreach, necesito una linea de codigo por cada mes que quiero mostrar
echo "<br>";
foreach($meses as $mes) {
    //aparece todo en una linea
echo "<li>". $mes. "</li>";
//aparece un listado, asi con una sola linea hicimos 12

}

    
?>

</body>
</html>
