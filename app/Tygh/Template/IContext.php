<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/


namespace Tygh\Template;

/**
 * The interface for the context of documents and snippets.
 *
 * @package Tygh\Template
 */
interface IContext
{
    /**
     * Gets language code.
     * 
     * @return string
     */
    public function getLangCode();

    /**
     * Get language direction.
     *
     * @return string Language direction
     */
    public function getLanguageDirection();

    /**
     * Gets area.
     *
     * @return string Area identifier.
     */
    public function getArea();
}
