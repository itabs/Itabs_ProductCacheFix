<?php
/**
 * This file is part of the Itabs_ProductCacheFix module.
 *
 * PHP version 5
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category  Itabs
 * @package   Itabs_ProductCacheFix
 * @author    Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2012 ITABS GmbH / Rouven Alexander Rieker (http://www.itabs.de)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://github.com/itabs/Itabs_ProductCacheFix
 */
/**
 * Observer
 *
 * @category  Itabs
 * @package   Itabs_ProductCacheFix
 * @author    Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2012 ITABS GmbH / Rouven Alexander Rieker (http://www.itabs.de)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://github.com/itabs/Itabs_ProductCacheFix
 */
class Itabs_ProductCacheFix_Model_Observer
{
    /**
     * Remove the invalid block html cache notification after product save.
     *
     * @param Varien_Event_Observer $observer
     * @return Itabs_ProductCacheFix_Model_Observer
     */
    public function clearBlockCache(Varien_Event_Observer $observer)
    {
        Mage::app()->getCacheInstance()->cleanType('block_html');
        return $this;
    }
}
