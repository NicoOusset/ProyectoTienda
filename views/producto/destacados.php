  <!-- Contenido Central -->
     
    <h1>Algunos de nuestros productos</h1>

    <?php while ($pro = $productos->fetch_object()):  ?>

        <div class="product">
            <a href="<?=base_url?>producto/ver&id=<?=$pro->id?>">
                <?php
                    if($pro->imagen == null):
                    $src = "assets/img/camiseta.png"; 
                    else:
                        $src = base_url."uploads/images/".$pro->imagen;   
                    endif;
                ?>
                <img src="<?=$src?>" alt="camiseta" >
                <h2><?=$pro->nombre?></h2>
            </a>
            <p>$<?=$pro->precio?></p>
            <a href="<?=base_url?>carrito/add&id=<?=$pro->id?>" class="button">Comprar</a>
        </div>

    <?php endwhile;?>

</div>