<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La tienda oficial de Taylor Swift. Descubre el vinilo exclusivo, CDs y mucho más.">
    <title>Taylor Swift Store</title>
    <style>
        /* Reset de estilos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #99e29c; /* Color suave, rosa pastel */
            color: #2D2D2D;
        }

        /* Header */
        header {
            background-color: #E5C1D2; /* Rosa pastel suave */
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo img {
            height: 40px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav a {
            color: #2D2D2D;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1rem;
        }

        nav a:hover {
            color: #B57A62; /* Toque dorado al pasar el ratón */
        }

        /* Hero Section */
        .hero {
            background-image: url('taylor-hero.jpg'); /* Imagen de Taylor */
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-family: 'Georgia', serif;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        .cta-button {
            background-color: #B57A62; /* Color dorado */
            color: #fff;
            padding: 15px 25px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            font-size: 1.1rem;
        }

        .cta-button:hover {
            background-color: #A16A4F;
        }

        /* Featured Products */
        .featured-products {
            padding: 50px 20px;
            text-align: center;
            background-color: #FFF5F3; /* Blanco suave */
        }

        .featured-products h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
            color: #B57A62;
        }

        .product-list {
            display: flex;
            justify-content: space-around;
            gap: 30px;
        }

        .product {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 30%;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .product:hover {
            transform: translateY(-10px);
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product h3 {
            font-size: 1.6rem;
            margin-bottom: 10px;
            color: #2D2D2D;
        }

        .product p {
            font-size: 1.2rem;
            color: #B57A62;
            margin-bottom: 15px;
        }

        .product-button {
            background-color: #B57A62;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            font-size: 1.1rem;
        }

        .product-button:hover {
            background-color: #A16A4F;
        }

        /* Footer */
        footer {
            background-color: #E5C1D2; /* Rosa pastel suave */
            color: #2D2D2D;
            padding: 20px;
            text-align: center;
        }

        footer nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 10px;
        }

        footer a {
            color: #2D2D2D;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <img src="https://store.taylorswift.com/cdn/shop/files/xDSNarkBjzvNFcXVCiFIjekuON93TaIO.png?v=1754970994&width=2332" alt="Logo de Taylor Swift">
        </div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Discografía</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="#">Tour</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Bienvenido a la tienda de Taylor Swift</h1>
            <p>Compra productos exclusivos, como vinilos, CDs, y mucho más</p>
            <a href="#" class="cta-button">Explora la tienda</a>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <h2>Productos Destacados</h2>
        <div class="product-list">
            <div class="product">
                <img src="https://store.taylorswift.com/cdn/shop/files/1_HeroFrontWithDisc.png?v=1755125616&width=1920" alt="Vinilo The Life of a Showgirl">
                <h3>Vinilo - The Life of a Showgirl</h3>
                <p>$39.99</p>
                <a href="#" class="product-button">Ver más</a>
            </div>
            <div class="product">
                <img src="https://udiscovermusic.co/cdn/shop/files/2_0316185b-975e-4fb6-b0df-635593f0004e.webp?v=1714506677" alt="CD Folklore">
                <h3>CD - Folklore</h3>
                <p>$14.99</p>
                <a href="#" class="product-button">Ver más</a>
            </div>
            <div class="product">
                <img src="https://store.taylorswift.com/cdn/shop/files/fwR4PS7y9hrt2Z57kJsHa3h5pG9w10KA_f4e21cb9-c4ad-43c1-b351-64cb55231344.png?v=1749665168" alt="Cassette Fearless (Regrabado)">
                <h3>Cassette - Fearless (Taylor's Version)</h3>
                <p>$19.99</p>
                <a href="#" class="product-button">Ver más</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2025 Taylor Swift. Todos los derechos reservados.</p>
            <nav>
                <ul>
                    <li><a href="#">Política de privacidad</a></li>
                    <li><a href="#">Términos de uso</a></li>
                    <li><a href="#">Ayuda</a></li>
                </ul>
            </nav>
        </div>
    </footer>

</body>
</html>