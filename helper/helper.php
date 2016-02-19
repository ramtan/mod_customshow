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

	public function getMenuLink($params){

		// Get default menu - JMenu object, look at JMenu api docs
		$menu = JFactory::getApplication()->getMenu();

		// Get menu items - array with menu items
		$items = $menu->getItem($params->get('mymenuitem'));
		$menulink = JRoute::_($items->link, true , -1);

		if($menulink){
			$params->set('comlink', $menulink);
		}else{
			$params->set('comlink', '');
		}
	}

	public static function prepare($params){

		self::getMenuLink($params);

		if($params){
			//iF Null Image
			if(!$params->get('bgimg')){
				$params->set('bgimg_fin', 'none');
			}else{
				$params->set('bgimg_fin', "url('".$params->get('bgimg')."')");
			}
			return true;
		}else{
			JFactory::getApplication()->enqueueMessage('Module : CustomShow', 'error');
			return;
		}
	}
}
