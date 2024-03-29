<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1f8532a3e97e1759c32c6f2b3f7019f7
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

        spl_autoload_register(array('ComposerAutoloaderInit1f8532a3e97e1759c32c6f2b3f7019f7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1f8532a3e97e1759c32c6f2b3f7019f7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit1f8532a3e97e1759c32c6f2b3f7019f7::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
