<?php require __DIR__ . '/header.php'; ?>
<main class="contenedor">
    <h1>Nuestros Productos</h1>
    <div class="grid">
        <?php foreach ($products as $slug => $product): ?>
            <article class="producto">
                <a href="index.php?route=product&amp;slug=<?= urlencode($slug) ?>">
                    <img class="producto__imagen" src="img/<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?>">
                    <div class="producto__informacion">
                        <p class="producto__nombre"><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p class="producto__precio"><?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </a>
            </article>
        <?php endforeach; ?>
        <div class="grafico grafico--camisas"></div>
        <div class="grafico grafico--node"></div>
    </div>
</main>
<?php require __DIR__ . '/footer.php'; ?>
