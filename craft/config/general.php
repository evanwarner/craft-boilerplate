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
        'aliases' => [
            '@webroot' => dirname(__DIR__, 2) . '/webroot',
        ],
        'allowAdminChanges' => false,
        'allowUpdates' => false,
        'cacheDuration' => 'P30D',
        'cpTrigger' => 'manage',
        'defaultSearchTermOptions' => [
            'subLeft' => true,
            'subRight' => true,
        ],
        'defaultWeekStartDay' => 0,
        'enableGql' => false,
        'errorTemplatePrefix' => '_',
        'maxRevisions' => 10,
        'omitScriptNameInUrls' => true,
        'postCpLoginRedirect' => 'entries',
        'sendPoweredByHeader' => false,
        'upscaleImages' => false,
        'useEmailAsUsername' => true,
        'verificationCodeDuration' => 'P7D',
    ],

    'dev' => [
        'allowAdminChanges' => true,
        'allowUpdates' => true,
        'devMode' => true,
        'disallowRobots' => true,
        'elevatedSessionDuration' => 'PT1H',
        'maxInvalidLogins' => 1000,
        'testToEmailAddress' => App::env('TEST_EMAIL'),
        'userSessionDuration' => 'P7D',
    ],

    'staging' => [
        'disallowRobots' => true,
    ],

    'production' => [

    ],
];
