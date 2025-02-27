<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'ea0b51e45fce33c932743fe0a6036adc00cbcd45',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'ea0b51e45fce33c932743fe0a6036adc00cbcd45',
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
        'squizlabs/php_codesniffer' => array(
            'pretty_version' => '3.11.3',
            'version' => '3.11.3.0',
            'reference' => 'ba05f990e79cbe69b9f35c8c1ac8dca7eecc3a10',
            'type' => 'library',
            'install_path' => __DIR__ . '/../squizlabs/php_codesniffer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
