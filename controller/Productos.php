<?php

require_once("../config/connection.php");
require_once("../models/Producto.php");

$producto = new Producto();

switch ($_GET["op"]) {
    case "listar":
        $datos = $producto->get_producto();
        $data = array();

        break;
}
