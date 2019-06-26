<?php
    require_once 'models/categoria.php';
    require_once 'models/producto.php';

    class categoriaController{

        public function index(){
            Utils::isAdmin();
            $categoria = new Categoria();
            $categorias = $categoria->getAll();
            require_once 'views/categoria/index.php';
        }

        public function crear(){
            Utils::isAdmin();
            require_once 'views/categoria/crear.php';
        }

        public function save(){

           Utils::isAdmin();

           if(isset($_POST) && isset($_POST['nombre']) ){
                $categoria = new Categoria();
                $categoria->setNombre($_POST['nombre']);
                $categoria->save();
           }
          
           
           header("Location:".base_url."categoria/index");
        }

        public function ver(){
            if(isset($_GET['id'])){
                $cat = new Categoria();
                $cat->setId($_GET['id']);
                $categoria = $cat->getOne();
                $producto = new Producto();
                $productos= $producto->getProdCat($_GET['id']);

            }
            require_once 'views/categoria/ver.php';
        }

    }

?>