<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd67467ea4973722f8d36c76cfb138e1e
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

        spl_autoload_register(array('ComposerAutoloaderInitd67467ea4973722f8d36c76cfb138e1e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd67467ea4973722f8d36c76cfb138e1e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitd67467ea4973722f8d36c76cfb138e1e::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
