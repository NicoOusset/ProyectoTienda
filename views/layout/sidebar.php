 <!-- Barra Lateral -->
<aside id="lateral">

<div id="login" class="block_aside">

    <?php if(!isset($_SESSION['identity'])): ?>

    <h3>Entrar a la Web</h3>
    <form action="<?=base_url?>usuario/login" method="post" class="form-menu">

        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="password">Contraseña:</label>
        <input type="password" name="password">
        <input type="submit" value="Enviar">
    </form>
    
    <?php else:   ?>

    <h3>Bienvenido, <?=$_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?></h3>

    <ul>
        <?php if(!isset($_SESSION['admin'])): ?>
        <li> <a href="#">Mis pedidos</a></li>

    <?php else: ?>
        <li> <a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
        <li> <a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
        <li> <a href="#">Gestionar pedidos</a></li>
        
        <?php endif;   ?>        
    </ul> 

    <a href="<?=base_url?>usuario/logout"  id="cerrar">Cerrar sesion</a>

    <?php endif;   ?>

    <?php if(isset($_SESSION['error_login'])): ?>
                 <div class="alert_red">
                      <?=$_SESSION['error_login']?>
                 </div>    
        <?php endif; ?>  
    <?php $_SESSION['error_login'] = null ?>
             
   
</div>
</aside>

<div id="central">