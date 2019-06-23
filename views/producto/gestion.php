<h1>Gestion de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
    Crear producto
</a>

<?php  if(isset($_SESSION['producto']) && $_SESSION['producto']=='complete' ):    ?>
    <strong class="alert_green"> El producto fue creado con exito </strong>

<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto']=='failed' ):  ?>
    <strong class="alert_red"> El producto no se ha creado correctamente </strong>
<?php endif;  ?>
<?php Utils::deleteSession('producto');?>

<?php  if(isset($_SESSION['delete']) && $_SESSION['delete']=='complete' ):    ?>
    <strong class="alert_green"> El producto fue eliminado con exito </strong>

<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete']=='failed' ):  ?>
    <strong class="alert_red"> El producto no se ha eliminado correctamente </strong>
<?php endif;  ?>
<?php Utils::deleteSession('delete');?>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>ACCIONES</th>
    </tr>
<?php while ($prod = $productos->fetch_object()): ?>
    <tr>
        <td><?=$prod->id?></td>
        <td><?=$prod->nombre?></td>
        <td><?="$".$prod->precio?></td>
        <td><?=$prod->stock?></td>
        <td>
            <a href="<?=base_url?>producto/editar&id=<?=$prod->id?>" class="button-form">Editar</a>
            <a href="<?=base_url?>producto/eliminar&id=<?=$prod->id?>" class="button-form">Eliminar</a>
        </td>
    </tr>
<?php endwhile; ?>
</table>