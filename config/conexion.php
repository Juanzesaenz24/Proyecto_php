<?php
session_start();
    class conectar{
        protected $dbh;
        protected function conexion(){
            try{
                $conectar=$this->dbh=new PDO("mysql:local=localhost;dbname=proyecto_php","root","");
                return $conectar;
            }catch(Exeption $e){
                print "Conexión fallida". $e ->getMessage()."<br>";
                die();
            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        /*TODO: Ruta principal del proyecto */
        public static function ruta(){
            //QA
            return "http://localhost/proyecto_php/";
        }
    }