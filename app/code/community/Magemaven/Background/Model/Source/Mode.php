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
class Magemaven_Background_Model_Source_Mode
{
    const MODE_NONE = 'none';
    const MODE_TOP_CENTER = 'top-center';
    const MODE_REPEAT = 'repeat';

    public function toOptionArray()
    {
        $helper = Mage::helper('background');

        return array(
            array('value' => self::MODE_NONE, 'label' => $helper->__('Do Not Show')),
            array('value' => self::MODE_TOP_CENTER, 'label' => $helper->__('Top Center')),
            array('value' => self::MODE_REPEAT, 'label' => $helper->__('Repeat')),
        );
    }
}
