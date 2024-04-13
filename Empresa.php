<?php 
class Empresa{
private $denominacion;
private $direccion;
private $colCliente;
private $colMoto;
private $colVenta;
public function __construct($denominacion,$direccion,$colCliente, $colMoto, $colVenta){
 $this->denominacion = $denominacion; 
 $this->direccion=$direccion;
 $this->colCliente = $colCliente=array($colCliente);
 $this->colMoto = $colMoto= array($colMoto);
 $this->colVenta = $colVenta_=array($colVenta);
}
public function getDenominacion(){
return $this->denominacion;
}
public function getdireccion(){
    return $this->direccion;
}
public function getColCliente(){
    return $this->colCliente;
}
public function getColMoto(){
    return $this->colMoto;
}
public function getColVenta(){
    return $this->colVenta;
}
public function setDenominacion($denominacion){
    $this->denominacion = $denominacion;
}
public function setDireccion($direccion){
    $this->direccion = $direccion;
}
public function setColCliente($colCliente){
    $this->colCliente = $colCliente;
}
public function setColMoto($colMoto){
    $this->colMoto = $colMoto;
}
public function setColVenta($colVenta){
    $this->colVenta = $colVenta;
}


public function retornarMoto($codigoMoto){
    $colmoto=null;
    $i = 0;
    $entrada = true;
    $colMoto = $this->getColMoto();
    while ($entrada && $i < count($colMoto)) {
             $moto = $colMoto[$i];
        if ($moto->getCodigo()==$codigoMoto) {
            $entrada = false;
            $colmoto= $moto;
        }
        $i++;
      
    }
        return $colmoto;
    }    




    public function registrarVenta($colCodigosMoto,$objCliente){
        $numV= count($this->getColVenta())+1;
        $fec=date("y");
        $ventaN = new Venta($numV,$fec, $objCliente, $this->getColMoto(),0 );
        $this->setColCliente($objCliente);
        $importeFinal = 0;
        $i=0;
        while ($i < count($colCodigosMoto)) {
        $codigo = $colCodigosMoto[$i];
        $moto = $this->retornarMoto($codigo);
        if ($moto && $moto->getActiva() && $objCliente->registrarCompra($objCliente)) {
            $ventaN->incorporarMoto($moto);
            $importeFinal += $moto->darPrecioVenta();
        }
        $ventaN->setPrecioFinal($importeFinal);
        $i++;
    }
        
        return $importeFinal;
    }


public function  retornarVentasXCliente($tipo,$numDoc){
    $ventaR=[];
  foreach($this->getColVenta() as $venta){
      if($venta->getTipoDoc()==$tipo && $venta->getNumDoc()==$numDoc){
        $ventaR[]=$venta;
      }
  }
    return print_r($ventaR);
}


public function __toString(){
    $datos="   INFORMACIÓN DE EMPRESA   \n". 
    "Denominación: ".$this->getDenominacion()."\n". 
    "Dirección: ".$this->getDireccion()."\n". 
    "\n".$this->getColCliente()."\n". 
    "\n".$this->getColMoto()."\n". 
    "\n".$this->getColVenta();
    return $datos;
}

}
?>
