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
    'id'           => 'fur_notbuyable',
    'title'        => '<img src="../modules/fur/module_logo.png" alt="FETTUNDROSIG" title="FETTUNDROSIG" width="24" height="24" style="vertical-align: middle; width: 24px; height: 24px; margin-right: 0.22em;" />Unkaufbare Artikel als Störer',
    'description'  => 'Ein Artikel kann als <em>nicht kaufbar</em> markiert werden und dient als Störer in der Artikelliste.',
    'thumbnail'    => 'module_logo.png',
    'version'      => '1.0',
    'author'       => 'Stephan Hombergs',
    'email'        => 'sh@fettundrosig.com',
    'url'          => 'https://fettundrosig.com',
    'files' => array(
        'fur_notbuyableEvents' => 'fur/fur_notbuyable/core/fur_notbuyableevents.php',
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
        'onActivate' => 'fur_notbuyableEvents::onActivate',
        'onDeactivate' => 'fur_notbuyableEvents::onDeactivate'
    )
);
