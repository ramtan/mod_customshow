<?php
/**
 * @package     Joomla.Module
 * @subpackage  Module.mod_customshow
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class CustomShowHelper{

	public static function prepare($params){
		
		if($params->get('head')){
			return true;
		}

	}

}
