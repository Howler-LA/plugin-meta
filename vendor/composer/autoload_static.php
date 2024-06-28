<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34e0980a24ba2b98e43c0bb6988353bb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34e0980a24ba2b98e43c0bb6988353bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34e0980a24ba2b98e43c0bb6988353bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34e0980a24ba2b98e43c0bb6988353bb::$classMap;

        }, null, ClassLoader::class);
    }
}
