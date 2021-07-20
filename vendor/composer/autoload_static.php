<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2cf445ba2c5a7103384c18840028b9dd
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WP2FA\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WP2FA\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2cf445ba2c5a7103384c18840028b9dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2cf445ba2c5a7103384c18840028b9dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2cf445ba2c5a7103384c18840028b9dd::$classMap;

        }, null, ClassLoader::class);
    }
}
