<?php
    
    class Categoria{

        private $id;
        private $nombre;
        private $db;

        public function __construct(){
            $this->db = Database::connect();
        }

        //generar get y set en http://mikeangstadt.name/projects/getter-setter-gen/
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNombre(){
            return $this->db->real_escape_string($this->nombre);
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getAll(){
            $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id ASC");
            return $categorias;
        }

        public function getOne(){
            $categoria = $this->db->query("SELECT * FROM categorias WHERE id= {$this->getId()}");
            return $categoria->fetch_object();
        }

        public function save(){
            $sql = "INSERT INTO categorias VALUES(null, '{$this->getNombre()}')";
            $save = $this->db->query($sql);

            $result = false;
            if ($save) {
                $result = true;
            }
            return $result;
        }



    }    



?>