<?php

require_once "conexion.php";

class CategoriasModelo
{

    static public function mdlListarCategorias()
    {

        $stmt = Conexion::conectar()->prepare("SELECT  id_categoria,
                                                        nombre_categoria,
                                                        aplica_peso as medida,
                                                        date(fecha_creacion_categoria) as fecha_creacion_categoria,
                                                        fecha_actualizacion_categoria,
                                                        '' as opciones
                                                FROM categorias c 
                                            order BY nombre_categoria asc");

        $stmt->execute();

        return $stmt->fetchAll();
    }
    static public function mdlGuardarCategoria($accion, $idCategoria, $categoria, $medida)
    {
        $date = null;


        if ($accion > 0) { //REGISTRAR
            $date = date("Y-m-d H:i:s");
            $stmt = Conexion::conectar()->prepare("INSERT INTO categorias(nombre_categoria,aplica_peso,fecha_actualizacion_categoria) 
            VALUES(:categoria,:medida,:fecha_actualizacion_categoria)");

            $stmt->bindParam(":categoria", $categoria, PDO::PARAM_STR);
            $stmt->bindParam(":medida", $medida, PDO::PARAM_STR);
            $stmt->bindParam(":fecha_actualizacion_categoria", $date, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $resultado = "Se registró Categoría Correctamente";
            } else {
                $resultado = "Error al registrar Categoría";
            }
        } else { //EDITAR
            $date = date("Y-m-d H:i:s");
            $stmt = Conexion::conectar()->prepare("UPDATE categorias SET 
            nombre_categoria = :categoria,
            aplica_peso = :medida,
            fecha_actualizacion_categoria = :fecha_actualizacion_categoria
            WHERE id_categoria = :idCategoria");

            $stmt->bindParam(":idCategoria", $idCategoria, PDO::PARAM_STR);
            $stmt->bindParam(":categoria", $categoria, PDO::PARAM_STR);
            $stmt->bindParam(":medida", $medida, PDO::PARAM_STR);
            $stmt->bindParam(":fecha_actualizacion_categoria", $date, PDO::PARAM_STR);


            if ($stmt->execute()) {
                $resultado = "Se actualizó Categoría Correctamente.";
            } else {
                $resultado = "Error al actualizar la Categoría";
            }
        }

        return $resultado;


        $stmt = null;
    }

    static public function mdlEliminarCategoria($idCategoria)
    {

        $stmt = Conexion::conectar()->prepare("DELETE FROM categorias WHERE id_categoria=:id_categoria");

        $stmt->bindParam(":id_categoria", $idCategoria, PDO::PARAM_STR);

        if ($stmt->execute()) {
            $resultado = "Se eliminó Categoría Correctamente.";
        } else {
            $resultado = "Error al eliminar la Categoría";
        }

        return $resultado;


        $stmt = null;
    }
}
