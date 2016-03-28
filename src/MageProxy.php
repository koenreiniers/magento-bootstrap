<?php
namespace Kr\Magestrap;

use \Mage;

/**
 * Proxy class for Magento's Mage
 * Class MageProxy
 * @package Mage\Api\Magento
 */
class MageProxy implements MageProxyInterface
{
    /** @var MageProxy */
    private static $instance = null;

    /**
     * Returns singleton instance
     *
     * @return MageProxy
     */
    public static function getInstance()
    {
        if(!static::isInstanced()) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Returns whether or not the proxy is already instanced
     *
     * @return bool
     */
    public static function isInstanced()
    {
        return static::$instance !== null;
    }

    /**
     * @inheritdoc
     */
    public function getVersion()
    {
        return Mage::getVersion();
    }

    /**
     * @inheritdoc
     */
    public function getVersionInfo()
    {
        return Mage::getVersionInfo();
    }

    /**
     * @inheritdoc
     */
    public function getEdition()
    {
        return Mage::getEdition();
    }

    /**
     * @inheritdoc
     */
    public function reset()
    {
        Mage::reset();
    }

    /**
     * @inheritdoc
     */
    public function register($key, $value, $graceful = false)
    {
        Mage::register($key, $value, $graceful);
    }

    /**
     * @inheritdoc
     */
    public function unregister($key)
    {
        Mage::unregister($key);
    }

    /**
     * @inheritdoc
     */
    public function registry($key)
    {
        return Mage::registry($key);
    }

    /**
     * @inheritdoc
     */
    public function setRoot($appRoot = '')
    {
        Mage::setRoot($appRoot);
    }

    /**
     * @inheritdoc
     */
    public function getRoot()
    {
        return Mage::getRoot();
    }

    /**
     * @inheritdoc
     */
    public function getEvents()
    {
        return Mage::getEvents();
    }

    /**
     * @inheritdoc
     */
    public function objects($key = null)
    {
        return Mage::objects($key);
    }

    /**
     * @inheritdoc
     */
    public function getBaseDir($type = 'base')
    {
        return Mage::getBaseDir($type);
    }

    /**
     * @inheritdoc
     */
    public function getModuleDir($type, $moduleName)
    {
        return Mage::getModuleDir($type, $moduleName);
    }

    /**
     * @inheritdoc
     */
    public function getStoreConfig($path, $store = null)
    {
        return Mage::getStoreConfig($path, $store);
    }

    /**
     * @inheritdoc
     */
    public function getStoreConfigFlag($path, $store = null)
    {
        return Mage::getStoreConfigFlag($path, $store);
    }

    /**
     * @inheritdoc
     */
    public function getBaseUrl($type = \Mage_Core_Model_Store::URL_TYPE_LINK, $secure = null)
    {
        return Mage::getBaseUrl($type, $secure);
    }

    /**
     * @inheritdoc
     */
    public function getUrl($route = '', $params = array())
    {
        return Mage::getUrl($route, $params);
    }

    /**
     * @inheritdoc
     */
    public function getDesign()
    {
        return Mage::getDesign();
    }

    /**
     * @inheritdoc
     */
    public function getConfig()
    {
        return Mage::getConfig();
    }

    /**
     * @inheritdoc
     */
    public function addObserver($eventName, $callback, $data = array(), $observerName = '', $observerClass = '')
    {
        Mage::addObserver($eventName, $callback, $data, $observerName, $observerClass);
    }

    /**
     * @inheritdoc
     */
    public function dispatchEvent($name, array $data = array())
    {
        return Mage::dispatchEvent($name, $data);
    }

    /**
     * @inheritdoc
     */
    public function getModel($modelClass = '', $arguments = array())
    {
        return Mage::getModel($modelClass, $arguments);
    }

    /**
     * @inheritdoc
     */
    public function getSingleton($modelClass = '', array $arguments = array())
    {
        return Mage::getSingleton($modelClass, $arguments);
    }

    /**
     * @inheritdoc
     */
    public function getResourceModel($modelClass, $arguments = array())
    {
        return Mage::getResourceModel($modelClass, $arguments);
    }

    /**
     * @inheritdoc
     */
    public function getControllerInstance($class, $request, $response, array $invokeArgs = array())
    {
        return Mage::getControllerInstance($class, $request, $response, $invokeArgs);
    }

    /**
     * @inheritdoc
     */
    public function getResourceSingleton($modelClass = '', array $arguments = array())
    {
        return Mage::getResourceSingleton($modelClass, $arguments);
    }

    /**
     * @inheritdoc
     */
    public function getBlockSingleton($type)
    {
        throw new \Exception("DEPRECATED");
    }

    /**
     * @inheritdoc
     */
    public function helper($name)
    {
        return Mage::helper($name);
    }

    /**
     * @inheritdoc
     */
    public function getResourceHelper($moduleName)
    {
        return Mage::getResourceHelper($moduleName);
    }

    /**
     * @inheritdoc
     */
    public function exception($module = 'Mage_Core', $message = '', $code = 0)
    {
        return Mage::exception($module, $message, $code);
    }
    /**
     * @inheritdoc
     */
    public function throwException($message, $messageStorage = null)
    {
        Mage::throwException($message, $messageStorage);
    }

    /**
     * @inheritdoc
     */
    public function app($code = '', $type = 'store', $options = array())
    {
        return Mage::app($code, $type, $options);
    }

    /**
     * @inheritdoc
     */
    public function init($code = '', $type = 'store', $options = array(), $modules = array())
    {
        Mage::init($code, $type, $options, $modules);
    }

    /**
     * @inheritdoc
     */
    public function run($code = '', $type = 'store', $options = array())
    {
        Mage::run($code, $type, $options);
    }

    /**
     * @inheritdoc
     */
    public function isInstalled($options = array())
    {
        return Mage::isInstalled($options);
    }

    /**
     * @inheritdoc
     */
    public function log($message, $level = null, $file = '', $forceLog = false)
    {
        Mage::log($message, $level, $file, $forceLog);
    }

    /**
     * @inheritdoc
     */
    public function logException(\Exception $e)
    {
        Mage::logException($e);
    }

    /**
     * @inheritdoc
     */
    public function setIsDeveloperMode($mode)
    {
        Mage::setIsDeveloperMode($mode);
    }

    /**
     * @inheritdoc
     */
    public function getIsDeveloperMode()
    {
        return Mage::getIsDeveloperMode();
    }

    /**
     * @inheritdoc
     */
    public function printException(\Exception $e, $extra = '')
    {
        Mage::printException($e, $extra);
    }

    /**
     * @inheritdoc
     */
    public function getScriptSystemUrl($folder, $exitIfNot = false)
    {
        return Mage::getScriptSystemUrl($folder, $exitIfNot);
    }

    /**
     * @inheritdoc
     */
    public function setIsDownloader($flag = true)
    {
        Mage::setIsDownloader($flag);
    }
}