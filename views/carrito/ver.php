<?php if(!isset($_SESSION['carrito'])): ?>
    
    <h1>No hay nada en su carrito de la compra</h1>

<?php else: ?>

    <h1>Carrito de la compra</h1>

    <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
            <th>Eliminar</th>
        </tr>

        <?php     
            foreach ($carrito as $indice => $elemento): 
                $producto = $elemento['producto'];    
        ?>

        <tr>
            <td>
                <?php
                    if($producto->imagen == null):
                        $src = base_url."assets/img/camiseta.png"; 
                    else:
                        $src = base_url."uploads/images/".$producto->imagen;   
                    endif;
                ?>
                <img src="<?=$src?>" alt="camiseta" height="75px" > 
            </td>
            <td>
            <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"> <?=$producto->nombre?> </a>
            </td>
            <td>
                <?=$producto->precio?>
            </td>
            <td>   
                <div class="unidades">  
                    <?=$elemento['unidades']?>
                </div>       
                <div class="updown-unidades">
                    <a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button">+</a>
                    <a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button">-</a>
                </div>
            </td>      
            <td>
                <a href="<?=base_url?>carrito/remove&index=<?=$indice?>" class="botonDelete">Quitar producto</a>      
            </td>

        </tr>


        <?php endforeach; ?>

    </table>

    <br>
    <?php $stats = Utils::statsCarrito() ?>
    <h3 class="precioTotal">Precio Total: $<?=$stats['total']?> || Unidades: <?=$stats['unidades']?>  </h3>

    <a href="<?=base_url?>pedido/hacer" class="botonPedido">Hacer pedido</a>

<?php endif; ?>