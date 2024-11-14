<?php

return [
    [
        'label' => 'Dashboard',
        'icon' => 'monitor',
        'route' => 'dashboard',
    ],
    [
        'label' => 'Master Data',
        'icon' => 'view-module',
        'submenu' => [
            [
                'label' => 'Kategori',
                'route' => 'kategori',
            ],
            [
                'label' => 'Penerbit',
                'route' => 'penerbit',
            ]
        ],
    ],
    [
        'label' => 'Manajemen Buku',
        'icon' => 'library-books',
        'route' => 'buku',
    ],
    [
        'label' => 'Data Anggota',
        'icon' => 'account-multiple',
        'route' => 'anggota',
    ],
    [
        'label' => 'Peminjaman',
        'icon' => 'library',
    ],
    [
        'label' => 'Tentang',
        'icon' => 'information',
    ],
];
