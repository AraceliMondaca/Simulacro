<?php 
include_once 'Cliente.php';
include_once 'Moto.php';
include_once 'Venta.php';
include_once 'Empresa.php';

$objCliente1=new Cliente("tom","herry",true,"dni",34567890);
$objCliente2=new Cliente("ester","yes",false,"pasaporte",3456789432);
$colCientes=[$objCliente1,$objCliente2];

$objMoto1=new Moto(11,2230000,2022,"benelli imperiali 400",85,true);
$objMoto2=new Moto(12,584000,2021,"zanella Zr 150 Ohc",70,true);
$objMoto3=new Moto(13,999900,2023,"zanella patagonian eagle 250",55,false);
$colMotos=[$objMoto1,$objMoto2,$objMoto3];

$objVenta1=new Venta(233,"10-01-2024",$objCliente1,$objMoto2,150000);
$objVenta2=new Venta(145,"08-04-2024",$objCliente2,$objMoto1,250000);
$colVenta=[$objVenta1,$objVenta2];
$Empresa=new Empresa("Alta Gama","Av Argentina 123",$colCientes,$colMotos,$colVenta);

$colCodigoMoto=[11,12,13];
echo $Empresa->registrarVenta($colCodigoMoto,$objCliente2);
$colCodigoMoto=[0];
echo $Empresa->registrarVenta($colCodigoMoto,$objCliente2);
$colCodigoMoto=[2];
echo $Empresa->registrarVenta($colCodigoMoto,$objCliente2);
echo $Empresa->retornarVentasXCliente("dni",34567890);
echo $Empresa->retornarVentasXCliente("pasaporte",3456789432);
echo $Empresa;
?>
