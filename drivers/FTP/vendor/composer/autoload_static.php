<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitded743dd47b5159ba9a60288df6d90cf
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Touki\\FTP' => 
            array (
                0 => __DIR__ . '/..' . '/touki/ftp/lib',
                1 => __DIR__ . '/..' . '/touki/ftp/tests',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitded743dd47b5159ba9a60288df6d90cf::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}