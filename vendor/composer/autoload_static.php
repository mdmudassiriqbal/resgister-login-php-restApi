<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2d09647a3bae76a1ca6aea4caa0665d
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2d09647a3bae76a1ca6aea4caa0665d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2d09647a3bae76a1ca6aea4caa0665d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
