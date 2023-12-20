<?php

require_once "../controladores/categorias.controlador.php";
require_once "../modelos/categorias.modelo.php";

class ajaxCategorias
{
    public $idCategoria;
    public $categoria;
    public $medida;
    public function ajaxListarCategorias()
    {

        $categorias = CategoriasControlador::ctrListarCategorias();

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }
    public function ajaxGuardarCategoria($accion)
    {
        $categorias = CategoriasControlador::ctrGuardarCategoria($accion, $this->idCategoria, $this->categoria, $this->medida);
        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }
    public function ajaxEliminarCategoria()
    {

        $categorias = CategoriasControlador::ctrEliminarCategoria($this->idCategoria);

        echo json_encode($categorias, JSON_UNESCAPED_UNICODE);
    }
}

if (isset($_POST['idCategoria']) && $_POST['idCategoria'] > 0 && isset($_POST['accion']) && $_POST['accion'] == 0) { // Editar

    $editarCategoria = new ajaxCategorias();
    $editarCategoria->idCategoria = $_POST["idCategoria"];
    $editarCategoria->categoria = $_POST["categoria"];
    $editarCategoria->medida = $_POST["medida"];
    $editarCategoria->ajaxGuardarCategoria(0);

} else if (isset($_POST['idCategoria']) && $_POST['idCategoria'] > 0 && isset($_POST['accion']) && $_POST['accion'] == 1) { //ELiminar

    $eliminarCategroia = new ajaxCategorias();
    $eliminarCategroia->idCategoria = $_POST["idCategoria"];
    $eliminarCategroia->ajaxEliminarCategoria();

} else if (isset($_POST['idCategoria']) && $_POST['idCategoria'] == 0) { // Registrar

    $registrarCategoria = new ajaxCategorias();
    $registrarCategoria->idCategoria = $_POST["idCategoria"];
    $registrarCategoria->categoria = $_POST["categoria"];
    $registrarCategoria->medida = $_POST["medida"];
    $registrarCategoria->ajaxGuardarCategoria(1);
} else {
    $categorias = new ajaxCategorias();
    $categorias->ajaxListarCategorias();
}
