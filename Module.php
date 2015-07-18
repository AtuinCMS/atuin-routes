<?php


namespace atuin\routes;


class Module extends \atuin\skeleton\ComposerModule
{
    protected static $_id = 'atuin-routes';

    protected static $_version = '0.0
    
    ';
    /**
     * Checks if is a core module, atuin won't be able to uninstall or deactivate this module
     *
     * @var int
     */
    public $is_core_module = 1;

    /**
     * Used from AppManagement, determines if the module will be loaded in the backend zone.
     *
     * @var int
     */
    public $is_backend = 1;
    /**
     * Used from AppManagement, determines if the module will be loaded in the frontend zone.
     *
     * @var int
     */
    public $is_frontend = 1;


    public function getComposerPackageData()
    {
        return 'cyneek/yii2-routes:dev-master';
    }

    /**
     * @inheritdoc
     */
    public function getModuleClassName()
    {
        return 'cyneek\yii2\routes\Module';
    }

    /**
     * @inheritdoc
     */
    public function getModuleDirectory()
    {
        return \Yii::$app->getVendorPath() . '/cyneek/yii2-routes';
    }

    /**
     * @inheritdoc
     */
    public function getModuleNamespace()
    {
        return 'cyneek\yii2\routes';
    }
}