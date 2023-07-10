<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

use craft\helpers\App;

return [
    '*' => [
        'allowAdminChanges' => false,
        'allowUpdates' => false,
        'cacheDuration' => 'P30D',
        'cpTrigger' => 'manage',
        'defaultWeekStartDay' => 0,
        'enableGql' => false,
        'errorTemplatePrefix' => '_',
        'maxRevisions' => 10,
        'omitScriptNameInUrls' => true,
        'postCpLoginRedirect' => 'entries',
        'securityKey' => App::env('CRAFT_SECURITY_KEY'),
        'sendPoweredByHeader' => false,
        'upscaleImages' => false,
        'useEmailAsUsername' => true,
    ],

    'dev' => [
        'aliases' => [
            '@webroot' => dirname(__DIR__, 2) . '/webroot',
        ],
        'allowAdminChanges' => true,
        'allowUpdates' => true,
        'devMode' => true,
        'elevatedSessionDuration' => 'PT1H',
        'maxInvalidLogins' => 1000,
        'testToEmailAddress' => App::env('TEST_EMAIL'),
        'userSessionDuration' => 'P7D',
    ],

    'staging' => [
        'disallowRobots' => true,
    ],

    'production' => [
        'verificationCodeDuration' => 'P7D',
        'userSessionDuration' => 'PT1H',
    ],
];
