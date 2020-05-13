<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
  // Global settings
  '*' => [
    'allowAdminChanges' => false,
    'allowUpdates' => false,
    'cacheDuration' => 'P30D',
    'cpTrigger' => 'manage',
    'defaultWeekStartDay' => 0,
    'enableGql' => false,
    'maxRevisions' => 10,
    'omitScriptNameInUrls' => true,
    'postCpLoginRedirect' => 'entries',
    'securityKey' => getenv('SECURITY_KEY'),
    'sendPoweredByHeader' => false,
    'siteUrl' => getenv('SITE_URL'),
    'useProjectConfigFile' => true
  ],

  'dev' => [
    'allowAdminChanges' => true,
    'allowUpdates' => true,
    'devMode' => true,
    'elevatedSessionDuration' => 'PT1H',
    'maxInvalidLogins' => 1000,
    'testToEmailAddress' => getenv('TEST_EMAIL'),
    'userSessionDuration' => 'P1W'
  ],

  'staging' => [

  ],

  'production' => [
    'cacheDuration' => 'P5D',
    'verificationCodeDuration' => 'P7D',
    'userSessionDuration' => 'PT1H'
  ],
];
