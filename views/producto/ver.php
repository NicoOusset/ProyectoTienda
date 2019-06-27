<?php if(isset($pro)): ?>
    
    <h1>Detalle del producto: <?=$pro->nombre?></h1>
    <div id="detail-product">
        <div class="image">
            <?php
                if($pro->imagen == null):
                    $src = base_url."assets/img/camiseta.png"; 
                else:
                    $src = base_url."uploads/images/".$pro->imagen;   
                endif;
            ?>
            <img src="<?=$src?>" alt="camiseta" height="170px" >
        </div>
        <div class="data">
            <h2 class="description"><?=$pro->descripcion?></h2>    
            <p class="price">$<?=$pro->precio?></p>
            <a href="<?=base_url?>carrito/add&id=<?=$pro->id?>" class="button">Comprar</a>
        </div>

    
   
    </div>
    </div>
    
<?php else: ?>
    <h1>El producto no existe</h1>
<?php endif; ?>
