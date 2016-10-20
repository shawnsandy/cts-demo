<?php

/*
 * This file is part of Laravel Shield.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | HTTP Basic Auth Credentials
    |--------------------------------------------------------------------------
    |
    | The user credentials which are used when logging in with HTTP basic
    | authentication. You can hash new user credentials by running the artisan
    | command shield:hash.
    |
    */

    'users' => [
        'main' => [
            '$2y$10$zkPg5QVpkdc7Zncp75.AYeMXWbhZbXPG5WuIfuG0oxpJR1dobPsIe',
            '$2y$10$Tmq19rhZlWiQeEf4Kcjpu.vQUk8ETfJ8SQmd61.wcDM5tX2anvfN.'
        ],
    ],

];
