<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc181d72d4bfbb2797b3c805d404c6bb6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Platformsh\\ConfigReader\\' => 24,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Platformsh\\ConfigReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/platformsh/config-reader/src',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc181d72d4bfbb2797b3c805d404c6bb6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc181d72d4bfbb2797b3c805d404c6bb6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc181d72d4bfbb2797b3c805d404c6bb6::$classMap;

        }, null, ClassLoader::class);
    }
}
