<?php

return [
    'name' => '',
    'sidebar' => [
        'fixed' => true,

        'menu-items' => [

            [
                'has-treeview' => false,
                'icon' => 'fas fa-cogs',
                'name' => 'Application',
                'route' => 'dashboard.index',
                'children' => '',
            ], 
            [
                'has-treeview' => true,
                'name' => 'Category',
                'icon' => 'fas fa-tasks',
                'route' => '',
                'children' => [
                    [
                        'icon' => '',
                        'name' => 'Application',
                        'route' => 'dashboard.index'
                    ],                 
                ]
            ]
            
        ]  
    ]       
];