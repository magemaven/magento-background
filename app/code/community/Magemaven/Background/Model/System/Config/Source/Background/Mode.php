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
class Magemaven_Background_Model_System_Config_Source_Background_Mode
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'none', 'label' => 'Do Not Show'),
            array('value' => 'center', 'label' => 'Center'),
            array('value' => 'repeat', 'label' => 'Repeat'),
        );
    }
}
