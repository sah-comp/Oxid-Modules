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
 * Module information
 */
$aModule = array(
    'id'           => 'fur_b2bquantity',
    'title'        => '<img src="../modules/fur/module_logo.png" alt="FETTUNDROSIG" title="FETTUNDROSIG" width="24" height="24" style="vertical-align: middle; width: 24px; height: 24px; margin-right: 0.22em;" />B2B Erweiterungen (Bestellmengen- und Einheiten für Händler)',
    'description'  => 'Dieses Modul erweitert Oxid eShop um das B2B Feature unterschiedliche Bestellmengen- und Einheiten für Händler festlegen zu können.',
    'thumbnail'    => 'module_logo.png',
    'version'      => '1.0',
    'author'       => 'Stephan Hombergs',
    'email'        => 'sh@fettundrosig.com',
    'url'          => 'https://fettundrosig.com',
    'extend'       => array(
        'oxarticle' => 'fur/fur_b2bquantity/application/models/fur_oxArticle'
    ),
    'files' => array(
        'fur_b2bquantityEvents' => 'fur/fur_b2bquantity/core/fur_b2bquantityevents.php',
    ),
    'templates' => array(),
    'settings' => array(),
    'blocks' => array(
        array(
            'template' => 'article_extend.tpl',
            'block' => 'admin_article_extend_form',
            'file' => '/views/blocks/article_extend.tpl'
        )
    ),
    'events' => array(
        'onActivate' => 'fur_b2bquantityEvents::onActivate',
        'onDeactivate' => 'fur_b2bquantityEvents::onDeactivate'
    )
);
