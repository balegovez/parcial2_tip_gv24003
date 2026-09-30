<?php
namespace Cafeteria\Modelos;
use Cafeteria\Modelos\Producto;

class Postre extends Producto {
    public function __construct(string $nombre, float $precioBase){
        parent::__construct($nombre, $precioBase);
    }

    public function precioFinal(int $cantidad): float {
        
        if($cantidad >= 3){
            return ($this->precioBase * $cantidad) * 0.10;
        }
        else {
            return $this->precioBase * $cantidad;
        }
    }
}
?>