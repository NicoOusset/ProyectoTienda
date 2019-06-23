<?php

    require_once 'models/producto.php';

    class productoController{

        public function index(){
            
            require_once 'views/producto/destacados.php';
        }

        public function gestion(){
            Utils::isAdmin();

            $producto = new Producto();
            $productos= $producto->getAll();

            require_once 'views/producto/gestion.php';
        }

        public function crear(){
            Utils::isAdmin();
            require_once 'views/producto/crear.php';
        }

        public function save(){

            Utils::isAdmin();
 
            if(isset($_POST) && isset($_POST['categoria']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['stock']) ){

                $producto = new Producto();
                $producto->setCategoria_id($_POST['categoria']);
                $producto->setNombre($_POST['nombre']);
                $producto->setDescripcion($_POST['descripcion']);
                $producto->setPrecio($_POST['precio']);
                $producto->setStock($_POST['stock']);
                $producto->setImagen(null);

                $file = $_FILES['imagen'];
                $filename =$file['name'];
                $mimetype = $file['type'];

                if($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif'){

                    if(!is_dir('uploads/images')){
                        mkdir('uploads/images', 0777, true);
                    }

                    move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);
                    $producto->setImagen($filename);
                }

                $save = $producto->save();
                if($save){
                    $_SESSION['producto'] = "complete";
                }else {
                    $_SESSION['producto'] = "failed";
                }
            }else {
                $_SESSION['producto'] = "failed";
            }  
            header("Location:".base_url."producto/gestion");
        }

        public function editar(){
            
        }

        public function eliminar(){
            Utils::isAdmin();

            if(isset($_GET['id'])){

                $id = $_GET['id'];
                $producto = new Producto();
                $producto->setId($id);
                $delete = $producto->delete();

                if($delete){
                    $_SESSION['delete'] = "complete";
                }else {
                    $_SESSION['delete'] = "failed";
                }

            }else {
                $_SESSION['delete'] = "failed";
            } 

            header("Location:".base_url."producto/gestion");
            
        }



    }

?>