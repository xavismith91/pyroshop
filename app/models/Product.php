<?php

declare(strict_types=1);

class Product
{
    private const PRODUCTS = [
        'cometa' => [
            'name' => 'Cometa',
            'price' => '$100 / paquete 1000pz',
            'image' => 'raton.jpg',
            'description' => 'Cuetes que dejan un destello de luz blanca y están disponibles en distintas presentaciones de colores.',
        ],
        'ollitas' => [
            'name' => 'Ollita',
            'price' => '$30 / 12pz',
            'image' => 'ollita.jpg',
            'description' => 'De 12 piezas, estas ollitas sorprenden con la luz que emerge de ellas.',
        ],
        'r15' => [
            'name' => 'R-15',
            'price' => '$60 / 95pz',
            'image' => 'r15.jpeg',
            'description' => 'Detonantes de 95 piezas con un buen trueno. Producto para personas adultas y uso responsable.',
        ],
        'silbato' => [
            'name' => 'Silbato',
            'price' => '$70 / Paq. 144pz',
            'image' => 'silbato.jpeg',
            'description' => 'Paquete de silbatos para disfrutar sus sonidos y efectos luminosos.',
        ],
        'buscapie' => [
            'name' => 'Buscapie',
            'price' => '$90 / 20 rollos',
            'image' => 'buscapie.jpg',
            'description' => 'Presentación de 20 rollos para celebraciones y eventos.',
        ],
        'cuete-blanco' => [
            'name' => 'Cuete Blanco',
            'price' => '$90 / 20 rollos',
            'image' => 'cohete-blanco.jpg',
            'description' => 'Cuetes blancos en presentación de 20 rollos.',
        ],
        'trabucos' => [
            'name' => 'Trabucos',
            'price' => '$40 / 6 piezas',
            'image' => 'trabucos_colores.jpg',
            'description' => 'Seis piezas de trabucos de colores para tus celebraciones.',
        ],
        'tamalito' => [
            'name' => 'Tamalito',
            'price' => '$40 / 25pz',
            'image' => 'tamalitos.jpeg',
            'description' => 'Presentación de 25 piezas para acompañar tus celebraciones.',
        ],
        'volcan-diamantina' => [
            'name' => 'Volcán Diamantina',
            'price' => '$95 / 50pz',
            'image' => 'volcan diamantina.jpeg',
            'description' => 'Volcanes que brotan chispas de diamantina dorada, ideales para disfrutar en familia con responsabilidad.',
        ],
        'abejorro' => [
            'name' => 'Abejorro',
            'price' => '$150 / 12pz',
            'image' => 'abejorro.jpeg',
            'description' => 'Paquete de 12 piezas con movimiento y efectos luminosos.',
        ],
        'escupidor' => [
            'name' => 'Escupidor',
            'price' => '$60 / 12pz',
            'image' => 'escupidor.jpeg',
            'description' => 'Presentación de 12 piezas para tus celebraciones.',
        ],
        'ovni' => [
            'name' => 'Ovni',
            'price' => '$50 / 12pz',
            'image' => 'ovni.jpeg',
            'description' => 'Paquete de 12 piezas con efectos de movimiento.',
        ],
        'hormiguero' => [
            'name' => 'Hormiguero',
            'price' => '$100 / 72pz',
            'image' => 'hormi.jpeg',
            'description' => 'Presentación de 72 piezas para llenar de energía tus celebraciones.',
        ],
        'bola-de-humo' => [
            'name' => 'Bola de Humo',
            'price' => '$120 / 100pz',
            'image' => 'bolahumo.jpeg',
            'description' => 'Paquete de 100 piezas con efecto de humo.',
        ],
        'pajarera' => [
            'name' => 'Pajarera',
            'price' => '$100 / 144pz',
            'image' => 'pajarera.jpeg',
            'description' => 'Presentación de 144 piezas para celebraciones.',
        ],
        'flash' => [
            'name' => 'Flash',
            'price' => '$10 / 6pz',
            'image' => 'pirotecnia.webp',
            'description' => 'Presentación de seis piezas con destellos luminosos.',
        ],
    ];

    public function all(): array
    {
        return self::PRODUCTS;
    }

    public function find(string $slug): ?array
    {
        return self::PRODUCTS[$slug] ?? null;
    }
}
