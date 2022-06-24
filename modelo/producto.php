<?php

class Producto
{
    public $id;
    public $nombre;
    public $precio;
    public $stock;
    public $tipoproducto;

    public function MostrarDatos()
    {
        echo 'Id Producto: ' . $this->id . '<hr>';
        echo 'Nombre: ' . $this->nombre . '<hr>';
        echo 'Precio: ' . $this->precio . '<hr>';
        echo 'Stock: ' . $this->stock . '<hr>';
        echo 'Id Tipo de Producto: ' . $this->tipoproducto->id . '<hr>';
        echo 'Descripcion: ' . $this->tipoproducto->descripcion . '<hr>';
    }
}
