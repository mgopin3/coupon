<?php return array(
    'root' => array(
        'name' => 'root/send-grid-mail',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'root/send-grid-mail' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sendgrid/php-http-client' => array(
            'pretty_version' => '3.14.4',
            'version' => '3.14.4.0',
            'reference' => '6d589564522be290c7d7c18e51bcd8b03aeaf0b6',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sendgrid/php-http-client',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'sendgrid/sendgrid' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '9335dca98bc64456a72db73469d1dd67db72f6ea',
            'type' => 'library',
            'install_path' => __DIR__ . '/../sendgrid/sendgrid',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'sendgrid/sendgrid-php' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'starkbank/ecdsa' => array(
            'pretty_version' => '0.0.5',
            'version' => '0.0.5.0',
            'reference' => '484bedac47bac4012dc73df91da221f0a66845cb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../starkbank/ecdsa',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
