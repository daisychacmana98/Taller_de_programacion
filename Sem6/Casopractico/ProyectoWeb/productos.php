<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilogeneral.css">
  <title>Tienda de Comercio Electrónico</title>
</head>
<body>
  <header>
    <div class="container">
      <h1>Productos</h1>
      <nav>
        <ul>
          <li><a href="index.html">Inicio</a></li>
          <li><a href="pedidos.html">Pedidos</a></li>
          <li><a href="clientes.html">Clientes</a></li>
          <li><a href="productos.html">Productos</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section id="contenido" class="container">
    <h1>Productos</h1>
    <div class="filtros">
      <form action="#">
        <input type="text" placeholder="Buscar">
        <select name="categoria">
          <option value="0">Todas las categorías</option>
          <option value="1">Categoría 1</option>
          <option value="2">Categoría 2</option>
          <option value="3">Categoría 3</option>
        </select>
        <button type="submit">Filtrar</button>
      </form>
    </div>
    <div class="productos">
      <!-- Aquí se mostrarán los productos -->
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Tu Empresa</p>
    </div>
  </footer>
</body>
</html>
