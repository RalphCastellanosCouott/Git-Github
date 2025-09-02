<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="La tienda de Taylor Swift. Compra vinilos, CDs y mucho más.">
    <title>Tienda | Taylor Swift</title>
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            display: flex;
            flex: 1;
            padding: 20px;
        }

        /* Header */
        header {
            background-color: #E5C1D2;
            /* Rosa pastel */
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Sombra sutil */
        }

        header .logo img {
            height: 50px;
            /* Tamaño uniforme para el logo */
            object-fit: contain;
            /* Asegura que el logo no se distorsione */
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
            /* Espaciado consistente entre los enlaces */
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

        nav ul li {
            display: inline-block;
            /* Asegura que los enlaces estén en línea */
        }

        /* Filtros en el lado izquierdo */
        .filters {
            width: 250px;
            padding: 20px;
            background-color: #FFF5F3;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .filters h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #2D2D2D;
        }

        .filter-item {
            margin-bottom: 15px;
        }

        .filter-item label {
            font-size: 1.1rem;
            color: #2D2D2D;
        }

        .filter-item select,
        .filter-item input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-top: 5px;
        }

        .filter-item button {
            background-color: #B57A62;
            color: white;
            padding: 10px 20px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            width: 100%;
            margin-top: 10px;
            cursor: pointer;
        }

        .filter-item button:hover {
            background-color: #A16A4F;
        }

        /* Productos */
        .product-list {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .product-item {
            background-color: #FFF5F3;
            padding: 20px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .product-item:hover {
            transform: translateY(-10px);
        }

        .product-item img {
            width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .product-item h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #2D2D2D;
        }

        .product-item p {
            font-size: 1.2rem;
            color: #B57A62;
            margin-bottom: 20px;
        }

        .product-button {
            background-color: #B57A62;
            color: #fff;
            padding: 10px 20px;
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
            <img src="https://store.taylorswift.com/cdn/shop/files/xDSNarkBjzvNFcXVCiFIjekuON93TaIO.png?v=1754970994&width=2332" alt="Logo de Taylor Swift">
        </div>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/discografia">Discografía</a></li>
                <li><a href="/tienda">Tienda</a></li>
                <li><a href="/tour">Tour</a></li>
                <li><a href="/carrito">Carrito</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Filtros -->
        <div class="filters">
            <div class="filter-item">
                <label for="category">Categoría</label>
                <select id="category">
                    <option value="vinilos">Vinilos</option>
                    <option value="cds">CDs</option>
                    <option value="cassettes">Cassettes</option>
                </select>
            </div>
            <div class="filter-item">
                <label for="brand">Marca</label>
                <select id="brand">
                    <option value="taylor-swift">Taylor Swift</option>
                </select>
            </div>
            <div class="filter-item">
                <label for="price">Precio</label>
                <select id="price">
                    <option value="low-high">De menor a mayor</option>
                    <option value="high-low">De mayor a menor</option>
                </select>
            </div>
            <div class="filter-item">
                <label for="size">Rango de Tamaño</label>
                <select id="size">
                    <option value="small">Pequeño</option>
                    <option value="medium">Mediano</option>
                    <option value="large">Grande</option>
                </select>
            </div>
            <div class="filter-item">
                <label for="screen">Resolución de la Pantalla</label>
                <select id="screen">
                    <option value="hd">HD</option>
                    <option value="4k">4K</option>
                </select>
            </div>
            <div class="filter-item">
                <button>Aplicar filtros</button>
            </div>
        </div>

        <!-- Lista de Productos -->
        <div class="product-list">
            <!-- Producto 1: Vinilo The Life of a Showgirl -->
            <div class="product-item">
                <img src="https://store.taylorswift.com/cdn/shop/files/1_HeroFrontWithDisc.png?v=1755125616&width=1920" alt="Vinilo The Life of a Showgirl">
                <h3>Vinilo - The Life of a Showgirl</h3>
                <p>$39.99</p>
                <a href="/carrito" class="product-button">Agregar al carrito</a>
            </div>

            <!-- Producto 2: CD Folklore -->
            <div class="product-item">
                <img src="https://udiscovermusic.co/cdn/shop/files/2_0316185b-975e-4fb6-b0df-635593f0004e.webp?v=1714506677" alt="CD Folklore">
                <h3>CD - Folklore</h3>
                <p>$14.99</p>
                <a href="/carrito" class="product-button">Agregar al carrito</a>
            </div>

            <!-- Producto 3: Cassette Fearless (Taylor's Version) -->
            <div class="product-item">
                <img src="https://store.taylorswift.com/cdn/shop/files/fwR4PS7y9hrt2Z57kJsHa3h5pG9w10KA_f4e21cb9-c4ad-43c1-b351-64cb55231344.png?v=1749665168" alt="Cassette Fearless (Taylor's Version)">
                <h3>Cassette - Fearless (Taylor's Version)</h3>
                <p>$19.99</p>
                <a href="/carrito" class="product-button">Agregar al carrito</a>
            </div>

            <!-- Producto 4: Vinilo 1989 (Taylor's Version) -->
            <div class="product-item">
                <img src="https://udiscovermusic.co/cdn/shop/files/602455542144_-_1989_Taylor_s_Version_LP_-_A.png?v=1701101864" alt="Vinilo 1989 (Taylor's Version)">
                <h3>Vinilo - 1989 (Taylor's Version)</h3>
                <p>$29.99</p>
                <a href="/carrito" class="product-button">Agregar al carrito</a>
            </div>

            <!-- Producto 5: CD The Tortured Poets Department -->
            <div class="product-item">
                <img src="https://udiscovermusic.co/cdn/shop/files/602465081343_-_TS_CD_-_A.png?v=1707167459" alt="CD The Tortured Poets Department">
                <h3>CD - The Tortured Poets Department</h3>
                <p>$24.99</p>
                <a href="/carrito" class="product-button">Agregar al carrito</a>
            </div>

            <!-- Producto 6: Cassette Speak Now (Taylor's Version) -->
            <div class="product-item">
                <img src="https://udiscover.mx/cdn/shop/files/Image20230508100618_6dd9f5e3-a6ed-471d-b531-1c3c42813480.png?v=1733962358" alt="Cassette Speak Now (Taylor's Version)">
                <h3>Cassette - Speak Now (Taylor's Version)</h3>
                <p>$22.99</p>
                <a href="/carrito" class="product-button">Agregar al carrito</a>
            </div>
        </div>
    </main>

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
