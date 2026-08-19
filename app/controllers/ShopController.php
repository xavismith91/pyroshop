<?php

declare(strict_types=1);

require_once __DIR__ . '/../models/Product.php';

class ShopController
{
    private Product $productModel;

    public function __construct()
    {
        $this->productModel = new Product();
    }

    public function index(): void
    {
        $products = $this->productModel->all();
        $this->render('home', [
            'title' => 'PyroShop | Tienda',
            'products' => $products,
        ]);
    }

    public function product(string $slug): void
    {
        $product = $this->productModel->find($slug);

        if ($product === null) {
            http_response_code(404);
            $this->render('404', ['title' => 'Producto no encontrado']);
            return;
        }

        $this->render('product', [
            'title' => 'PyroShop | ' . $product['name'],
            'product' => $product,
        ]);
    }

    public function about(): void
    {
        $this->render('about', ['title' => 'PyroShop | Nosotros']);
    }

    private function render(string $view, array $data = []): void
    {
        $data['route'] = $_GET['route'] ?? 'home';
        extract($data, EXTR_SKIP);
        require __DIR__ . '/../views/' . $view . '.php';
    }
}
