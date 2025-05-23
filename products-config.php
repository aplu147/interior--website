<?php
return [
    'show_prices' => false,
    'show_cart' => false,
    'currency' => '$',
    'currency_position' => 'left',
    'animations' => true,
    
    'products' => [
        1 => [
            'name' => 'Modern Kitchen Cabinet',
            'category' => 'Kitchen',
            'price' => 249.99,
            'old_price' => 299.99,
            'images' => ['images/products/kitchen-1.jpg'],
            'description' => 'Sleek design with practical storage solutions.',
            'features' => ['Solid wood frame', 'Laminate finish', 'Soft-close doors'],
            'rating' => 4.5,
            'review_count' => 24,
            'related' => [2, 3, 5] // Related product IDs
        ],
        2 => [
            'name' => 'Contemporary Wall Art',
            'category' => 'Wall Decor',
            'price' => 179.99,
            'old_price' => 199.99,
            'images' => ['images/products/wall-1.jpg'],
            'description' => 'Transform your walls with stunning art panels.',
            'features' => ['Set of 3 panels', 'High-quality print', 'Easy to install'],
            'rating' => 4.0,
            'review_count' => 18,
            'related' => [1, 4, 6]
        ],
        3 => [
            'name' => 'Minimalist Coffee Table',
            'category' => 'Living Room',
            'price' => 189.99,
            'images' => ['images/products/table-1.jpg'],
            'description' => 'Clean lines and functional design.',
            'features' => ['Tempered glass top', 'Metal legs', 'Modern aesthetic'],
            'rating' => 4.2,
            'review_count' => 15,
            'related' => [1, 7, 8]
        ],
        4 => [
            'name' => 'Luxury Bed Frame',
            'category' => 'Bedroom',
            'price' => 499.99,
            'old_price' => 599.99,
            'images' => ['images/products/bed-1.jpg'],
            'description' => 'King size bed with upholstered headboard.',
            'features' => ['Solid wood construction', 'Premium fabric', 'Under-bed storage'],
            'rating' => 4.7,
            'review_count' => 32,
            'related' => [2, 5, 9]
        ],
        5 => [
            'name' => 'Smart LED Mirror',
            'category' => 'Bathroom',
            'price' => 349.99,
            'images' => ['images/products/mirror-1.jpg'],
            'description' => 'Anti-fog mirror with touch controls.',
            'features' => ['Dimmable LEDs', 'Bluetooth speaker', 'Motion sensor'],
            'rating' => 4.8,
            'review_count' => 28,
            'related' => [1, 4, 10]
        ],
        6 => [
            'name' => 'Industrial Bookshelf',
            'category' => 'Living Room',
            'price' => 229.99,
            'images' => ['images/products/bookshelf-1.jpg'],
            'description' => 'Open shelving with metal frame.',
            'features' => ['Adjustable shelves', 'Rustic finish', 'Wall-mountable'],
            'rating' => 4.3,
            'review_count' => 19,
            'related' => [2, 7, 11]
        ],
        7 => [
            'name' => 'Velvet Dining Chairs',
            'category' => 'Dining Room',
            'price' => 159.99,
            'old_price' => 199.99,
            'images' => ['images/products/chair-1.jpg'],
            'description' => 'Set of 2 premium velvet chairs.',
            'features' => ['Solid wood legs', 'Comfortable cushion', 'Mid-century style'],
            'rating' => 4.6,
            'review_count' => 25,
            'related' => [3, 6, 12]
        ],
        8 => [
            'name' => 'Smart Lighting Kit',
            'category' => 'Lighting',
            'price' => 129.99,
            'images' => ['images/products/lighting-1.jpg'],
            'description' => 'Color-changing LED bulbs with app control.',
            'features' => ['16 million colors', 'Voice control', 'Energy efficient'],
            'rating' => 4.4,
            'review_count' => 21,
            'related' => [3, 9, 10]
        ],
        9 => [
            'name' => 'Marble Side Table',
            'category' => 'Living Room',
            'price' => 199.99,
            'images' => ['images/products/side-table-1.jpg'],
            'description' => 'Elegant marble top with gold base.',
            'features' => ['Real marble', 'Metal frame', 'Compact size'],
            'rating' => 4.5,
            'review_count' => 17,
            'related' => [4, 8, 11]
        ],
        10 => [
            'name' => 'Smart Blinds',
            'category' => 'Window',
            'price' => 279.99,
            'images' => ['images/products/blinds-1.jpg'],
            'description' => 'Automated window coverings with scheduling.',
            'features' => ['App control', 'Light sensor', 'Custom sizing'],
            'rating' => 4.7,
            'review_count' => 30,
            'related' => [5, 8, 12]
        ],
        11 => [
            'name' => 'Leather Sofa',
            'category' => 'Living Room',
            'price' => 899.99,
            'old_price' => 999.99,
            'images' => ['images/products/sofa-1.jpg'],
            'description' => 'Genuine leather 3-seater sofa.',
            'features' => ['Top-grain leather', 'Solid wood frame', 'Removable cushions'],
            'rating' => 4.9,
            'review_count' => 45,
            'related' => [6, 9, 12]
        ],
        12 => [
            'name' => 'Modern Rug',
            'category' => 'Flooring',
            'price' => 349.99,
            'images' => ['images/products/rug-1.jpg'],
            'description' => 'Handwoven wool rug with geometric pattern.',
            'features' => ['Non-slip backing', 'Easy to clean', 'Durable construction'],
            'rating' => 4.6,
            'review_count' => 27,
            'related' => [7, 10, 11]
        ]
    ]
];