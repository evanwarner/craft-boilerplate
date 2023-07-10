<?php
/**
 * @copyright 2020 Evan Warner
 * @link https://www.evanwarner.com
 */

namespace modules\site;

use Craft;
use craft\log\MonologTarget;
use Psr\Log\LogLevel;
use yii\base\Module;

/**
 * SiteModule
 *
 * @author Evan Warner
 * @since 1.0.0
 */
class Site extends Module
{
    // Public Methods ==========================================================

    /**
     * Initializes the module.
     */
    public function init(): void
    {
        // Set a @modules alias pointed to the modules/ directory
        Craft::setAlias('@modules', dirname(__DIR__));

        // Set the controllerNamespace based on whether this is a console or web request
        // TODO: rename with the module
        if (Craft::$app->getRequest()->getIsConsoleRequest()) {
            $this->controllerNamespace = 'modules\\site\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\site\\controllers';
        }

        parent::init();

        // Use a custom log file for this module
        // TODO: rename with the module
        $moduleLogFile = new MonologTarget([
            'name' => 'site',
            'categories' => ['modules\site\*'],
            'level' => LogLevel::INFO,
            'logContext' => false,
            'allowLineBreaks' => true,
        ]);
        Craft::getLogger()->dispatcher->targets[] = $moduleLogFile;
    }
}
