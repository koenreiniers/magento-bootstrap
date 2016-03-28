<?php
namespace Kr\Magestrap;

use Kr\Magestrap\Exception\LogicException;
use Kr\Magestrap\Exception\FileNotFoundException;

class Bootstrapper
{
    /**
     * Bootstraps magento
     *
     * @param string $magentoRoot
     * @param string $appCode
     * @param string $appType
     *
     * @throws \Exception
     *
     * @return MageProxyInterface
     */
    public static function bootstrap($magentoRoot, $appCode = "", $appType = "store")
    {
        // Check if Magento isnt already bootstrapped
        if(MageProxy::isInstanced()) {
            throw new LogicException("Magento is already bootstrapped!");
        }

        // Include Magento bootstrap file
        $mageFilename = $magentoRoot . '/app/Mage.php';
        if(!file_exists($mageFilename)) {
            throw new FileNotFoundException("Mage.php could not be found at {$mageFilename}");
        }
        require_once($mageFilename);

        // Run the app
        \Mage::app($appCode, $appType);

        // Return Mage instance
        $mageProxy = MageProxy::getInstance();
        return $mageProxy;
    }
}