<?php
/**
 * About Configuration - Can be moved to admin panel later
 */
return [
    'about_content' => [
        'title' => 'Redefining Interior Spaces',
        'content' => '<p>Interia Decor is a premier interior design firm with over 15 years of experience transforming spaces into beautiful, functional environments. Our team of talented designers brings creativity and expertise to every project, whether residential or commercial.</p>
                     <p>Founded in 2008, we started as a small studio and have grown into one of the most respected design firms in the region. Our commitment to quality and customer satisfaction has earned us numerous awards and a loyal client base.</p>',
        'home_title' => 'Crafting Exceptional Spaces',
        'home_content' => 'Inteira Decor: Your premier interior firm in Sylhet, Bangladesh, where modern design meets exceptional craftsmanship. We specialize in comprehensive interior planning and execution, supported by a curated selection of high-quality products available at our Sylhet showroom.',
        'home_button_text' => 'Discover Our Story',
        'hero_image' => 'images/about-hero.jpg',
        'stats' => [
            [
                'value' => 3,
                'label' => 'Years Experience',
                'icon' => 'fa-calendar-alt'
            ],
            [
                'value' => 32,
                'label' => 'Projects Completed',
                'icon' => 'fa-project-diagram'
            ],
            [
                'value' => 0,
                'label' => 'Awards Won',
                'icon' => 'fa-award'
            ],
            [
                'value' => 21,
                'label' => 'Happy Clients',
                'icon' => 'fa-smile'
            ]
        ]
    ],
    'values' => [
        [
            'title' => 'Innovative Design',
            'description' => 'We push boundaries to deliver creative solutions that surprise and delight our clients.',
            'icon' => 'fa-lightbulb'
        ],
        [
            'title' => 'Quality Craftsmanship',
            'description' => 'From materials to execution, we never compromise on the quality of our work.',
            'icon' => 'fa-hammer'
        ],
        [
            'title' => 'Client-Centric',
            'description' => 'Your satisfaction is our priority. We listen carefully to understand your vision.',
            'icon' => 'fa-users'
        ],
        [
            'title' => 'Transparent Process',
            'description' => 'Clear communication and honest pricing throughout your project journey.',
            'icon' => 'fa-comments-dollar'
        ]
    ],
    'team' => [
        'show_team' => true,
        'title' => 'Meet Our Design Experts',
        'subtitle' => 'The talented individuals behind our success',
        'members' => [
            [
                'name' => 'Sarah Johnson',
                'position' => 'Lead Designer',
                'bio' => 'Specializes in modern residential spaces with 12 years of award-winning experience.',
                'image' => 'images/team/sarah.jpg',
                'social' => [
                    'linkedin' => '#',
                    'instagram' => '#'
                ]
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'Commercial Director',
                'bio' => 'Brings unique perspective blending functionality with aesthetic appeal.',
                'image' => 'images/team/michael.jpg',
                'social' => [
                    'twitter' => '#',
                    'linkedin' => '#'
                ]
            ],
            [
                'name' => 'Emma Rodriguez',
                'position' => 'Project Manager',
                'bio' => 'Ensures seamless execution from concept to completion.',
                'image' => 'images/team/emma.jpg',
                'social' => [
                    'facebook' => '#',
                    'instagram' => '#'
                ]
            ],
            [
                'name' => 'David Wilson',
                'position' => 'Materials Specialist',
                'bio' => 'Sources sustainable, high-quality materials for every project.',
                'image' => 'images/team/david.jpg',
                'social' => [
                    'pinterest' => '#',
                    'linkedin' => '#'
                ]
            ]
        ]
    ],
    'testimonials' => [
        [
            'text' => 'Interia Decor transformed our home beyond expectations. Their attention to detail and creative solutions were exceptional.',
            'author' => 'Sarah Johnson',
            'role' => 'Homeowner, Sylhet',
            'image' => 'images/testimonials/client1.jpg'
        ],
        [
            'text' => 'Working with Interia on our office redesign was a pleasure. They perfectly understood our brand and delivered an impressive space.',
            'author' => 'Michael Chen',
            'role' => 'CEO, Tech Solutions',
            'image' => 'images/testimonials/client2.jpg'
        ],
		[
            'text' => 'Working with Interia on our office redesign was a pleasure. They perfectly understood our brand and delivered an impressive space.',
            'author' => 'Mr. Masud',
            'role' => 'Businessman, Home Solutions',
            'image' => 'images/testimonials/client3.jpg'
        ]
    ],
    'styles' => [
        'primary_color' => '#007992',
        'secondary_color' => '#00313f',
        'light_color' => '#f8f9fa',
        'dark_color' => '#212529',
        'text_color' => '#333333',
        'text_light' => '#6c757d'
    ],
    'settings' => [
        'show_stats' => true,
        'show_values' => true,
        'show_testimonials' => true,
        'team_columns' => 3
    ]
];