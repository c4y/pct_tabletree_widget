<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @copyright	Tim Gatzky 2014, Premium Contao Webworks, Premium Contao Themes
 * @author		Tim Gatzky <info@tim-gatzky.de>
 * @package		pct_tabletree
 * @link		http://contao.org
 */

/**
 * Constants
 */
define(PCT_TABLETREE_PATH, 'system/modules/pct_tabletree');
define(PCT_TABLETREE_VERSION, '1.0.0');

/**
 * Back end form fields
 */
$GLOBALS['BE_FFL']['pct_tabletree'] = 'PCT\Widgets\WidgetTableTree';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['executePostActions'][] = array('PCT\Widgets\TableTree\TableTreeHelper','postActions');
$GLOBALS['TL_HOOKS']['executePreActions'][] = array('PCT\Widgets\TableTree\TableTreeHelper','preActions');