<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98d01f86090f7dc446f4a718f089d66a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit98d01f86090f7dc446f4a718f089d66a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98d01f86090f7dc446f4a718f089d66a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
