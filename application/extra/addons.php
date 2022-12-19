<?php

return [
    'autoload' => false,
    'hooks' => [
        'app_init' => [
            'banip',
            'barcode',
            'qrcode',
        ],
        'config_init' => [
            'cropper',
        ],
    ],
    'route' => [
        '/barcode$' => 'barcode/index/index',
        '/barcode/build$' => 'barcode/index/build',
        '/example$' => 'example/index/index',
        '/example/d/[:name]' => 'example/demo/index',
        '/example/d1/[:name]' => 'example/demo/demo1',
        '/example/d2/[:name]' => 'example/demo/demo2',
        '/qrcode$' => 'qrcode/index/index',
        '/qrcode/build$' => 'qrcode/index/build',
    ],
    'priority' => [],
    'domain' => '',
];
