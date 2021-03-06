<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78740964849909eb890c90dab160362a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'PhpConsole\\' => 11,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'PhpConsole\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-console/php-console/src/PhpConsole',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78740964849909eb890c90dab160362a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78740964849909eb890c90dab160362a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
