<?php return array(
    'root' => array(
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => 'automattic/vaultpress',
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-autoloader' => array(
            'pretty_version' => '2.11.x-dev',
            'version' => '2.11.9999999.9999999-dev',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../automattic/jetpack-autoloader',
            'aliases' => array(),
            'reference' => 'f9e5f92d94f00a80ba6d9d3e06f6e29f3a535f0e',
            'dev_requirement' => false,
        ),
        'automattic/jetpack-logo' => array(
            'pretty_version' => '1.5.x-dev',
            'version' => '1.5.9999999.9999999-dev',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-logo',
            'aliases' => array(),
            'reference' => 'fa3f293692d4f8a497aa3c0f8ad83aaef3a050e4',
            'dev_requirement' => false,
        ),
        'automattic/vaultpress' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
    ),
);
