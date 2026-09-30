<?php
namespace Cafeteria\Modelos;

use Cafeteria\Modelos\Producto;
use Cafeteria\Enums\Tamano;

class Bebida extends Producto {

	public function __construct(string $nombre, float $precioBase, public string $tamano)
    {
        return parent::__construct($nombre, $precioBase);
    }

    public function recargo(): float {
        return Tamano::from($this->tamano)->recargo();
    }

    public function precioFinal(int $cantidad): float {
        return $this->precioBase + ($this->recargo() * $cantidad);
    }
}

?>