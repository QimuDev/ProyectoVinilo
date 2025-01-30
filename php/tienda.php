<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prata&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/tienda.css">
</head>
<body>
    <header>
        <div class="headerContainer">
                <img src="../img/logo.png" alt="Logo" height="80%" />
            <nav class="navBar">
                <a href="../index.html">HOME</a>
                <a href="../php/catalogo.php">CATÁLOGO</a>                
            </nav>
        </div>
    </header>

    <section class="shop" id="shop">
    <div class="products-container">
        <?php
        include_once("configuracion.php");
        
        $sql = "
        SELECT 
            v.imagenVinilo, 
            v.tituloVinilo, 
            b.nombreBanda,  
            g.nombreGenero AS genero,
            v.precioVinilo
        FROM vinilos v
        JOIN banda b ON v.idBanda = b.idBanda
        JOIN generos g ON b.idGenero = g.idGenero
        WHERE v.visible = 'True'
        ";
    
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-details'>";
                
                // Contenedor de la imagen
                echo "<div class='image-wrapper'>";
                echo "<div class='vinil-image'><img src='" . htmlspecialchars($row['imagenVinilo']) . "'></div>";
                echo "</div>";
                
                // Barra separadora
                echo "<div class='lineBar'></div>";

                // Contenedor del texto
                echo "<div class='text-container'>";
                echo "<div class='info-container'>";
                echo "<p><strong>Nombre: </strong>" . htmlspecialchars($row['tituloVinilo']) . "</p>";
                echo "<p><strong>Banda: </strong>" . htmlspecialchars($row['nombreBanda']) . "</p>";
                echo "<p><strong>Género: </strong>" . htmlspecialchars($row['genero']) . "</p>"; // Corrección aquí
                echo "<p><strong>Precio: </strong>" . htmlspecialchars($row['precioVinilo']) . " €</p>";
                echo "</div>";
                echo "</div>";
                
                echo "</div>";
            }
        } else {
            echo "<p>No hay vinilos disponibles.</p>";
        }
        ?>
    </div>
</section>

<script src="desplegable.js"></script>
</body>

<footer id="contact">
    <div class="footer-container">
        <div class="contact-info">
            <h3>Datos de contacto</h3>
            <div class="tel">+34 173 998 456</div>
            <div class="address">Av de Suiza, 5, 46188</div>
            <div class="email">compravinilo@gmail.com</div>
        </div>
        <div class="politics">
            <h3>Información</h3>
            <ul>
                <li><a href="#">Términos y condiciones</a></li>
                <li><a href="#">Política de privacidad</a></li>
                <li><a href="#">Política de cookies</a></li>
            </ul>
        </div>
        <div class="newsletter">
            <label>Suscribete para recibir más información</label>
            <input type="text" />
            <button type="submit">Suscribirse</button>
        </div>
    </div>
    <div class="author-rights">
        <p>&copy; 2025 Edición Especial Depeche Mode - All rights reserved</p>
    </div>
</footer>
</html>
