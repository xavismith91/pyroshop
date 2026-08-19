<?php

declare(strict_types=1);

require_once __DIR__ . '/app/controllers/ShopController.php';

$controller = new ShopController();
$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'product':
        $controller->product((string) ($_GET['slug'] ?? ''));
        break;
    case 'about':
        $controller->about();
        break;
    case 'home':
        $controller->index();
        break;
    default:
        http_response_code(404);
        $controller->product('');
}
