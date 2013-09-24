<?php
/**
 * @version     1.0.0
 * @package     mod_dztour_search
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DZ Team <support@dezign.vn> - dezign.vn
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';
require_once JPATH_SITE . '/components/com_dztour/helpers/route.php';
$lang = JFactory::getLanguage();
$app  = JFactory::getApplication();

$upper_limit = $lang->getUpperLimitSearchWord();

$button         = $params->get('button', '');
$imagebutton    = $params->get('imagebutton', '');
$button_pos     = $params->get('button_pos', 'left');
$button_text    = htmlspecialchars($params->get('button_text', JText::_('MOD_DZTOUR_SEARCH_SEARCHBUTTON_TEXT')));
$width          = (int) $params->get('width', 20);
$maxlength      = $upper_limit;
$text           = htmlspecialchars($params->get('filter.search', JText::_('MOD_DZTOUR_SEARCH_SEARCHBOX_TEXT')));
$label          = htmlspecialchars($params->get('label', JText::_('MOD_DZTOUR_SEARCH_LABEL_TEXT')));
$set_Itemid     = (int) $params->get('set_itemid', 0);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$text           = $app->input->get('filter_search'); 
$typeid         = $app->input->get('filter_typeid');
$locationid     = $app->input->get('filter_locationid');

if ($imagebutton)
{
    $img = modDZTourSearchHelper::getSearchImage($button_text);
}
$mitemid = $set_Itemid > 0 ? $set_Itemid : $app->input->get('Itemid');

// Display template
require JModuleHelper::getLayoutPath('mod_dztour_search', $params->get('layout', 'default'));
