<?php

require_once "../controladores/ventas.cotrolador.php";
require_once "../modelos/ventas.modelo.php";

class AjaxVentas{

    public function ajaxObtenerNroBoleta(){

        $nroBoleta = VentasControlador::ctrObtenerNroBoleta();

        echo json_encode($nroBoleta,JSON_UNESCAPED_UNICODE);

    }

    public function ajaxRegistrarVenta($datos,$nro_boleta,$total_venta, $descripcion_venta,$boleta_igv,$boleta_subtotal ){

        $registroVenta = VentasControlador::ctrRegistrarVenta($datos,$nro_boleta,$total_venta, $descripcion_venta,$boleta_igv,$boleta_subtotal);
        echo json_encode($registroVenta,JSON_UNESCAPED_UNICODE);

    }


}

if(isset($_POST["accion"]) && $_POST["accion"] == 1){
	
	$nroBoleta = new AjaxVentas();
    $nroBoleta -> ajaxObtenerNroBoleta();
	
}else {
     
	if((isset($_POST["arr"]))){
		
		$registrar = new AjaxVentas();
		$registrar -> ajaxRegistrarVenta($_POST["arr"],$_POST['nro_boleta'],$_POST['total_venta'],$_POST['descripcion_venta'],$_POST['boleta_igv'],$_POST['boleta_subtotal']);

	}
 }
