<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Carrito de compras de Taylor Swift. Agrega productos a tu carrito y compra ahora.">
    <title>Carrito de Compras | Taylor Swift Store</title>
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
            background-color: #F4F1F3; /* Rosa pastel */
            color: #2D2D2D;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        /* Header */
        header {
            background-color: #E5C1D2; /* Rosa pastel */
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
            color: #B57A62; /* Toque dorado */
        }

        /* Carrito */
        .cart {
            max-width: 1200px;
            margin: 50px auto;
        }

        .cart h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #FFF5F3;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cart-item img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-details h3 {
            font-size: 1.5rem;
            color: #2D2D2D;
        }

        .cart-item-details p {
            font-size: 1.1rem;
            color: #B57A62;
        }

        .cart-item-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity {
            font-size: 1.2rem;
            width: 40px;
            text-align: center;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .quantity-button {
            background-color: #B57A62;
            color: #fff;
            padding: 10px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        .quantity-button:hover {
            background-color: #A16A4F;
        }

        /* Resumen de carrito */
        .cart-summary {
            background-color: #FFF5F3;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            text-align: center;
        }

        .cart-summary p {
            font-size: 1.5rem;
            color: #2D2D2D;
        }

        .total-price {
            font-size: 1.8rem;
            color: #B57A62;
            margin: 15px 0;
        }

        .checkout-button {
            background-color: #B57A62;
            color: #fff;
            padding: 15px 30px;
            font-weight: bold;
            border-radius: 5px;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .checkout-button:hover {
            background-color: #A16A4F;
        }

        /* Footer */
        footer {
            background-color: #E5C1D2; /* Rosa pastel */
            color: #2D2D2D;
            padding: 20px;
            text-align: center;
            margin-top: auto; /* Hace que el footer se empuje hacia abajo */
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

    <!-- Carrito de Compras -->
    <main>
        <div class="cart">
            <h1>Carrito de Compras</h1>

            <!-- Lista de productos en el carrito -->
            <div class="cart-items">
                <!-- Producto 1: Vinilo The Life of a Showgirl -->
                <div class="cart-item">
                    <img src="https://store.taylorswift.com/cdn/shop/files/1_HeroFrontWithDisc.png?v=1755125616&width=1920" alt="Vinilo The Life of a Showgirl">
                    <div class="cart-item-details">
                        <h3>Vinilo - The Life of a Showgirl</h3>
                        <p>$39.99</p>
                    </div>
                    <div class="cart-item-actions">
                        <button class="quantity-button">-</button>
                        <input type="text" class="quantity" value="2" readonly>
                        <button class="quantity-button">+</button>
                    </div>
                </div>

                <!-- Producto 2: CD Folklore -->
                <div class="cart-item">
                    <img src="https://udiscovermusic.co/cdn/shop/files/2_0316185b-975e-4fb6-b0df-635593f0004e.webp?v=1714506677" alt="Vinilo Folklore">
                    <div class="cart-item-details">
                        <h3>CD - Folklore</h3>
                        <p>$29.99</p>
                    </div>
                    <div class="cart-item-actions">
                        <button class="quantity-button">-</button>
                        <input type="text" class="quantity" value="1" readonly>
                        <button class="quantity-button">+</button>
                    </div>
                </div>

                <!-- Producto 3: Cassette Fearless (Taylor's Version) -->
                <div class="cart-item">
                    <img src="https://store.taylorswift.com/cdn/shop/files/fwR4PS7y9hrt2Z57kJsHa3h5pG9w10KA_f4e21cb9-c4ad-43c1-b351-64cb55231344.png?v=1749665168" alt="CD Folklore">
                    <div class="cart-item-details">
                        <h3>Cassette - Fearless (Taylor's Version)</h3>
                        <p>$14.99</p>
                    </div>
                    <div class="cart-item-actions">
                        <button class="quantity-button">-</button>
                        <input type="text" class="quantity" value="3" readonly>
                        <button class="quantity-button">+</button>
                    </div>
                </div>
            </div>

            <!-- Resumen del carrito -->
            <div class="cart-summary">
                <p>Resumen del carrito</p>
                <div class="total-price">
                    Total: $84.97
                </div>
                <a href="#" class="checkout-button">Pagar</a>
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