<?php
class Cliente{
    private $nombre;
    private $apellido;
    private $estado;
    private $tipoDoc;
    private $numDoc;
public function __construct($nombre,$apellido,$estado,$tipoDoc,$numDoc){
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->estado=$estado;
    $this->tipoDoc=$tipoDoc;
    $this->numDoc=$numDoc;
}
public function getNombre(){
    return $this->nombre;
}
public function getApellido(){
    return $this->apellido;
}
public function getEstado(){
    return $this->estado;
}
public function getTipoDoc(){
    return $this->tipoDoc;
}
public function getNumDoc(){
    return $this->numDoc;
}
public function setNombre($nombre){
    $this->nombre=$nombre;
}
public function setApellido($apellido){
    $this->apellido=$apellido;
}
public function setEsatdo($estado){
    $this->estado=$estado;
}
public function setTipoDoc($tipoDoc){
    $this->tipoDoc=$tipoDoc;
}
public function setNumDoc($numDoc){
    $this->numDoc=$numDoc;
}
 public function registrarCompra($clientes){
    for ($i=0; $i <count($clientes); $i++) { 
        $clientes[$i];
        if ($clientes["estado"] == false){
            $compra= false;
        }else{
            $compra =true;
        }
    }
    return $compra;
  
 }
public function __toString(){
    $cliente="   INFORMACIÓN DEL CLIENTE   \n". 
    "Nombre: ".$this->getNombre() ."\n". 
    "Apellido: ".$this->getApellido()."\n". 
    "Estado: ".$this->getEstado()."\n". 
    "Tipo y Numero de Documento:".$this->getTipoDoc()." ".
    $this->getNumDoc();
    return $cliente;
}
}

?>
