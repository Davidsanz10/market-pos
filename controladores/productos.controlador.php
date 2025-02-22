<?php 
require_once ("../modelos/productos.modelo.php");
class ProductoControlador {
    static public function crtCargaMasivaProductos($fileProductos){
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        return $respuesta;
    }
    static public function crtListarProductos(){
        $productos = ProductosModelo::mdlListarProducto();
        return $productos;
    }
    static public function ctrRegistrarProducto($codigo_producto, $id_categoria_producto,$descripcion_producto,$precio_compra_producto,
                                                $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock_producto,$ventas_producto){

        $registroProducto = ProductosModelo::mdlRegistrarProducto($codigo_producto, $id_categoria_producto,$descripcion_producto,$precio_compra_producto,
                                        $precio_venta_producto,$utilidad,$stock_producto,$minimo_stock_producto,$ventas_producto);

        return $registroProducto;
    }
    static public function ctrActualizarStock($table,$data,$id,$nameId){
        $respuesta = ProductosModelo::mdlActualizarStock($table,$data,$id,$nameId);
        return $respuesta;
    }
}