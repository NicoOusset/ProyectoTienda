<?php  if(isset($edit) && isset($pro) && is_object($pro)): ?>
    <h1>Editar producto <?=$pro->nombre?> </h1>
    <?php  
        $url_action =  base_url."producto/save&id=".$pro->id;
    ?>

<?php  else: ?>
    <h1>Crear nuevos productos</h1>
    <?php  
        $url_action =  base_url."producto/save";
    ?>
<?php  endif; ?>

<?php  
    $url_action =  base_url."producto/save";
?>

<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required value="<?=isset($pro) && is_object($pro) ? $pro->nombre : '' ?>">

    <label for="descripcion">Descripcion:</label>
    <textarea name="descripcion"><?=isset($pro) && is_object($pro) ? $pro->descripcion : '' ?></textarea>

    <label for="precio">Precio:</label>
    <input type="text" name="precio" required value="<?=isset($pro) && is_object($pro) ? $pro->precio : '' ?>" >

    <label for="stock">Stock:</label>
    <input type="number" name="stock" required value="<?=isset($pro) && is_object($pro) ? $pro->stock : '' ?>">

    <label for="categoria">Categoria:</label>
    <select name="categoria">
        <?php $categorias = Utils::showCategorias();
             while($cat=$categorias->fetch_object()): ?>
                <option value="<?=$cat->id?>" <?=isset($pro) && is_object($pro) && $pro->categoria_id == $cat->id ? 'selected' : '' ?>>
                    <?=$cat->nombre?>
                </option>
        <?php endwhile;  ?>
    </select>

    <label for="imagen">Imagen:</label>
    <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
         <img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" alt="camiseta" class="thumb"> 
    <?php endif; ?>    
    <br>
    <input type="file" name="imagen">
    <br>
    <br>
    <input type="submit" value="Guardar">



</form>