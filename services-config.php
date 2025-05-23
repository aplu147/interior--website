<?php
/**
 * Services Configuration - Can be moved to admin panel later
 */
return [
    'services' => [
        'main_title' => 'Our Interior Design Services',
        'main_description' => 'Premium interior design services tailored to your needs',
        'process_title' => 'Our Design Process',
        'process_subtitle' => 'How we bring your vision to life',
        'home_title' => 'Elevate Your Spaces',
        'home_description' => 'Premium interior solutions tailored to your vision',
        'home_button_text' => 'View All Services',
        'featured_service' => 2 // ID of the featured service
    ],
    'service_list' => [
        1 => [
            'title' => 'Residential Design',
            'short_description' => 'Transform your living spaces with our customized home interior solutions that blend functionality with aesthetic appeal.',
            'full_description' => '<p>Our residential design service transforms houses into homes that reflect your personality and lifestyle. We work closely with you to understand your needs, preferences, and aspirations to create spaces that are both beautiful and functional.</p>
                                 <p>From initial concept to final installation, our team handles every detail to ensure a seamless design experience. We specialize in space planning, material selection, color coordination, and custom furniture design to create interiors that are uniquely yours.</p>',
            'icon' => 'fa-home',
            'image' => 'images/services/residential.jpg',
            'features' => [
                'Complete home interiors',
                'Space planning',
                'Custom furniture design',
                'Material selection',
                'Color consultation'
            ],
            'process' => [
                'Initial consultation to understand your needs',
                'Space measurement and assessment',
                'Concept development and presentation',
                'Design refinement based on feedback',
                'Material and furniture selection',
                'Project implementation',
                'Final walkthrough and styling'
            ],
            'show_on_homepage' => true
        ],
        2 => [
            'title' => 'Commercial Design',
            'short_description' => 'Create productive and brand-aligned workspaces with our professional commercial interior design services.',
            'full_description' => '<p>Our commercial design services help businesses create workspaces that enhance productivity, reflect brand identity, and impress clients. We understand the unique requirements of commercial spaces and design solutions that meet functional needs while creating an inspiring environment.</p>
                                 <p>Whether you need an office, retail space, or hospitality venue, we combine aesthetics with practicality to deliver designs that support your business goals.</p>',
            'icon' => 'fa-building',
            'image' => 'images/services/commercial.jpg',
            'features' => [
                'Office interiors',
                'Retail spaces',
                'Brand integration',
                'Space optimization',
                'Employee productivity focus'
            ],
            'process' => [
                'Business needs assessment',
                'Brand identity integration',
                'Space planning for workflow',
                'Design concept development',
                'Material and furniture selection',
                'Project management',
                'Final installation'
            ],
            'show_on_homepage' => true
        ],
        3 => [
            'title' => 'Space Planning',
            'short_description' => 'Optimize your space utilization with our professional layout and space optimization services.',
            'full_description' => '<p>Our space planning service helps you make the most of your available area, whether residential or commercial. We analyze traffic flow, functional requirements, and aesthetic preferences to create layouts that maximize both utility and beauty.</p>
                                 <p>Using advanced 3D visualization tools, we show you exactly how your space will look and function before any physical changes are made.</p>',
            'icon' => 'fa-pencil-ruler',
            'image' => 'images/services/space-planning.jpg',
            'features' => [
                '3D visualizations',
                'Traffic flow analysis',
                'Functional layouts',
                'Furniture placement',
                'Storage optimization'
            ],
            'process' => [
                'Initial space assessment',
                'Client requirements analysis',
                'Preliminary layout options',
                '3D visualization creation',
                'Final plan refinement',
                'Implementation guidance'
            ],
            'show_on_homepage' => true
        ],
        4 => [
            'title' => 'Custom Furniture',
            'short_description' => 'Bespoke furniture pieces crafted to your exact specifications, matching your space and style perfectly.',
            'full_description' => '<p>Our custom furniture service creates one-of-a-kind pieces designed specifically for your space and needs. We work with skilled craftsmen to produce furniture that combines exceptional quality with unique design.</p>
                                 <p>From concept sketches to final fabrication, we oversee every detail to ensure the finished piece exceeds your expectations.</p>',
            'icon' => 'fa-couch',
            'image' => 'images/services/furniture.jpg',
            'features' => [
                'Made-to-measure designs',
                'Premium materials',
                'Unique style',
                'Space-specific solutions',
                'Quality craftsmanship'
            ],
            'process' => [
                'Needs assessment',
                'Concept development',
                'Material selection',
                'Design approval',
                'Fabrication',
                'Delivery and installation'
            ],
            'show_on_homepage' => false
        ],
		5 => [
            'title' => 'Color Consultation',
            'short_description' => 'Select the perfect color palette to create the desired mood and atmosphere in your space:',
            'full_description' => '<p>Our residential design service transforms houses into homes that reflect your personality and lifestyle. We work closely with you to understand your needs, preferences, and aspirations to create spaces that are both beautiful and functional.</p>
                                 <p>From initial concept to final installation, our team handles every detail to ensure a seamless design experience. We specialize in space planning, material selection, color coordination, and custom furniture design to create interiors that are uniquely yours.</p>',
            'icon' => 'fa-palette',
            'image' => 'images/services/paint.jpg',
            'features' => [
                'Color psychology analysis',
                'Paint and finish selection',
                'Custom color matching',
                'Material coordination',
                'Lighting considerations'
            ],
            'process' => [
                'Initial consultation to understand your needs',
                'Space measurement and assessment',
                'Concept development and presentation',
                'Design refinement based on feedback',
                'Material selection',
                'Project implementation',
                'Final walkthrough and styling'
            ],
            'show_on_homepage' => true
        ]
    ],
    'design_process' => [
        'Initial Consultation',
        'Concept Development',
        'Design Refinement',
        'Implementation',
        'Final Reveal'
    ],
    'styles' => [
        'primary_color' => '#0c4b62',
        'secondary_color' => '#007992',
        'accent_color' => '#0d6efd',
        'card_background' => '#ffffff'
    ]
];
?>