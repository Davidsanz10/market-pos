<?php

class CategoriasControlador{

    static public function ctrListarCategorias(){
        
        $categorias = CategoriasModelo::mdlListarCategorias();

        return $categorias;

    }

    static public function ctrGuardarCategoria($accion, $idCategoria, $categoria, $medida){
        
        $guardarCategorias = CategoriasModelo::mdlGuardarCategoria($accion, $idCategoria, $categoria, $medida);

        return $guardarCategorias;

    }
    static public function ctrEliminarCategoria($idCategoria){
        
        $eliminarCategoria = CategoriasModelo::mdlEliminarCategoria($idCategoria);

        return $eliminarCategoria;

    }
}