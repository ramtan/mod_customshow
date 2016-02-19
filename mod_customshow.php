<?php
/**
 * @package     Joomla.Module
 * @subpackage  Module.mod_customshow
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */ 

defined('_JEXEC') or die;

//include the helper file
require_once __DIR__.'/helper/helper.php';

$prepare = CustomShowHelper::prepare($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

if($prepare){
	require JModuleHelper::getLayoutPath('mod_customshow', $params->get('layout','default'));
}