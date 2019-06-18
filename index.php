<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda de Camisetas</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div id="container">
    <!--  Cabecera  -->
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="camisetaLogo">
            <a href="index.php">Tienda de camisetas</a>
        </div>    
    </header>
    
    <!-- Menu -->
    <nav>
        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>
            <li>
                <a href="#">Categoria 1</a>
            </li>
            <li>
                <a href="#">Categoria 2</a>
            </li>
            <li>
                <a href="#">Categoria 3</a>
            </li>
            <li>
                <a href="#">Categoria 4</a>
            </li>
            <li>
                <a href="#">Categoria 5</a>
            </li>
        </ul>   
    </nav>

    <!-- Barra Lateral -->
    <div id="content">
        <aside id="lateral">

            <div id="login" class="block_aside">
                <form action="#" method="post">
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password">

                    <input type="submit" value="Enviar">
                </form>

                <a href="#">Mis pedidos</a>
                <a href="#">Gestionar pedidos</a>
                <a href="#">Gestionar categorias</a>
            </div>
        </aside>
    </div>

    <!-- Contenido Central -->
    <div id="central">
        <div class="product">
            <img src="assets/img/camiseta.png" alt="camiseta">
            <h2>Camiseta Azul Ancha</h2>
            <p>300 Pesos</p>
            <a href="">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/camiseta.png" alt="camiseta">
            <h2>Camiseta Azul Ancha</h2>
            <p>300 Pesos</p>
            <a href="">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/camiseta.png" alt="camiseta">
            <h2>Camiseta Azul Ancha</h2>
            <p>300 Pesos</p>
            <a href="">Comprar</a>
        </div>

        <div class="product">
            <img src="assets/img/camiseta.png" alt="camiseta">
            <h2>Camiseta Azul Ancha</h2>
            <p>300 Pesos</p>
            <a href="">Comprar</a>
        </div>
    
    </div>

    <!-- Pie de Pagina -->
    <footer id="footer">
        <p>Desarrollado por Nicolás Ousset &copy; <?=date('Y')?> </p>

    </footer>
    </div>
</body>
</html>