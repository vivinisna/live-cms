<?php

return [
    'domain' => env('APP_DOMAIN', 'livecms.dev'),

    'slugs' => [
        'admin'         => '@',
        'article'       => 'a',
        'category'      => 'cat',
        'tag'           => 'tag',
        'staticpage'    => 'p',
        'team'          => 't',
        'project'       => 'x',
        'projectcategory'   => 'x-cat',
        'client'        => 'c',
    ],

    'themes' => [
        'admin' => 'adminLTE',
        'front' => 'timer',
    ],
];
