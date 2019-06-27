<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido']=='complete'): ?>

    <h1>Tu pedido se ha confirmado</h1>

    <p>
        Tu pedido ha sido guardado con exito, una vez que realices el pago a la cuenta N°45481ARF54862, el pedido será procesado y enviado.
    </p>
    <br>

    <?php if(isset($pedido)): ?>
        <h3>Datos del pedido:</h3>

        
        Numero del pedido: <?=$pedido->id?><br>
        Total a pagar: $<?=$pedido->coste?><br>
        Productos: <br>
       
        <table>
        <tr>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Unidades</th>
        </tr>

       
        <?php while ($producto = $productos->fetch_object()): ?>
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
                    <?=$producto->nombre?> 
                </td>
                <td>
                    <?=$producto->precio?>
                </td>
                <td>
                    <?=$producto->unidades?>
                </td>       
            </tr>

        <?php endwhile; ?>
        </table>
    <?php endif; ?>

<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido']!='complete'): ?>
    <h1>Tu pedido no ha podido procesarce</h1>

<?php endif; ?>