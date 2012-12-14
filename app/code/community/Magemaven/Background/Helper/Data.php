<?php
/**
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * @category    Magemaven
 * @package     Magemaven_Background
 * @copyright   Copyright (c) 2011-2012 Sergey Storchay <r8@r8.com.ua>
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
class Magemaven_Background_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * Config XML paths
     */
    const XML_PATH_BACKGROUND_IMAGE = 'design/background/image';
    const XML_PATH_BACKGROUND_MODE  = 'design/background/mode';

    /**
     * Get Background image settings
     *
     * @return mixed
     */
    public function getBackgroundImage()
    {
        return Mage::getStoreConfig(self::XML_PATH_BACKGROUND_IMAGE);
    }

    /**
     * Get Background mode settings
     *
     * @return mixed
     */
    public function getBackgroundMode()
    {
        return Mage::getStoreConfig(self::XML_PATH_BACKGROUND_MODE);
    }

    /**
     * Get base url for backgrounds
     *
     * @return string
     */
    public function getBaseMediaUrl()
    {
        return Mage::getBaseUrl('media') . 'design/background';
    }
}