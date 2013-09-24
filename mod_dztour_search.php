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
$app  = JFactory::getApplication();

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

$text           = $app->input->get('filter_search'); 
$typeid         = $app->input->get('filter_typeid');
$locationid     = $app->input->get('filter_locationid');

// Display template
require JModuleHelper::getLayoutPath('mod_dztour_search', $params->get('layout', 'default'));
