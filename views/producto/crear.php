<h1>Crear nuevos productos</h1>

<form action="<?=base_url?>producto/save" method="POST" enctype="multipart/form-data">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required>

    <label for="descripcion">Descripcion:</label>
    <textarea name="descripcion"> </textarea>

    <label for="precio">Precio:</label>
    <input type="text" name="precio" required>

    <label for="stock">Stock:</label>
    <input type="number" name="stock" required>

    <label for="categoria">Categoria:</label>
    <select name="categoria">
        <?php $categorias = Utils::showCategorias();
             while($cat=$categorias->fetch_object()): ?>
                <option value="<?=$cat->id?>">
                    <?=$cat->nombre?>
                </option>
        <?php endwhile;  ?>
    </select>

    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen">

    <br>
    <input type="submit" value="Crear">



</form>