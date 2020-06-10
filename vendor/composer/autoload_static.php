<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1a5132e9bec042a8d9ddeab94af8467
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1a5132e9bec042a8d9ddeab94af8467::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1a5132e9bec042a8d9ddeab94af8467::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
