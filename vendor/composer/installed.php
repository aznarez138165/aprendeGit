<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '513ba63ae5fe311b4d4aa3fd2d884b6fcff1d18b',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '513ba63ae5fe311b4d4aa3fd2d884b6fcff1d18b',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpro/grumphp' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v2.11.0',
            ),
        ),
        'phpro/grumphp-shim' => array(
            'pretty_version' => 'v2.11.0',
            'version' => '2.11.0.0',
            'reference' => 'd2500092e07ce5a6a852122d6561ec082014bad1',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../phpro/grumphp-shim',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
