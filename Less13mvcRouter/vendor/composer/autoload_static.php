<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6eea571fdce10c0cf32cd7802202080
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\ContactsController' => __DIR__ . '/../..' . '/app/Controllers/ContactsController.php',
        'App\\Controllers\\ControllerInterface' => __DIR__ . '/../..' . '/app/Controllers/ControllerInterface.php',
        'App\\Controllers\\Error404' => __DIR__ . '/../..' . '/app/Controllers/Error404.php',
        'App\\Controllers\\PostsController' => __DIR__ . '/../..' . '/app/Controllers/PostsController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/Controllers/UsersController.php',
        'App\\Models\\ModelContacts' => __DIR__ . '/../..' . '/app/Models/ModelContacts.php',
        'App\\Models\\ModelPosts' => __DIR__ . '/../..' . '/app/Models/ModelPosts.php',
        'App\\Models\\ModelUsers' => __DIR__ . '/../..' . '/app/Models/ModelUsers.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'Core\\View' => __DIR__ . '/../..' . '/core/View.php',
        'Core\\orm\\Select' => __DIR__ . '/../..' . '/core/orm/Select.php',
        'Core\\orm\\common\\Connector' => __DIR__ . '/../..' . '/core/orm/common/Connector.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6eea571fdce10c0cf32cd7802202080::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6eea571fdce10c0cf32cd7802202080::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb6eea571fdce10c0cf32cd7802202080::$classMap;

        }, null, ClassLoader::class);
    }
}
