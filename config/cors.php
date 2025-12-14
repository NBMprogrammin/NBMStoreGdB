<?php

return [
    // 'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout'],
    
    // 'allowed_methods' => ['*'],
    
    // 'allowed_origins' => ['http://localhost:5173', 'http://127.0.0.1:8000', 'https://NBMstoreGBd.github.io'],
    
    // 'allowed_headers' => ['*'],
    
    // 'exposed_headers' => [],
    
    // 'max_age' => 0,
    
    // 'supports_credentials' => true,

    // 'paths' => ['api/*', 'sanctum/csrf-cookie', 'login', 'logout', 'bss/*'],
    
    // 'supports_credentials' => true,

    'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'],  // للتطوير، حدد نطاقك لاحقاً
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
    
];