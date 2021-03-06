<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b4ffec6fd9fbb367b8c9ad91619dbcc
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b4ffec6fd9fbb367b8c9ad91619dbcc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b4ffec6fd9fbb367b8c9ad91619dbcc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
