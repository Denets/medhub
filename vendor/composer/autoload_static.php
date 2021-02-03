<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e99a3f108cd5d7e437d151df551774d
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Route\\' => 6,
        ),
        'D' => 
        array (
            'DB\\' => 3,
        ),
        'A' => 
        array (
            'App\\Model\\' => 10,
            'App\\Handler\\' => 12,
            'App\\Controller\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Route\\' => 
        array (
            0 => __DIR__ . '/../..' . '/route',
        ),
        'DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Handler\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/classes',
        ),
        'App\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e99a3f108cd5d7e437d151df551774d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e99a3f108cd5d7e437d151df551774d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
