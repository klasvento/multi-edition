<?php return
[
    /*
    |--------------------------------------------------------------------------
    | Route
    |--------------------------------------------------------------------------
    |
    | Contains settings about which routes to show the results based on URL 
    | requests.
    |
    | openController: Default boot controller.
    | openFunction: It is the default method of operation of the controller.
    | show404: Forwards the invalid request to the specified URI.
    | requestMethods: Which URI specifies which request methods are valid or 
    |                 invalid.
    | patternType: Regex type for route.
    | changeUri: Used to create a route. ['new regex' => 'old uri']
    |
    */

    'route' =>
    [
        'openController' => 'home',
        'openFunction'   => 'main',
        'show404'        => '',
        'requestMethods' =>
        [
            'page'            => '',
            'disallowMethods' => [],
            'allowMethods'    => []  
        ],
        'patternType'    => 'classic',
        'changeUri'      => []
    ],

    /*
    |--------------------------------------------------------------------------
    | Uri
    |--------------------------------------------------------------------------
    |
    | Contains URI related settings.
    |
    | lang: Language abbreviation becomes available at URI.
    |
    */
    
    'uri' =>
    [
        'lang' => false
    ],

    /*
    |--------------------------------------------------------------------------
    | Processor
    |--------------------------------------------------------------------------
    |
    | Contains Processor library related settings.
    |
    | driver: It is specified which function the Processor::exec() method 
    |         will use.
    |         Options: exec, shell, system, ssh
    | path: The current PHP path. Especially necessary for crontab.
    |
    */

    'processor' =>
    [
        'driver' => 'exec',      
        'path'   => '/usr/bin/php'
    ],

    /*
    |--------------------------------------------------------------------------
    | SSH
    |--------------------------------------------------------------------------
    |
    | Includes SSH connection settings.
    |
    */

    'ssh' =>
    [
        'host'          => '', 
        'user'          => '',  
        'password'      => '',  
        'port'          => 22, 
        'methods'       => [],  
        'callbacks'     => []  
    ],

    /*
    |--------------------------------------------------------------------------
    | Cookie
    |--------------------------------------------------------------------------
    |
    | Contains settings related to cookies. 
    | Configures the parameters of the setcookie function.
    | 
    | encode: The cookie keys are set to which algorithm to encrypt.
    |
    */

    'cookie' =>
    [
        'encode'     => 'super',
        'regenerate' => true,
        'time'       => 604800,
        'path'       => '/',
        'domain'     => '',
        'secure'     => false,
        'httpOnly'   => true
    ],

    /*
    |--------------------------------------------------------------------------
    | Session
    |--------------------------------------------------------------------------
    |
    | Contains settings related to session. 
    | 
    | encode: The cookie keys are set to which algorithm to encrypt.
    |
    */

    'session' =>
    [
        'encode'     => 'super',
        'regenerate' => true,
    ],

   /*
    |--------------------------------------------------------------------------
    | Email
    |--------------------------------------------------------------------------
    |
    | Contains settings related to Email library. 
    | 
    | driver: Email send drivers. [smtp, mail, send, pipe, imap]
    | smtp: Send settings via SMTP.
    | general: General e-mail settings.
    |
    */

    'email' =>
    [
        'driver' => 'smtp',
        'smtp'   =>
        [
            'host'      => '',
            'user'      => '',
            'password'  => '',
            'port'      => 587,
            'keepAlive' => false,
            'timeout'   => 10,
            'encode'    => '',  # empty, tls, ssl
            'dsn'       => false,
            'auth'      => true
        ],
        'general' =>
        [
            'senderMail'    => '',                  # Default Sender E-mail Address.
            'senderName'    => '',                  # Default Sender Name.
            'priority'      => 3,                   # 1, 2, 3, 4, 5
            'charset'       => 'UTF-8',             # Charset Type
            'contentType'   => 'html',              # plain, html
            'multiPart'     => 'mixed',             # mixed, related, alternative
            'xMailer'       => 'ZN',
            'encoding'      => '8bit',              # 8bit, 7bit
            'mimeVersion'   => '1.0',               # MIME Version
            'mailPath'      => '/usr/sbin/sendmail' # Default Mail Path
        ]
    ]
];
