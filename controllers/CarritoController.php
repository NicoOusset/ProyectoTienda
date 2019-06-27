<?php

    require_once 'models/producto.php';

    class carritoController{

        public function index(){
            if(isset($_SESSION['carrito'])){
                $carrito = $_SESSION['carrito'];
            }
           require_once 'views/carrito/ver.php';
        }

        public function add(){
            if(isset($_GET['id'])){
                $producto_id = $_GET['id'];
            }else {
                header('Location:'.base_url);
            }    

            if(isset($_SESSION['carrito'])){
                
                $counter = 0;
                foreach ($_SESSION['carrito'] as $indice => $elemento) {
                    if($elemento['id_producto']==$producto_id){
                        $_SESSION['carrito'][$indice]['unidades']++; 
                        $counter++;
                    }
                }        

            }
            
            if(!isset($counter) || $counter==0 ){
                $producto = new Producto();
                $producto->setId($producto_id);
                $pro = $producto->getOne();

                if(is_object($pro)){
                    $_SESSION['carrito'][] = array(
                        "id_producto" => $pro->id,
                        "precio" => $pro->precio,
                        "unidades" => 1,
                        "producto" => $pro
                    );        
                }                
            }
            header('Location:'.base_url.'carrito/index');
        }

        public function remove(){
            
        }

        public function delete_all(){
            unset($_SESSION['carrito']);
            header("Location:".base_url);
        }


    }

?>