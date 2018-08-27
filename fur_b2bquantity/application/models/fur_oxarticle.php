<?php
/**
 * This Software is property of FETTUNDROSIG and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        https://fettundrosig.com
 * @author      Stephan Hombergs <sh@fettundrosig.com>
 * @copyright   (C) sah, fettundrosig 2018
 * @module      fur_b2bquantity
 * @oxidversion OXID eShop CE 4.10.7
 * @version     2018-08-21  1.0
 * @see         oxArticle
 */

 /**
  * Overloads the OXID Article manager.
  */
class fur_oxArticle extends fur_oxArticle_parent
{

    /**
     * Returns price per unit depending on the user type.
     *
     * @return string
     */
    public function getUnitPrice()
    {
        // Performance
        if (!$this->getConfig()->getConfigParam('bl_perfLoadPrice') || !$this->_blLoadPrice) {
            return;
        }
        $oUser = $this->getUser();
        $oPrice = null;
        $ounitname = null;

        if ($oUser && $oUser->inGroup('oxiddealer')) {
            $ounitname = $this->oxarticles__furb2bunitname->value;
        } else {
            if ($this->oxarticles__oxunitname->value) {
                $ounitname = $this->oxarticles__oxunitname->value;
            }
        }

        if ((double) $this->getUnitQuantity() && $ounitname) {
            $oPrice = clone $this->getPrice();
            $oPrice->divide((double) $this->getUnitQuantity());
        }

        return $oPrice;
    }

    /**
     * Return unit quantity depending on wether the user is a dealer or not.
     * If user is not a dealer, the default unit quantity is returned.
     *
     * @return string
     */
    public function getUnitQuantity()
    {
        $oUser = $this->getUser();
        if ($oUser && $oUser->inGroup('oxiddealer') && $this->oxarticles__furb2bunitquantity->value) {
            return $this->oxarticles__furb2bunitquantity->value;
        }
        return $this->oxarticles__oxunitquantity->value;
    }

    /**
     * Returns dealer quantity name if current user is dealer, otherwise returns the default unit name.
     *
     * @return string
     */
    public function getUnitName()
    {
        $oUser = $this->getUser();
        if ($oUser && $oUser->inGroup('oxiddealer') && $this->oxarticles__furb2bunitname->value) {
            return $this->oxarticles__furb2bunitname->value;
        }
        return parent::getUnitName();
    }
}
