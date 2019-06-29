<h1>Detalle del Pedido</h1>

<?php if(isset($pedido)): ?>
    <?php if(isset($_SESSION['admin'])): ?>

        <h3>Cambiar estado del pedido</h3>
        <form action="<?=base_url?>pedido/estado" method="POST">
            <input type="hidden" value="<?=$pedido->id?>" name="pedido_id">
            <select name="estado" >
                <option value="confirm" <?= $pedido->estado=="confirm" ? 'selected' : '' ?>>Pendiente</option>
                <option value="preparation" <?= $pedido->estado=="preparation" ? 'selected' : '' ?>>En preparación</option>
                <option value="ready" <?= $pedido->estado=="ready" ? 'selected' : '' ?>>Preparado para el envio</option>
                <option value="sended" <?= $pedido->estado=="sended" ? 'selected' : '' ?>>Enviado</option>
            </select>

            <input type="submit" value="Cambiar Estado">
        </form>
        <br>
        <br>
    <?php endif; ?>  

        Numero del pedido: <?=$pedido->id?><br>
        Estado: <?=Utils::showStatus($pedido->estado)?><br>
        Se envia a:  <?=$pedido->provincia?>, <?=$pedido->localidad?>, <?=$pedido->direccion?><br>
        Pedido realizado el dia: <?=$pedido->fecha?> <br>
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