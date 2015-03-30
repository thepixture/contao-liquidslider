<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * @copyright  thepixture - mediendesign 2013
 * @author     Heiko Peschke <kontakt@thepixture.de>
 * @package    Liquid Slider
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Fields
 */

$GLOBALS['TL_LANG']['tl_content']['ls_sliderName'] 					= array('Slider name', 'Assign a unique name for the slider.');

$GLOBALS['TL_LANG']['tl_content']['ls_hashLinking'] 				= array('Hash linking', 'Control the slider from internal links (ouside the slider) and external pages (ex. http://www.example.com/#3) with the syntax href="#3".)');
$GLOBALS['TL_LANG']['tl_content']['ls_hashNames'] 					= array('Hash names', 'If you want to use panel names rather than numbers, this should be true. You can then link externally to http://example.com/#about-me');
$GLOBALS['TL_LANG']['tl_content']['ls_hashTitleSelector'] 			= array('Hash title selector', 'This will determine the name used for the hash tags.');
$GLOBALS['TL_LANG']['tl_content']['ls_hashTagSeparator'] 			= array('Hash tag seperator', 'If you want to use a string after the # symbol, set it here. (example: "/", or "!/")');
$GLOBALS['TL_LANG']['tl_content']['ls_hashTLD'] 					= array('Hash TLD', 'If you want append a string to the end of the hash tags, do it here.');

$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabs'] 				= array('Dynamic tabs', 'Enable/disable the panel tabs.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign'] 			= array('Dynamic tabs align', 'The tabs can align either "center", "left" or "right".');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition'] 		= array('Dynamic tabs position', 'You can placce the tabs at either the "top" or the "bottom".');
$GLOBALS['TL_LANG']['tl_content']['ls_panelTitleSelector'] 			= array('Dynamic title selector', 'This determines which text to use for each tab name.');

$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabs'] 				= array('Dynamic tabs', 'Enable/disable the panel tabs.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign'] 			= array('Dynamic tabs align', 'The tabs can align either "center", "left" or "right".');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign']['left'] 		= 'Left';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign']['center'] 		= 'Center';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign']['right'] 		= 'Right';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition'] 			= array('Dynamic tabs position', 'You can placce the tabs at either the "top" or the "bottom".');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition']['top']		= 'Top';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition']['bottom']	= 'Bottom';
$GLOBALS['TL_LANG']['tl_content']['ls_panelTitleSelector'] 			= array('Dynamic title selector', 'This determines which text to use for each tab name.');

$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrows'] 				= array('Dynamic arrows', 'Sets whether the arrows will be dynamically created or not.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowsGraphical'] 		= array('Text-based arrows', 'If enabled, the slider will use text-based arrows.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowLeftText'] 		= array('Left text', 'If not using the dynamic arrows, this will be the left "arrow" text.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowRightText'] 		= array('Right text', 'If not using the dynamic arrows, this will be the left "arrow" text.');
$GLOBALS['TL_LANG']['tl_content']['ls_hideSideArrows'] 				= array('Hide side arrows', 'If enabled, the right arrow will hide when the last panel is displayed, and the left arrow will hide when the first panel is displayed.');
$GLOBALS['TL_LANG']['tl_content']['ls_hideSideArrowsDuration'] 		= array('Hide duration', 'The duration at which the arrows will fade in and out when hideSideArrows is enabled.');
$GLOBALS['TL_LANG']['tl_content']['ls_hoverArrows'] 				= array('Show arrows on hover', 'If disabled, the arrows will always display.');
$GLOBALS['TL_LANG']['tl_content']['ls_hoverArrowDuration'] 			= array('Hover duration', 'The duration at which the arrows will fade in and out on hover.');

$GLOBALS['TL_LANG']['tl_content']['ls_autoSlide'] 					= array('Auto slide', 'Enable/disable the auto slider functionality.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSliderDirection'] 		= array('Direction', 'Set the slider to slider either "left" or "right".');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideInterval'] 			= array('Intervall', 'The timer for the auto slide. 7000 = 7 seconds');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideControls'] 			= array('Controls', 'If enabled, you can use auto slide controls. See <strong><a href="http://liquidslider.kevinbatdorf.com/" onclick="window.open(this.href); return false;">documentation</a></strong> for more information.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStartText'] 			= array('Start text', 'Choose which default start text the slider should use.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStopText'] 			= array('Stop text', 'Choose which default stop text the slider should use.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStopWhenClicked'] 	= array('Stop when clicked', 'If true, the slider will stop when clicked.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlidePauseOnHover'] 		= array('Stop on hover', 'If true, the slider will stop on hover.');

$GLOBALS['TL_LANG']['tl_content']['ls_keyboardNavigation'] 			= array('Keyboard control', 'Enable/disable the use of keyboard control.');
$GLOBALS['TL_LANG']['tl_content']['ls_leftKey'] 					= array('Key - Slide left', 'Geben Sie hier den KeyCode ein.');
$GLOBALS['TL_LANG']['tl_content']['ls_rightKey'] 					= array('Key - Slide right', 'Geben Sie hier den KeyCode ein.');
$GLOBALS['TL_LANG']['tl_content']['ls_panelKeys'] 					= array('Slide Keys', 'Enter the KeyCode for each slide, separated by a comma. (e.g.: "1:49,2:50,3:51,4:52")');

$GLOBALS['TL_LANG']['tl_content']['ls_slideEaseDuration'] 			= array('Slide easy duration', 'The speed at which the panel will slide.');
$GLOBALS['TL_LANG']['tl_content']['ls_fadeOutDuration'] 			= array('Fade out duration', 'The speed at which the current panel fades out (if applicable).');
$GLOBALS['TL_LANG']['tl_content']['ls_fadeInDuration'] 				= array('Fade in duration', 'If using fade transitions, this is the speed the next panel will fade in.');
$GLOBALS['TL_LANG']['tl_content']['ls_slideEaseFunction'] 			= array('Easy function', 'Set the easing type for the height animation.');

$GLOBALS['TL_LANG']['tl_content']['ls_responsive'] 					= array('Responsive', 'You can turn the Liquid Slider into a <strong><a href="http://kevinbatdorf.github.com/codaslider/" onclick="window.open(this.href); return false;">Coda Slider</a></strong> by setting this to false.');
$GLOBALS['TL_LANG']['tl_content']['ls_mobileNavigation'] 			= array('Mobile navigation', 'You can disable the mobile navigation here and instead style the tabs manually.');
$GLOBALS['TL_LANG']['tl_content']['ls_mobileNavDefaultText'] 		= array('Mobile navigation default text', 'Set the text to display when using mobile navigation. Use null to disable.');
$GLOBALS['TL_LANG']['tl_content']['ls_hideArrowsWhenMobile'] 		= array('Hide arrows when mobile', 'Determine whether the arrows should show on mobile devices (when the mobile navigation threshold is exceeded).');
$GLOBALS['TL_LANG']['tl_content']['ls_swipe'] 						= array('Swipe', 'If you want to disable swipe events, set this to false.');
$GLOBALS['TL_LANG']['tl_content']['ls_mobileUIThreshold'] 			= array('Width treshold', 'Set a specific width to switch over to mobile navigation. Otherwise it will switch when the width of the tabs exceed the screen width.');
$GLOBALS['TL_LANG']['tl_content']['ls_useCSSMaxWidth'] 				= array('CSS max width', 'Use this as a max width to use CSS transitions. CSS transitions will work on all browsers that support it; however, continuous sliding is disabled, and jQuery animations tend to work better on some browsers/systems.');

$GLOBALS['TL_LANG']['tl_content']['ls_autoHeight'] 					= array('Auto height', 'Auto adjusts the height to match the current panel. If disabled, the height stays at that of the highest panel.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightMin'] 				= array('Min height', 'You can set up a minimum height for the slider.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightEaseDuration'] 		= array('Duration', 'The speed at which the panel its height will adjust.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightEaseFunction'] 		= array('Easy function', 'Set the easing type for the height animation.');

$GLOBALS['TL_LANG']['tl_content']['ls_preloader'] 					= array('Preloader', 'Decide whether the preloader should be enabled or not.');
$GLOBALS['TL_LANG']['tl_content']['ls_preloaderFadeOutDuration'] 	= array('Fade out duration', 'Determine the fadeout speed for the preloader.');
$GLOBALS['TL_LANG']['tl_content']['ls_preloaderElements'] 			= array('Elements', 'Except when on mobile, the preloader works per panel. It will search for these element tags and if they are not within a tab, the preloader div is removed before the page is fully loaded. This gives early access to content that is already loaded. ');

$GLOBALS['TL_LANG']['tl_content']['ls_continuous'] 					= array('Continuous', 'Sets the slider to continuously slide from the final panel to the first. <strong>Note:</strong> This is disabled on mobile devices until further testing can be done.');
$GLOBALS['TL_LANG']['tl_content']['ls_firstPanelToLoad'] 			= array('First panel to load', 'Determine the first panel to load. Hash linking will override this.');
$GLOBALS['TL_LANG']['tl_content']['ls_navElementTag'] 				= array('Navigation element tag', 'If you want to change the navigation tag (for example, to "nav"), do it here.');
$GLOBALS['TL_LANG']['tl_content']['ls_crossLinks'] 					= array('Cross links', 'If you want to use cross-linking on your page, you need to set this to true. E.g. href="#1". You may also use #left or #right.');
$GLOBALS['TL_LANG']['tl_content']['ls_hashCrossLinks'] 				= array('Cross linking names', 'This will allow you to use hash names for cross linking. This is useful when you often change the order of panels. You will also need to set hashLinking to true. For example, you would change the above example from href="#1" to href="#about-me".');

$GLOBALS['TL_LANG']['tl_content']['ls_forwardFunction']				= array('Forward Function','Enable/disable the use of additional forward functions.');
$GLOBALS['TL_LANG']['tl_content']['ls_backFunction']				= array('Back Function','Enable/disable the use of additional back functions.');
$GLOBALS['TL_LANG']['tl_content']['ls_callforwardFunction']			= array('Call function','Enter here your jQuery script you want to run with the slide.');
$GLOBALS['TL_LANG']['tl_content']['ls_callbackFunction']			= array('Call function','Enter here your jQuery script you want to run after the slide.');

$GLOBALS['TL_LANG']['tl_content']['ls_liquidsliderTemplate']		= array('Slider template','Here you can select the slider template.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['ls_hash_linking_legend']	   		= 'Hash Linking';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamic_tabs_legend']    		= 'Dynamic Tabs';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamic_arrows_legend']		= 'Dynamic Arrows';
$GLOBALS['TL_LANG']['tl_content']['ls_auto_slide_legend']			= 'Auto Slide';
$GLOBALS['TL_LANG']['tl_content']['ls_sliding_legend']				= 'Sliding';
$GLOBALS['TL_LANG']['tl_content']['ls_keyboard_legend']				= 'Keyboard Control';
$GLOBALS['TL_LANG']['tl_content']['ls_responsive_settings_legend']	= 'Responsive Settings';
$GLOBALS['TL_LANG']['tl_content']['ls_auto_height_legend']			= 'Auto Height';
$GLOBALS['TL_LANG']['tl_content']['ls_preloader_legend']			= 'Preloader';
$GLOBALS['TL_LANG']['tl_content']['ls_miscellaneous_legend']		= 'Miscellaneous';
$GLOBALS['TL_LANG']['tl_content']['ls_function_legend']				= 'Forward/Back Functions';


