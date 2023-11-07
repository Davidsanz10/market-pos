<?php
require_once ("conexion.php");
class DashboardModelo{
    static function mdlGetDatosDashboard(){
        $stmt = Conexion::conectar()->prepare ('call prc_ObtenerDatosDashboard()');    
        $stmt -> execute();
        return $stmt ->fetchAll(PDO::FETCH_OBJ);
    }
    static public function mdlGetVentasMesActual(){
        $stmt = Conexion::conectar()->prepare ('call prc_ObtenerVentasMesActual()');    
        $stmt -> execute();
        return $stmt ->fetchAll(PDO::FETCH_OBJ);
    }
    static public function mdlProductosMAsVendido(){
        $stmt = Conexion::conectar()->prepare ('call prc_ListarProductosMasVendidos()');    
        $stmt -> execute();
        return $stmt ->fetchAll(PDO::FETCH_OBJ);
    }
    static public function mdlProductosPocoStock(){
        $stmt = Conexion::conectar()->prepare ('call prc_ListarProductosPocoStock()');    
        $stmt -> execute();
        return $stmt ->fetchAll(PDO::FETCH_OBJ);
    }
}