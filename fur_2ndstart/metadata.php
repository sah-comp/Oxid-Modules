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
 * @module      fur_2ndstart
 * @oxidversion OXID eShop CE 4.10.7
 * @version     2018-08-21  1.0
 */

/**
 * Module information
 */
$aModule = array(
    'id'           => 'fur_2ndstart',
    'title'        => '<img src="../modules/fur/module_logo.png" alt="FETTUNDROSIG" title="FETTUNDROSIG" width="24" height="24" style="vertical-align: middle; width: 24px; height: 24px; margin-right: 0.22em;" />Zweite Startseite',
    'description'  => 'Eine zweite Startseite für besondere Kategorien oder andere Zwecke. Bearbeiten Sie das Template in <em>modules/fur/fur_2ndstart/views/page/start2nd.tpl</em> und tragen Sie in Stammdaten:Grundeinstellungen:SEO eine statische URL für <em>index.php?cl=start2nd</em> ein.',
    'thumbnail'    => 'module_logo.png',
    'version'      => '1.0',
    'author'       => 'Stephan Hombergs',
    'email'        => 'sh@fettundrosig.com',
    'url'          => 'https://fettundrosig.com',
    'files' => array(
        'start2nd' => 'fur/fur_2ndstart/controllers/start2nd.php'
    ),
    'templates' => array(
        'start2nd.tpl' => 'fur/fur_2ndstart/views/page/start2nd.tpl'
    ),
    'settings' => array(),
    'blocks' => array(),
    'events' => array()
);
