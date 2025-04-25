<?php

use Dotenv\Dotenv;

// Initialize Dotenv
Dotenv::createImmutable(ROOT_DIR)->load();


if (! function_exists('env')) {
    function env($key, $default = null)
    {
        return $_ENV[$key] ?? $default;
    }
}
