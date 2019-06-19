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
    <nav id="menu">
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
                <a href="#">Contacto</a>
            </li>
        </ul>   
    </nav>

    
    <div id="content">

        <!-- Barra Lateral -->
        <aside id="lateral">

            <div id="login" class="block_aside">
                <h3>Entrar a la Web</h3>
                <form action="#" method="post">
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password">

                    <input type="submit" value="Enviar">
                </form>

                <ul>
                    <li> <a href="#">Mis pedidos</a></li>
                    <li> <a href="#">Gestionar pedidos</a></li>
                    <li> <a href="#">Gestionar categorias</a></li>
                </ul>          
               
            </div>
        </aside>
    

        <!-- Contenido Central -->
        <div id="central">

            <h1>Productos destacados</h1>

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
    </div>

    <!-- Pie de Pagina -->
    <footer id="footer">
        <p>Desarrollado por Nicolás Ousset &copy; <?=date('Y')?> </p>
    </footer>

    </div>
</body>
</html>