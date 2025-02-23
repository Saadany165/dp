<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita75badeae0881751abf722852b16de23
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Test\\Packeg\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Test\\Packeg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita75badeae0881751abf722852b16de23::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita75badeae0881751abf722852b16de23::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita75badeae0881751abf722852b16de23::$classMap;

        }, null, ClassLoader::class);
    }
}
