<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title><?= htmlspecialchars($title ?? 'PyroShop', ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
<header class="header">
    <a href="index.php"><img class="header__logo" src="img/logo-pyro.png" alt="Logotipo de PyroShop"></a>
</header>
<nav class="navegacion">
    <a class="navegacion__enlace<?= ($route ?? '') === 'home' ? ' navegacion__enlace--activo' : '' ?>" href="index.php">Tienda</a>
    <a class="navegacion__enlace<?= ($route ?? '') === 'about' ? ' navegacion__enlace--activo' : '' ?>" href="index.php?route=about">Nosotros</a>
</nav>
