<?php
/**
* 
*
* NOTICE OF LICENSE
*
* This source file is subject to the GNU LESSER GENERAL PUBLIC LICENSE (LGPL 3.0)
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade to newer
* versions in the future.
*
* @category   Jarlssen
* @package    Jarlssen_Lazyload
* @copyright  Copyright (c) 1996-2013 Jarlssen GmbH (http://www.jarlssen.com)
* @contacts   raffaele.pannisco@jarlssen.de
* @license    http://www.gnu.org/copyleft/lesser.html  GNU LESSER GENERAL PUBLIC LICENSE (LGPL 3.0)
*/

class Jarlssen_Lazyload_Helper_Data extends Mage_Core_Helper_Abstract {
    
    public function isEnabled() {
        
        return Mage::getStoreConfig('lazyload/general/lazyloadEnabled');
    }
}

?>
