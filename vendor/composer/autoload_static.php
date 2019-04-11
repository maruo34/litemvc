<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb1cf05c8e02206d6da330de09884291
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kernel\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kernel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/kernel',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb1cf05c8e02206d6da330de09884291::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb1cf05c8e02206d6da330de09884291::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcb1cf05c8e02206d6da330de09884291::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
