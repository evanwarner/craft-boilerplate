<?php
/**
 * @copyright 2020 Evan Warner
 * @link https://www.evanwarner.com
 */

namespace modules\sitemodule;

use Craft;
use craft\log\FileTarget;
use yii\base\Module;

/**
 * SiteModule
 *
 * @author Evan Warner
 * @since 1.0.0
 */
class SiteModule extends Module
{
    // Static Properties
    // =========================================================================

    /**
     * Static property that is an instance of this module class so that it can
     * be accessed via SiteModule::$instance
     *
     * @var SiteModule
     */
    public static $instance;

    // Public Methods
    // =========================================================================

    /**
     * Initializes the module.
     */
    public function init()
    {
        // Set a @modules alias pointed to the modules/ directory
        Craft::setAlias('@modules', dirname(__DIR__));

        // Set the controllerNamespace based on whether this is a console or web request
        if (Craft::$app->getRequest()->getIsConsoleRequest()) {
            $this->controllerNamespace = 'modules\\console\\controllers';
        } else {
            $this->controllerNamespace = 'modules\\controllers';
        }

        parent::init();

        self::$instance = $this;

        // Use a custom log file for all modules
        $modulesLogFile = new FileTarget([
            'logFile' => '@storage/logs/site.log',
            'categories' => ['modules\*']
        ]);
        Craft::getLogger()->dispatcher->targets[] = $modulesLogFile;
    }
}
