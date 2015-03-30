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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_hashLinking';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_dynamicTabs';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_dynamicArrowsGraphical';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_hideSideArrows';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_hoverArrows';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_autoSlide';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_keyboardNavigation';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_responsive';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_autoHeight';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_preloader';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_forwardFunction';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] 			= 'ls_backFunction';



$GLOBALS['TL_DCA']['tl_content']['palettes']['liquidSlider_start'] 		= '{type_legend},type,ls_sliderName;{ls_hash_linking_legend:hide},ls_hashLinking;{ls_dynamic_tabs_legend:hide},ls_dynamicTabs;{ls_dynamic_arrows_legend:hide},ls_dynamicArrows,ls_dynamicArrowsGraphical,ls_hideSideArrows,ls_hoverArrows;{ls_auto_slide_legend:hide},ls_autoSlide;{ls_sliding_legend:hide},ls_slideEaseFunction,ls_slideEaseDuration,ls_fadeInDuration,ls_fadeOutDuration,ls_continuous,ls_firstPanelToLoad;{ls_keyboard_legend:hide},ls_keyboardNavigation;{ls_responsive_settings_legend:hide},ls_responsive;{ls_auto_height_legend:hide},ls_autoHeight;{ls_preloader_legend:hide},ls_preloader;{ls_function_legend:hide},ls_forwardFunction,ls_backFunction;{protected_legend:hide},protected;{expert_legend:hide},guests,start,stop,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['liquidSlider_end'] 		= '{type_legend},type;{template_legend:hide},ls_liquidsliderTemplate;{protected_legend:hide},protected;{expert_legend:hide},guests,start,stop,cssID,space';

/**
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_hashLinking'] 				= 'ls_hashNames,ls_hashTitleSelector,ls_hashTagSeparator,ls_hashTLD,ls_crossLinks,ls_hashCrossLinks';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_dynamicTabs'] 				= 'ls_dynamicTabsAlign,ls_dynamicTabsPosition,ls_panelTitleSelector,ls_navElementTag';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_dynamicArrowsGraphical'] 	= 'ls_dynamicArrowLeftText,ls_dynamicArrowRightText';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_hideSideArrows'] 			= 'ls_hideSideArrowsDuration';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_hoverArrows'] 				= 'ls_hoverArrowDuration';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_autoSlide'] 				= 'ls_autoSliderDirection,ls_autoSlideInterval,ls_autoSlideControls,ls_autoSlideStartText,ls_autoSlideStopText,ls_autoSlideStopWhenClicked,ls_autoSlidePauseOnHover';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_keyboardNavigation']		= 'ls_leftKey,ls_rightKey,ls_panelKeys';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_responsive'] 				= 'ls_mobileNavigation,ls_mobileNavDefaultText,ls_hideArrowsWhenMobile,ls_mobileUIThreshold,ls_swipe,ls_useCSSMaxWidth';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_autoHeight'] 				= 'ls_autoHeightMin,ls_autoHeightEaseDuration,ls_autoHeightEaseFunction';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_preloader'] 				= 'ls_preloaderFadeOutDuration,ls_preloaderElements';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_forwardFunction'] 			= 'ls_callforwardFunction';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['ls_backFunction'] 				= 'ls_callbackFunction';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_sliderName'] = array
(
  'label'                   	=> &$GLOBALS['TL_LANG']['tl_content']['ls_sliderName'],
  'exclude'                 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('rgxp'=>'alnum', 'nospace'=>true, 'unique'=>true, 'mandatory'=>true, 'doNotCopy'=>true, 'tl_class'=>'clr')
);

/**
 * Hash linking
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hashLinking'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_hashLinking'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hashNames'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_hashNames'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hashTitleSelector'] = array
(
  'label'                   	=> &$GLOBALS['TL_LANG']['tl_content']['ls_hashTitleSelector'],
  'exclude'                 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('mandatory'=>true, 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hashTagSeparator'] = array
(
  'label'                  	 	=> &$GLOBALS['TL_LANG']['tl_content']['ls_hashTagSeparator'],
  'exclude'                	 	=> true,
  'inputType'              	 	=> 'text',
  'eval'                    	=> array('nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hashTLD'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_hashTLD'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_crossLinks'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_crossLinks'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'w50, clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hashCrossLinks'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_hashCrossLinks'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'clr')
);


/**
 * Dynamic tabs
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_dynamicTabs'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabs'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_dynamicTabsAlign'] = array
(
  'label'                  	 	=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign'],
  'default'                 	=> 'left',
  'inputType'               	=> 'select',
  'options'                 	=> array('left','center', 'right'),
  'reference'               	=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign'],
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_dynamicTabsPosition'] = array
(
  'label'                  	 	=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition'],
  'default'                 	=> 'top',
  'inputType'               	=> 'select',
  'options'                 	=> array('top','bottom'),
  'reference'               	=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition'],
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_panelTitleSelector'] = array
(
  'label'                  	 	=> &$GLOBALS['TL_LANG']['tl_content']['ls_panelTitleSelector'],
  'exclude'                	 	=> true,
  'inputType'              	 	=> 'text',
  'eval'                    	=> array('mandatory'=>true, 'nospace'=>true, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_navElementTag'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_navElementTag'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('tl_class'=>'w50')
);


/**
 * Dynamic arrows
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_dynamicArrows'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrows'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_dynamicArrowsGraphical'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowsGraphical'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_dynamicArrowLeftText'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowLeftText'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_dynamicArrowRightText'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowRightText'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hideSideArrows'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_hideSideArrows'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'w50 clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hideSideArrowsDuration'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_hideSideArrowsDuration'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hoverArrows'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_hoverArrows'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'w50 clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hoverArrowDuration'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_hoverArrowDuration'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);


/**
 * Auto slide
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoSlide'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSlide'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoSliderDirection'] = array
(
  'label'                  	 	=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSliderDirection'],
  'default'                 	=> 'left',
  'inputType'               	=> 'select',
  'options'                 	=> array('left', 'right'),
  'reference'               	=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSliderDirection'],
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoSlideInterval'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideInterval'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoSlideControls'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideControls'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoSlideStartText'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStartText'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoSlideStopText'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStopText'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoSlideStopWhenClicked'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStopWhenClicked'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoSlidePauseOnHover'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoSlidePauseOnHover'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'w50')
);


/**
 * Sliding
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_slideEaseDuration'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_slideEaseDuration'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_slideEaseFunction'] = array
(
  'label'                  	 	=> &$GLOBALS['TL_LANG']['tl_content']['ls_slideEaseFunction'],
  'default'                 	=> 'easeInOutExpo',
  'inputType'               	=> 'select',
  'options'                 	=> array('fade', 'linear', 'swing', 'easeInQuad', 'easeOutQuad', 'easeInOutQuad', 'easeInCubic', 'easeOutCubic', 'easeInOutCubic', 'easeInQuart', 'easeOutQuart', 'easeInOutQuart', 'easeInQuint', 'easeOutQuint', 'easeInOutQuint', 'easeInExpo', 'easeOutExpo', 'easeInOutExpo', 'easeInSine', 'easeOutSine', 'easeInOutSine', 'easeInCirc', 'easeOutCirc', 'easeInOutCirc', 'easeInElastic', 'easeOutElastic', 'easeInOutElastic', 'easeInBack', 'easeOutBack', 'easeInOutBack', 'easeInBounce', 'easeOutBounce', 'easeInOutBounce'),
  'reference'               	=> &$GLOBALS['TL_LANG']['tl_content']['ls_slideEaseFunction'],
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_fadeInDuration'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_fadeInDuration'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_fadeOutDuration'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_fadeOutDuration'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_continuous'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_continuous'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_firstPanelToLoad'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_firstPanelToLoad'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);


/**
 * Keyboard
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_keyboardNavigation'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_keyboardNavigation'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_leftKey'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_leftKey'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('rgxp'=>'digit', 'tl_class'=>'w50')
)
;$GLOBALS['TL_DCA']['tl_content']['fields']['ls_rightKey'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_rightKey'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('rgxp'=>'digit', 'tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_panelKeys'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_panelKeys'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('tl_class'=>'w50')
);

 
/**
 * Responsive
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_responsive'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_responsive'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_mobileNavigation'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_mobileNavigation'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_mobileNavDefaultText'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_mobileNavDefaultText'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_hideArrowsWhenMobile'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_hideArrowsWhenMobile'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_swipe'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_swipe'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_mobileUIThreshold'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_mobileUIThreshold'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_useCSSMaxWidth'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_useCSSMaxWidth'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);


/**
 * Auto height
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoHeight'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoHeight'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoHeightMin'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightMin'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoHeightEaseDuration'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightEaseDuration'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_autoHeightEaseFunction'] = array
(
  'label'                  	 	=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightEaseFunction'],
  'default'                 	=> 'easeInOutExpo',
  'inputType'               	=> 'select',
  'options'                 	=> array('linear', 'swing', 'easeInQuad', 'easeOutQuad', 'easeInOutQuad', 'easeInCubic', 'easeOutCubic', 'easeInOutCubic', 'easeInQuart', 'easeOutQuart', 'easeInOutQuart', 'easeInQuint', 'easeOutQuint', 'easeInOutQuint', 'easeInExpo', 'easeOutExpo', 'easeInOutExpo', 'easeInSine', 'easeOutSine', 'easeInOutSine', 'easeInCirc', 'easeOutCirc', 'easeInOutCirc', 'easeInElastic', 'easeOutElastic', 'easeInOutElastic', 'easeInBack', 'easeOutBack', 'easeInOutBack', 'easeInBounce', 'easeOutBounce', 'easeInOutBounce'),
  'reference'               	=> &$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightEaseFunction'],
  'eval'                    	=> array('tl_class'=>'w50')
);


/**
 * Preloader
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_preloader'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_preloader'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_preloaderFadeOutDuration'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_preloaderFadeOutDuration'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('doNotSaveEmpty'=>true, 'rgxp'=>'digit', 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_preloaderElements'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_preloaderElements'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'text',
  'eval'                    	=> array('tl_class'=>'w50')
);


/**
 * Functions
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['ls_forwardFunction'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_forwardFunction'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_callforwardFunction'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_callforwardFunction'],
  'exclude'                 	=> true,
  'inputType'               	=> 'textarea',
  'eval'                    	=> array('mandatory'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>version_compare(VERSION, '3.1.0', '<') ? 'codeMirror|html' : 'ace|html' )
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_backFunction'] = array
(
  'label'						=> &$GLOBALS['TL_LANG']['tl_content']['ls_backFunction'],
  'exclude'						=> true,
  'inputType'					=> 'checkbox',
  'eval'						=> array('submitOnChange'=>true, 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['ls_callbackFunction'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_callbackFunction'],
  'exclude'                	 	=> true,
  'inputType'               	=> 'textarea',
  'eval'                    	=> array('mandatory'=>true, 'allowHtml'=>true, 'class'=>'monospace', 'rte'=>version_compare(VERSION, '3.1.0', '<') ? 'codeMirror|html' : 'ace|html' )
);



$GLOBALS['TL_DCA']['tl_content']['fields']['ls_liquidsliderTemplate'] = array
(
  'label'                  		=> &$GLOBALS['TL_LANG']['tl_content']['ls_liquidsliderTemplate'],
  'exclude'                 	=> true,
  'inputType'               	=> 'select',
  'options_callback'        	=> array('tl_liquidslider_content', 'getLiquidsliderTemplates')
);



/**
 * Class tl_content
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @copyright  thepixture - mediendesign 2013
 * @author     Heiko Peschke <kontakt@thepixture.de>
 * @package    Controller
 */
class tl_liquidslider_content extends Backend
{

	/**
	 * Return all liquidslider templates as array
	 * @return array
	 */
	public function getLiquidsliderTemplates($dc)
	{
        $intPid = $dc->activeRecord->pid;

        if ($this->Input->get('act') == 'overrideAll'){
            $intPid = $this->Input->get('id');
        }

		return $this->getTemplateGroup('ce_liquid_slider_end', $intPid);
	}
	
}