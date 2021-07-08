<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
            'orders' => 'c,r,u,d',
            'announcement' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            'brands' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'history' => 'c,r,u,d',
            'roles' => 'c,r,u,d',

        ],
        'admin' => [
            'users' => 'r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
            'orders' => 'c,r,u,d',
            'announcement' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            'brands' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'history' => 'c,r,u,d',
        ],
        'mod' => [
            'profile' => 'r,u',
            'orders' => 'r,u',
            'announcement' => 'r,',
            'history' => 'r',
        ]
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
