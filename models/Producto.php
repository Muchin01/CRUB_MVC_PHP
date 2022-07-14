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

        public function insert_producto($prod){
            $connectar = parent::connection();
            parent::set_names();
            $sql = "INSERT INTO tm_producto (producto_id, prod,fecha_creacion, fecha_modificacion, fecha_eliminacion,estado) 
                    values(NULL,?, 'MONITOR',NOW(),NULL,NULL,1);";
            $sql = $connectar->prepare($sql);
            $sql->bindValue(1,$prod);
            $sql->execute();
            return $result=$sql->fetchAll();
        }

        public function update_producto($prod,$prod_id){
            $connectar = parent::connection();
            parent::set_names();
            $sql = "UPDATE tm_producto SET $prod =?, fecha_modificacion=NOW() WHERE producto_id = ?";
            $sql = $connectar->prepare($sql);
            $sql->bindValue(1,$prod);
            $sql->bindValue(1,$prod_id);
            $sql->execute();
            return $result=$sql->fetchAll();
        }



    }
