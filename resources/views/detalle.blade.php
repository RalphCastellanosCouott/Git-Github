<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detalle del vinilo de Taylor Swift - The Life of a Showgirl.">
    <title>Detalle Producto | The Life of a Showgirl</title>
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
            background-color: #F4F1F3;
            /* Rosa pastel */
            color: #2D2D2D;

            /* Flexbox para asegurar que el footer esté al fondo */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Hace que el body tenga siempre la altura completa de la ventana */
        }

        main {
            flex: 1;
            /* Esto hace que el contenido principal ocupe todo el espacio disponible */
        }

        /* Header */
        header {
            background-color: #E5C1D2;
            /* Rosa pastel */
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
            color: #B57A62;
            /* Toque dorado */
        }

        /* Detalle del Producto */
        .product-detail {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            display: flex;
            gap: 50px;
            justify-content: space-between;
            background-color: #FFF5F3;
            /* Blanco suave */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-detail img {
            width: 100%;
            max-width: 400px;
            height: auto;
            border-radius: 8px;
        }

        .product-info {
            max-width: 500px;
        }

        .product-info h1 {
            font-size: 2.5rem;
            color: #2D2D2D;
            margin-bottom: 20px;
        }

        .product-info p {
            font-size: 1.2rem;
            color: #2D2D2D;
            margin-bottom: 20px;
        }

        .price {
            font-size: 1.8rem;
            color: #B57A62;
            margin-bottom: 20px;
        }

        .cta-button {
            background-color: #B57A62;
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

        /* Footer */
        footer {
            background-color: #E5C1D2;
            /* Rosa pastel */
            color: #2D2D2D;
            padding: 20px;
            text-align: center;
            margin-top: auto;
            /* Hace que el footer se empuje hacia abajo */
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
            <img src="https://store.taylorswift.com/cdn/shop/files/xDSNarkBjzvNFcXVCiFIjekuON93TaIO.png?v=1754970994&width=2332"
                alt="Logo de Taylor Swift">
        </div>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/tienda">Discografía</a></li>
                <li><a href="/tienda">Tienda</a></li>
                <li><a href="#">Tour</a></li>
            </ul>
        </nav>
    </header>

    <!-- Detalle del Producto -->
    <section class="product-detail">
        <div class="product-info">
            <h1>Vinilo - The Life of a Showgirl</h1>
            <p><strong>Descripción:</strong> Este vinilo exclusivo de Taylor Swift es una joya para los coleccionistas.
                Con un diseño único y una calidad de sonido increíble, este vinilo será el centro de atención en tu
                colección.</p>
            <p><strong>Características:</strong></p>
            <ul>
                <li>Edición limitada.</li>
                <li>Portada diseñada exclusivamente para este lanzamiento.</li>
                <li>Calidad de sonido de alta fidelidad.</li>
                <li>Incluye una sorpresa exclusiva de Taylor Swift.</li>
            </ul>
            <div class="price">$39.99</div>
            <a href="#" class="cta-button">Comprar ahora</a>
        </div>
        <div class="product-image">
            <img src="https://store.taylorswift.com/cdn/shop/files/1_HeroFrontWithDisc.png?v=1755125616&width=1920"
                alt="Vinilo The Life of a Showgirl">
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
