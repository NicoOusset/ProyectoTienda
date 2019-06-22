<?php

    class Usuario{

        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $rol;
        private $imagen;
        private $db;

        public function __construct(){
            $this->db = Database::connect();
        }

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

        public function getApellidos(){
            return $this->db->real_escape_string($this->apellidos);
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }

        public function getEmail(){
            return $this->db->real_escape_string($this->email);
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getPassword(){
            return $this->db->real_escape_string($this->password);
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getRol(){
            return $this->rol;
        }

        public function setRol($rol){
            $this->rol = $rol;
        }

        public function getImagen(){
            return $this->imagen;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }

        public function save(){
            $sql = "INSERT INTO usuarios VALUES(null, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', null)";
            $save = $this->db->query($sql);

            $result = false;
            if ($save) {
                $result = true;
            }
            return $result;
        }

        public function login($email, $password){
            //comprobar si existe el usuario
            $result = false;    
            $sql = "SELECT * FROM usuarios WHERE email = '$email'";
            $login = $this->db->query($sql);

            if($login && $login->num_rows==1){
                $usuario = $login->fetch_object();

                $pass = $usuario->password;

                if($password == $pass){
                    $result =$usuario;
                }
            }
            return $result;
        }

    }

?>