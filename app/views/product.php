<?php require __DIR__ . '/header.php'; ?>
<main class="contenedor">
    <h1><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></h1>
    <div class="camisa">
        <img class="camisa__imagen" src="img/<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>">
        <div class="camisa__contenido">
            <p><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8') ?></p>
            <p class="producto__precio"><?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    </div>
</main>
<?php require __DIR__ . '/footer.php'; ?>
