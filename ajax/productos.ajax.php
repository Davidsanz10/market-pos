<?php
require_once("../controladores/productos.controlador.php");
require_once("../modelos/productos.modelo.php");
require_once("../vendor/autoload.php");
class ajaxProductos
{
    public $fileProductos;
    public $codigo_producto;
    public $id_categoria_producto;
    public $descripcion_producto;
    public $precio_compra_producto;
    public $precio_venta_producto;
    public $utilidad;
    public $stock_producto;
    public $minimo_stock_producto;
    public $ventas_producto;

    public function ajaxCargaMasivaProductos()
    {
        $respuesta = ProductoControlador::crtCargaMasivaProductos($this->fileProductos);
        echo json_encode($respuesta);
    }
    public function ajaxListarProductos()
    {
        $productos = ProductoControlador::crtListarProductos();
        echo json_encode($productos);
    }

    public function ajaxRegistrarProducto()
    {

        $producto = ProductoControlador::ctrRegistrarProducto(
            $this->codigo_producto,
            $this->id_categoria_producto,
            $this->descripcion_producto,
            $this->precio_compra_producto,
            $this->precio_venta_producto,
            $this->utilidad,
            $this->stock_producto,
            $this->minimo_stock_producto,
            $this->ventas_producto
        );

        echo json_encode($producto);
    }
    public function ajaxActualizarStock($data)
    {
        $table ="productos";
        $id= $_POST["codigo_producto"];
        $nameId = "codigo_producto";
        $respuesta = ProductoControlador::ctrActualizarStock($table,$data,$id,$nameId);
        echo json_encode($respuesta);
    }
}

if (isset($_POST['accion']) && $_POST['accion'] == 1) { // parametro para listar productos
    $productos = new ajaxProductos();
    $productos->ajaxListarProductos();
} else if (isset($_POST['accion']) && $_POST['accion'] == 2) { // parametro para registrar productos

    $registrarProducto = new AjaxProductos();
    $registrarProducto->codigo_producto = $_POST["codigo_producto"];
    $registrarProducto->id_categoria_producto = $_POST["id_categoria_producto"];
    $registrarProducto->descripcion_producto = $_POST["descripcion_producto"];
    $registrarProducto->precio_compra_producto = $_POST["precio_compra_producto"];
    $registrarProducto->precio_venta_producto = $_POST["precio_venta_producto"];
    $registrarProducto->utilidad = $_POST["utilidad"];
    $registrarProducto->stock_producto = $_POST["stock_producto"];
    $registrarProducto->minimo_stock_producto = $_POST["minimo_stock_producto"];
    $registrarProducto->ventas_producto = $_POST["ventas_producto"];
    $registrarProducto->ajaxRegistrarProducto();
} else if (isset($_POST['accion']) && $_POST['accion'] == 3) {
    $actualizarStock = new ajaxProductos();
    $data = array(
        "stock_producto" => $_POST["nuevoStock"],
    );
    $actualizarStock->ajaxActualizarStock($data);
} else if (isset($_FILES)) {
    $archivo_producto = new ajaxProductos();
    $archivo_producto->fileProductos = $_FILES['fileProductos'];
    $archivo_producto->ajaxCargaMasivaProductos();
}
