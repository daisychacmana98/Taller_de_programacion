<?php include_once "encabezado.php" ?>
<?php include_once "funciones.php" ?>

<!DOCTYPE html>
<html>
<head>
    <title>Compra finalizada</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <style>
        /* Estilo adicional para el botón de impresión */
        #btnImprimir {
            margin-top: 20px;
        }
        .info-container {
            text-align: center;
        }
        .subtotal, .total {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 20px;
            padding: 10px;
            background-color: #f0f0f0;
            border: 2px solid #ccc;
            border-radius: 5px;
            display: inline-block; /* para que el fondo se ajuste al contenido */
        }
        .total {
            color: #ff5733; /* Color rojo para resaltar el total */
        }
        .cart-image {
            max-width: 200px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title">¡Gracias por tu compra!</h1>
    
    <div class="info-container">
        <img src="https://us.123rf.com/450wm/sommersby/sommersby1510/sommersby151000354/46327051-icono-de-carrito-de-compras-ilustraci%C3%B3n-vectorial.jpg" alt="Icono de carrito de compras" class="cart-image">
        <h2 class="subtitle">Resumen de tu compra:</h2>

        <?php
        // Es responsabilidad del programador hacer algo con los productos
        include_once "funciones.php";

        // Asegurarse de que las funciones existan antes de llamarlas
        if (function_exists('calcularSubtotal') && function_exists('calcularTotal')) {
            $productos = obtenerProductosEnCarrito();

            foreach ($productos as $producto): ?>
                <div class="card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="card-header-title is-size-4"><?php echo $producto->nombre; ?></p>
                                <p class="subtitle is-6">ID: <?php echo $producto->id; ?></p>
                                <p><?php echo $producto->descripcion; ?></p>
                                <p>Precio: $<?php echo $producto->precio; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!--  Total -->
            <div class="total">Total: $<?php echo calcularTotal($productos); ?></div>
        <?php } else {
            echo "No se pudieron calcular los totales. Las funciones no existen.";
        } ?>

        <?php
            // Vaciar el carrito después de mostrar la compra
            vaciarCarrito();
        ?>
    </div>

    <!-- Botón para imprimir la página -->
    <button id="btnImprimir" class="button is-primary is-fullwidth" onclick="window.print()">Imprimir</button>
</div>

</body>
</html>
