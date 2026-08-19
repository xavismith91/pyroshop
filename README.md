# PyroShop MVC

Estructura MVC sencilla en PHP para ejecutar con XAMPP:

- `index.php`: front controller y enrutador.
- `app/models/Product.php`: catálogo y acceso a productos.
- `app/controllers/ShopController.php`: decide qué vista mostrar.
- `app/views/`: vistas reutilizables del sitio.
- `css/` e `img/`: recursos públicos.

## Ejecutar

1. Inicia Apache desde XAMPP.
2. Abre `http://localhost/pyroshop/`.
3. La tienda usa `index.php`; los HTML originales se conservan como respaldo mientras se completa la migración.

Rutas disponibles:

- `index.php` o `index.php?route=home`
- `index.php?route=product&slug=cometa`
- `index.php?route=about`
