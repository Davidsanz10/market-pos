<?php

class VentasControlador{

    static public function ctrObtenerNroBoleta(){
        
        $nroBoleta = VentasModelo::mdlObtenerNroBoleta();

        return $nroBoleta;

    }

    static public function ctrRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$boleta_igv,$boleta_subtotal){
        
        $productos = VentasModelo::mdlRegistrarVenta($datos,$nro_boleta,$total_venta,$descripcion_venta,$boleta_igv,$boleta_subtotal);

        return $productos;

    }

}