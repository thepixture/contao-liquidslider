<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @copyright  thepixture - mediendesign 2013
 * @author     Heiko Peschke <kontakt@thepixture.de>
 * @package    Liquid Slider
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Content elements
 */ 
$GLOBALS['TL_CTE']['liquidSlider']['liquidSlider_start'] 		= 'ContentLiquidSliderStart';
$GLOBALS['TL_CTE']['liquidSlider']['liquidSlider_end'] 			= 'ContentLiquidSliderEnd';

/**
 * Wrapper elements only Contao 3+
 */
if (version_compare(VERSION, '3.0', '>=')) {
	$GLOBALS['TL_WRAPPERS']['start'][] = 'liquidSlider_start';
	$GLOBALS['TL_WRAPPERS']['stop'][] = 'liquidSlider_end';
}
