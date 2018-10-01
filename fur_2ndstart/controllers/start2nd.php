<?php
/**
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) sh@fettundrosig.com
 * @version   OXID eShop CE 4.10.7
 */

/**
 * 2n starting shop page.
 */
class start2nd extends oxUBase
{
    /**
     * Template.
     */
    protected $_sThisTemplate = 'start2nd.tpl';

    /**
     * Render.
     */
    public function render()
    {
        parent::render();
        return $this->_sThisTemplate;
    }
}
