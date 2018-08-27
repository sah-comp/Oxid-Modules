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
 */

/**
 * Class defines what module does on Shop events.
 */
class fur_b2bquantityEvents
{
    /**
     * Alter oxarticles to store the b2b unitquantity and b2b unitname.
     */
    public static function addB2BUnitFields()
    {
        $sSql = "ALTER TABLE `oxarticles`
                 ADD `FURB2BUNITNAME` varchar(32) NOT NULL DEFAULT ''
                 COMMENT 'Name of unit a B2B customer may order',
                 ADD `FURB2BUNITQUANTITY` double NOT NULL DEFAULT 0
                 COMMENT 'Quantity a B2B customer may order';";
        try {
            oxDb::getDb()->execute($sSql);
        } catch (oxAdoDbException $e) {
            //the field already exists, we dont tell.
        }
    }

    /**
     * Regenerates database view-tables.
     *
     * @return void
     */
    public static function regenerateViews()
    {
        $oShop = oxNew('oxShop');
        $oShop->generateViews();
    }

    /**
     * Clear tmp dir and smarty cache.
     *
     * @return void
     */
    public static function clearTmp()
    {
        $sTmpDir = getShopBasePath() . "/tmp/";
        $sSmartyDir = $sTmpDir . "smarty/";

        foreach (glob($sTmpDir . "*.txt") as $sFileName) {
            unlink($sFileName);
        }
        foreach (glob($sSmartyDir . "*.php") as $sFileName) {
            unlink($sFileName);
        }
    }

    /**
     * Execute action on activate event
     *
     * @return null
     */
    public static function onActivate()
    {
        self::addB2BUnitFields();
        self::regenerateViews();
        self::clearTmp();
    }

    /**
     * Execute action on deactivate event
     *
     * @return null
     */
    public static function onDeactivate()
    {
        //Really nothing has to be done until now.
    }
}
