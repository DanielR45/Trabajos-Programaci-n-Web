<?php 
//paso 1:capturar variables
$Tipo = $POST ["Tipo"];
$Cantidad = $POST ["Cantidad"]
$Llevar = $POST ["Llevar"]
$Chispitas = $POST ["Chispitas"]

if ($Tipo == 1)
{
    $Valor = 6000;
}
if ($Tipo == 2)
{
    $Valor = 10000;
}
if ($Tipo == 3)
{
    $Valor = 20000;
}
$subtotal = $Cantidad*$Valor

if ($Chispitas == 1)
{
    $subtotal = $subtotal + (2000*$Cantidad);
}
if ($Llevar == 1)
{
    $subtotal = $subtotal + (1000*$Cantidad);
}

echo "Total a pagar es : ". $subtotal;


?>