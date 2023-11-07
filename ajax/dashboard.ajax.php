<?php
require_once("../controladores/dashboard.controlador.php");
require_once("../modelos/conexion.php");
class AjaxDashboard
{

    public function getDatosDashboard()
    {
        $datos = DashboardControlador::ctrGetDatosDashboard();
        echo json_encode($datos);
    }
    public function getVentasMesActual()
    {
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }

    public function getproductosMAsVendidos()
    {
        $productosMAsVendidos = DashboardControlador::ctrProductosMAsVendidos();
        echo json_encode($productosMAsVendidos);
    }
    public function getProductosPocoStock()
    {
        $productosPocoStock = DashboardControlador::ctrProductosPocoStock();
        echo json_encode($productosPocoStock);
    }
}
if (isset($_POST['accion']) and $_POST['accion'] === '1') {//Ejecutar las ventas del mes, grafico de barra
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual->getVentasMesActual();
}else if (isset($_POST['accion']) and $_POST['accion'] === '2') { //Listar 10 productos mas vendiso
    $productosMAsVendidos = new AjaxDashboard();
    $productosMAsVendidos->getproductosMAsVendidos();
}else if (isset($_POST['accion']) and $_POST['accion'] === '3') { //Listar  productos poco stock
    $productosPocoStock = new AjaxDashboard();
    $productosPocoStock->getProductosPocoStock();
}  else {
    $datos = new AjaxDashboard();
    $datos->getDatosDashboard();
}
