<?php

require_once "Modelo/tipoproducto.php";
require_once "Modelo/producto.php";

$tp = new TipoProducto();
$tp->id = 2;
$tp->descripcion = 'Galletitas';

$p = new Producto();
$p->id = 1;
$p->nombre = 'Merenguitas';
$p->precio = 1000;
$p->stock = 10;
$p->tipoproducto = $tp;

$p->MostrarDatos();
