<?php
    session_start();

    require_once 'autoload.php';
    require_once 'config/db.php';
    require_once 'helpers/utils.php';
    require_once 'config/parametros.php';
    require_once 'views/layout/hearder.php';
    require_once 'views/layout/sidebar.php';
    
    function show_error(){
        $error = new errorController();
        $error->index();
    }

    if(isset($_GET['controller'])){
        $nombre_controlador = $_GET['controller'].'Controller';
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $nombre_controlador = controller_default;
    }else{
        show_error();
        exit();
    }

    if (class_exists($nombre_controlador)) {
        $controlador = new $nombre_controlador();
        
        if(isset($_GET['action']) && method_exists( $controlador, $_GET['action'] )){
            $accion=$_GET['action'];
            $controlador->$accion();
        }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
            $accion=action_default;
            $controlador->$accion();
        }else {
            show_error();
        }
    }else {
        show_error();
    }

    require_once 'views/layout/footer.php';

?>