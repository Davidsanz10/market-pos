<?php
require_once ("../modelos/dashboard.modelo.php");
class DashboardControlador{
    static public function ctrGetDatosDashboard(){
        $datos = DashboardModelo::mdlGetDatosDashboard();
        return $datos;
    }
    static public function ctrGetVentasMesActual(){
        $ventasMesActual = DashboardModelo::mdlGetVentasMesActual();
        return $ventasMesActual;
    }
    static public function ctrProductosMAsVendidos(){
        $productosMAsVendidos = DashboardModelo::mdlProductosMAsVendido();
        return $productosMAsVendidos;
    }
    static public function ctrProductosPocoStock(){
        $productosPocoStock = DashboardModelo::mdlProductosPocoStock();
        return $productosPocoStock;
    }
}