<?php if(isset($pro)): ?>
    
    <h1>Detalle del producto: <?=$pro->nombre?></h1>
    <div class="product">
    <?php
        if($pro->imagen == null):
            $src = base_url."assets/img/camiseta.png"; 
        else:
            $src = base_url."uploads/images/".$pro->imagen;   
        endif;
    ?>
    <img src="<?=$src?>" alt="camiseta" height="170px" >
    <h2><?=$pro->nombre?></h2>
    <h2><?=$pro->descripcion?></h2>    
    <p>$<?=$pro->precio?></p>
    <a href="" class="button">Comprar</a>
    </div>
    </div>
    
<?php else: ?>
    <h1>El producto no existe</h1>
<?php endif; ?>
