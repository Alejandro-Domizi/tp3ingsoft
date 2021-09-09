<!-- Subir un repositorio git a Github con un programa sencillo en PHP (cada estudiante debe inventar una consigna sencilla, un programa que tenga entre 10 y 50 líneas de código aproximadamente).

Dicho repositorio debe tener al menos 3 commits -->

<!-- Primer commit: La “consigna” (el objetivo) del programa escrita como comentario. -->

<!-- Segundo commit: El programa sin concluir, “a mitad de camino”.  -->

<!-- Commits subsiguientes: Todos los commits intermedios que hagan falta. -->

<!-- Último commit: El programa terminado -->

<?php

/*se propone que el programa a partir del ingreso del valor de conversion, 
(que seria el valor en dolares de un 1 peso argentino en el momento),
luego se pedira en el recudro (Pesos) el valor de la cantidad numerica de pesos argentinos
que se requiera convertir a dolares, el programa dira cuanto es el equivalente en dolares
rellenando el cuadro (Dolares). 
*/

// valor de conversión
if(isset($_POST["conversion"]) && (is_numeric($_POST["conversion"]) || is_numeric(str_replace(",",".",$_POST["conversion"]))))
{
    $conversion=str_replace(",",".",$_POST["conversion"]);
}else{
    $conversion=1.36;
}
 
// valor a convertir
if(isset($_POST["aconvertir"]) && (is_numeric($_POST["aconvertir"]) || is_numeric(str_replace(",",".",$_POST["aconvertir"]))))
{
    $aconvertir=str_replace(",",".",$_POST["aconvertir"]);
}else{
    $aconvertir=0;
}
 
// calculo
$resultado=$conversion*$aconvertir;
?>