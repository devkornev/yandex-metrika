<?php

/**
 * Настройки Яндекс-метрики
 */
return [
    'cache'         => 60*30,                           // Время жизни кэша в секундах
    'counter_id'    => '',                              // Id счетчика Яндекс-метрики
    'token'         => env('YANDEX_METRIKA_TOKEN', ''), // oauth token
];
