<?php
return [
    'menu' => [
        [
            'text' => 'Home',
            'href' => '/',
            'type' => 'link',
        ],
        [
            'text' => 'How it Works',
            'href' => '/how-it-works',
            'type' => 'link',
        ],
        [
            'text' => 'Blog',
            'href' => '/blog',
            'type' => 'link',
        ],
        [
            'text' => 'About',
            'href' => '/about',
            'type' => 'link',
        ],
    ],
    'themes' => [
        'blue' => [
            'color' => 'white',
            'background' => 'brand-secondary',
            'image' => '/images/Header-image-2.svg'
        ],
        'dark' => [
            'color' => 'white',
            'background' => 'brand-primary',
            'image' => '/images/header-image-1.svg'
        ],
        'teal' => [
            'color' => 'white',
            'background' => 'brand-accent',
            'image' => '/images/Header-image-2.svg'
        ],
    ],
];