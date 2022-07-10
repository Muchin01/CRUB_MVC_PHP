<?php

    class Producto extends connected{

        public function get_producto(){
            $connectar = parent::connection();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto";
            $sql = $connectar->prepare($sql);
            $sql->execute();
            return $result=$sql->fetchAll();
        }

        public function get_producto_id($id){
            $connectar = parent::connection();
            parent::set_names();
            $sql = "SELECT * FROM tm_producto where producto_id = ?";
            $sql = $connectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $result=$sql->fetchAll();

        }

        public function delete_producto_id($id){
            $connectar = parent::connection();
            parent::set_names();
            $sql = "UPDATE tm_producto SET estado =0, fecha_eliminacion=NOW() WHERE producto_id = ?";
            $sql = $connectar->prepare($sql);
            $sql->bindValue(1,$id);
            $sql->execute();
            return $result=$sql->fetchAll();

        }




    }
