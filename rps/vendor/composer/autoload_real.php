<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd7bdac902368392e0373254c0e2ccce5
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitd7bdac902368392e0373254c0e2ccce5', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd7bdac902368392e0373254c0e2ccce5', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd7bdac902368392e0373254c0e2ccce5::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
