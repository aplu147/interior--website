<?php
$projects = [
    1 => [
        'id' => 1,
        'title' => 'Modern Apartment',
        'short_title' => 'Modern Apartment Design',
        'category' => ['residential'],
        'location' => 'New York, USA',
        'year' => '2023',
        'size' => '1800 sq ft',
        'short_description' => 'Contemporary design with smart space utilization',
        'long_description' => '<p>This modern apartment in the heart of New York features clean lines, open spaces, and smart storage solutions. The design maximizes natural light while maintaining privacy in this urban setting. We used a neutral color palette with bold accent pieces to create visual interest.</p>',
        'features' => ['Open floor plan', 'Smart home integration', 'Custom built-ins', 'Energy-efficient lighting'],
        'images' => [
            'main' => 'images/projects/project1.jpg',
            'gallery' => ['images/projects/project1-1.jpg', 'images/projects/project1-2.jpg']
        ],
        'products' => [
            [
                'id' => 101,
                'name' => 'Modular Sofa System',
                'image' => 'images/products/sofa-system.jpg',
                'category' => 'Living Room',
                'usage' => 'Main living area seating',
                'quantity' => 2
            ],
            [
                'id' => 102,
                'name' => 'Designer Coffee Table',
                'image' => 'images/products/coffee-table.jpg',
                'category' => 'Living Room',
                'usage' => 'Center table',
                'quantity' => 1
            ]
        ],
        'badge' => 'Featured',
        'is_featured' => true,
        'is_new' => false
    ],
    2 => [
        'id' => 2,
        'title' => 'Luxury Villa',
        'short_title' => 'Luxury Villa Design',
        'category' => ['residential'],
        'location' => 'Miami, USA',
        'year' => '2023',
        'size' => '3200 sq ft',
        'short_description' => 'Luxury waterfront property with modern amenities',
        'long_description' => '<p>This stunning waterfront villa in Miami combines luxury living with breathtaking ocean views. The design incorporates natural materials like teak and marble to complement the coastal environment. Floor-to-ceiling glass walls blur the boundaries between indoor and outdoor spaces.</p>',
        'features' => ['Infinity pool', 'Smart home system', 'Home theater', 'Gourmet kitchen'],
        'images' => [
            'main' => 'images/projects/project2.jpg',
            'gallery' => ['images/projects/project2-1.jpg', 'images/projects/project2-2.jpg']
        ],
        'products' => [
            [
                'id' => 201,
                'name' => 'Outdoor Lounge Set',
                'image' => 'images/products/lounge-set.jpg',
                'category' => 'Outdoor',
                'usage' => 'Patio furniture',
                'quantity' => 1
            ],
            [
                'id' => 202,
                'name' => 'Swimming Pool Lights',
                'image' => 'images/products/pool-lights.jpg',
                'category' => 'Exterior',
                'usage' => 'Pool illumination',
                'quantity' => 6
            ]
        ],
        'badge' => 'New',
        'is_featured' => true,
        'is_new' => true
    ],
    3 => [
        'id' => 3,
        'title' => 'Cozy Mountain Cabin',
        'short_title' => 'Mountain Cabin Retreat',
        'category' => ['residential', 'interior'],
        'location' => 'Aspen, Colorado',
        'year' => '2022',
        'size' => '1500 sq ft',
        'short_description' => 'Rustic yet modern cabin with breathtaking mountain views',
        'long_description' => '<p>This mountain retreat combines rustic charm with modern comforts. Featuring exposed beams, a stone fireplace, and large windows to take in the stunning views. The design uses natural materials like reclaimed wood and local stone to blend with the environment.</p>',
        'features' => ['Great room with vaulted ceilings', 'Outdoor hot tub', 'Custom woodwork', 'Energy efficient design'],
        'images' => [
            'main' => 'images/projects/project3.jpg',
            'gallery' => ['images/projects/project3-1.jpg', 'images/projects/project3-2.jpg']
        ],
        'products' => [
            [
                'id' => 301,
                'name' => 'Wood Burning Stove',
                'image' => 'images/products/wood-stove.jpg',
                'category' => 'Heating',
                'usage' => 'Living room heating',
                'quantity' => 1
            ],
            [
                'id' => 302,
                'name' => 'Handcrafted Dining Table',
                'image' => 'images/products/dining-table.jpg',
                'category' => 'Dining Room',
                'usage' => 'Main dining area',
                'quantity' => 1
            ]
        ],
        'badge' => 'Popular',
        'is_featured' => true,
        'is_new' => false
    ],
    4 => [
        'id' => 4,
        'title' => 'Urban Office Space',
        'short_title' => 'Contemporary Office Design',
        'category' => ['commercial'],
        'location' => 'Chicago, USA',
        'year' => '2023',
        'size' => '5000 sq ft',
        'short_description' => 'Modern workspace promoting collaboration and productivity',
        'long_description' => '<p>This innovative office design for a tech startup features flexible workspaces, collaborative areas, and quiet zones. The open layout is balanced with sound-absorbing materials and greenery to create a productive yet comfortable environment.</p>',
        'features' => ['Modular workstations', 'Green walls', 'Smart lighting system', 'Acoustic panels'],
        'images' => [
            'main' => 'images/projects/project4.jpg',
            'gallery' => ['images/projects/project4-1.jpg', 'images/projects/project4-2.jpg']
        ],
        'products' => [
            [
                'id' => 401,
                'name' => 'Ergonomic Office Chair',
                'image' => 'images/products/office-chair.jpg',
                'category' => 'Office',
                'usage' => 'Workstation seating',
                'quantity' => 25
            ],
            [
                'id' => 402,
                'name' => 'Collaboration Table',
                'image' => 'images/products/conference-table.jpg',
                'category' => 'Office',
                'usage' => 'Meeting area',
                'quantity' => 3
            ]
        ],
        'badge' => 'Featured',
        'is_featured' => true,
        'is_new' => false
    ],
    5 => [
        'id' => 5,
        'title' => 'Boutique Hotel Lobby',
        'short_title' => 'Luxury Hotel Lobby',
        'category' => ['hospitality', 'interior'],
        'location' => 'Los Angeles, USA',
        'year' => '2023',
        'size' => '3500 sq ft',
        'short_description' => 'Sophisticated lobby design for a luxury boutique hotel',
        'long_description' => '<p>The lobby design creates a memorable first impression with its dramatic double-height space, custom lighting fixtures, and curated art collection. The mix of textures and materials conveys both luxury and comfort, setting the tone for the guest experience.</p>',
        'features' => ['Custom chandelier', 'Living green wall', 'Artisanal reception desk', 'Interactive digital displays'],
        'images' => [
            'main' => 'images/projects/project5.jpg',
            'gallery' => ['images/projects/project5-1.jpg', 'images/projects/project5-2.jpg']
        ],
        'products' => [
            [
                'id' => 501,
                'name' => 'Designer Lounge Chairs',
                'image' => 'images/products/lounge-chair.jpg',
                'category' => 'Lobby',
                'usage' => 'Seating area',
                'quantity' => 12
            ],
            [
                'id' => 502,
                'name' => 'Decorative Screen',
                'image' => 'images/products/room-divider.jpg',
                'category' => 'Lobby',
                'usage' => 'Space division',
                'quantity' => 2
            ]
        ],
        'badge' => 'Featured',
        'is_featured' => true,
        'is_new' => false
    ],
    6 => [
        'id' => 6,
        'title' => 'Minimalist Townhouse',
        'short_title' => 'Urban Townhouse',
        'category' => ['residential'],
        'location' => 'Seattle, USA',
        'year' => '2022',
        'size' => '2200 sq ft',
        'short_description' => 'Clean-lined design maximizing urban living space',
        'long_description' => '<p>This three-story townhouse features a minimalist aesthetic with warm wood accents. The design focuses on functionality without sacrificing style, with custom storage solutions and multi-purpose spaces. Large skylights bring natural light deep into the narrow footprint.</p>',
        'features' => ['Floating staircase', 'Rooftop deck', 'Built-in storage', 'Smart home technology'],
        'images' => [
            'main' => 'images/projects/project6.jpg',
            'gallery' => ['images/projects/project6-1.jpg', 'images/projects/project6-2.jpg']
        ],
        'products' => [
            [
                'id' => 601,
                'name' => 'Wall-mounted Shelving System',
                'image' => 'images/products/wall-shelves.jpg',
                'category' => 'Storage',
                'usage' => 'Living room storage',
                'quantity' => 4
            ],
            [
                'id' => 602,
                'name' => 'Compact Dining Set',
                'image' => 'images/products/dining-set.jpg',
                'category' => 'Dining Room',
                'usage' => 'Kitchen dining area',
                'quantity' => 1
            ]
        ],
        'badge' => '',
        'is_featured' => false,
        'is_new' => false
    ],
    7 => [
        'id' => 7,
        'title' => 'Wellness Center',
        'short_title' => 'Spa & Wellness Center',
        'category' => ['commercial', 'hospitality'],
        'location' => 'Scottsdale, Arizona',
        'year' => '2023',
        'size' => '8000 sq ft',
        'short_description' => 'Serene environment promoting relaxation and rejuvenation',
        'long_description' => '<p>This wellness center design creates a tranquil oasis with natural materials, soft lighting, and calming water features. The layout guides guests through a carefully choreographed experience from arrival through treatment rooms to relaxation areas.</p>',
        'features' => ['Saltwater pool', 'Aromatherapy infusion', 'Heated stone loungers', 'Meditation garden'],
        'images' => [
            'main' => 'images/projects/project7.jpg',
            'gallery' => ['images/projects/project7-1.jpg', 'images/projects/project7-2.jpg']
        ],
        'products' => [
            [
                'id' => 701,
                'name' => 'Massage Tables',
                'image' => 'images/products/massage-table.jpg',
                'category' => 'Spa',
                'usage' => 'Treatment rooms',
                'quantity' => 8
            ],
            [
                'id' => 702,
                'name' => 'Water Feature',
                'image' => 'images/products/water-feature.jpg',
                'category' => 'Lobby',
                'usage' => 'Reception area',
                'quantity' => 1
            ]
        ],
        'badge' => 'New',
        'is_featured' => true,
        'is_new' => true
    ],
    8 => [
        'id' => 8,
        'title' => 'Modern Farmhouse',
        'short_title' => 'Contemporary Farmhouse',
        'category' => ['residential'],
        'location' => 'Austin, Texas',
        'year' => '2022',
        'size' => '2800 sq ft',
        'short_description' => 'Fresh take on farmhouse style with modern elements',
        'long_description' => '<p>This modern farmhouse blends traditional forms with contemporary details. The design features a classic gabled roof paired with black-framed windows and a mix of siding materials. The interior balances rustic charm with sleek, modern finishes.</p>',
        'features' => ['Wraparound porch', 'Open kitchen concept', 'Barn-style doors', 'Energy-efficient windows'],
        'images' => [
            'main' => 'images/projects/project8.jpg',
            'gallery' => ['images/projects/project8-1.jpg', 'images/projects/project8-2.jpg']
        ],
        'products' => [
            [
                'id' => 801,
                'name' => 'Farmhouse Sink',
                'image' => 'images/products/farmhouse-sink.jpg',
                'category' => 'Kitchen',
                'usage' => 'Kitchen workspace',
                'quantity' => 1
            ],
            [
                'id' => 802,
                'name' => 'Sliding Barn Door',
                'image' => 'images/products/barn-door.jpg',
                'category' => 'Interior',
                'usage' => 'Room separation',
                'quantity' => 3
            ]
        ],
        'badge' => 'Popular',
        'is_featured' => true,
        'is_new' => false
    ]
];

$featuredProjects = array_filter($projects, function($project) {
    return $project['is_featured'] ?? false;
});
?>