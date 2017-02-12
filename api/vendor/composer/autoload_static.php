<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c06f15cfb8b583eaf632665e868ccbf
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/league/color-extractor/src',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'claviska' => 
            array (
                0 => __DIR__ . '/..' . '/claviska/simpleimage/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit2c06f15cfb8b583eaf632665e868ccbf::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2c06f15cfb8b583eaf632665e868ccbf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
