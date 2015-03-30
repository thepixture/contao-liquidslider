<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package liquid_slider
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContentLiquidSliderEnd'     => 'system/modules/liquidslider/ContentLiquidSliderEnd.php',
	'ContentLiquidSliderStart'   => 'system/modules/liquidslider/ContentLiquidSliderStart.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_liquid_slider_end'      => 'system/modules/liquidslider/templates',
	'ce_liquid_slider_start'    => 'system/modules/liquidslider/templates',
));
