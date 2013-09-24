<?php
// no direct access
defined('_JEXEC') or die;

abstract class modDZTourSearchHelper
{
    /**
     * Display the search button as an image.
     *
     * @param   string  $button_text    The alt text for the button.
     *
     * @return  string  The HTML for the image.
     * @since   1.5
     */
    public static function getSearchImage($button_text)
    {
        $img = JHtml::_('image', 'searchButton.gif', $button_text, null, true, true);
        return $img;
    }
}
