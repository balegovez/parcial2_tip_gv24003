<?php
use DomainException;

class PedidoInvalidoException extends DomainException {
    public function __construct(string $message = "Pedido inválido") {
        parent::__construct($message);
    }
}
?>