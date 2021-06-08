<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49f600bd062ee8136899aa01b9467ca5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49f600bd062ee8136899aa01b9467ca5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49f600bd062ee8136899aa01b9467ca5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49f600bd062ee8136899aa01b9467ca5::$classMap;

        }, null, ClassLoader::class);
    }
}
