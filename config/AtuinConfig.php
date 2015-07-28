<?php

namespace atuin\routes\config;

use atuin\config\models\ModelConfig;


/**
 * Class ConfigSkeleton
 * @package common\engine\module_skeleton\libraries
 *
 * Class called to install a module in the CMS.
 *
 * Here must be all the automatic changes in the system that will be necessary to install a new module.
 *
 */
class AtuinConfig extends \atuin\skeleton\config\AtuinConfig
{

    /**
     * @inheritdoc
     */
    public function upMigration()
    {

    }

    /**
     * @inheritdoc
     */
    public function downMigration()
    {

    }

    /**
     * @inheritdoc
     */
    public function upMenu()
    {

    }


    /**
     * @inheritdoc
     */
    public function downMenu()
    {

    }

    /**
     * @inheritdoc
     */
    public function upConfig()
    {
        ModelConfig::addConfig('app-frontend', 'modules', 'routes', 'routes_dir',
            dirname(\Yii::$app->getVendorPath()) . '/atuin/routes/frontend', FALSE);
        ModelConfig::addConfig('app-backend', 'modules', 'routes', 'routes_dir',
            dirname(\Yii::$app->getVendorPath()) . '/atuin/routes/backend', FALSE);
        ModelConfig::addConfig(NULL, 'modules', 'routes', 'activate_database_routes',
            1, FALSE);
        ModelConfig::addConfig(NULL, 'modules', 'routes', 'class',
            'cyneek\yii2\routes\Module', FALSE);

        ModelConfig::addConfig(NULL, 'components', 'route', 'class',
            'cyneek\yii2\routes\components\route', FALSE);

        // adding bootstrap calls
        ModelConfig::addConfig(NULL, NULL, NULL, 'bootstrap',
            array('routes'), FALSE);

    }


    /**
     * @inheritdoc
     */
    public function downConfig()
    {
    }

    /**
     * @inheritdoc
     */
    public function upManual()
    {
        // delete neo user that automatically the migration adds

    }


    /**
     * @inheritdoc
     */
    public function downManual()
    {

    }

}