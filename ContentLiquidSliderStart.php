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
 

class ContentLiquidSliderStart extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_liquid_slider_start';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			/* $objTemplate->wildcard = '### LIQUID SLIDER - START ###'; */
			return $objTemplate->parse();
		}
		
		$time = time();
		if (($this->start > 0 && $this->start > $time) || ($this->stop > 0 && $this->stop < $time))
		{
			return '';
		}

		return parent::generate();
	}
	
	protected function compile()
	{
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/liquidslider/html/jquery.easing.1.3.js';
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/liquidslider/html/jquery.liquid-slider.min.js';
		$GLOBALS['TL_CSS'][] = 'system/modules/liquidslider/html/liquid-slider.css';
		
		$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsSliderName'] = $this->Template->sliderName = $this->ls_sliderName;
		
		$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] = "";
		
		if ( $this->ls_autoHeight != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoHeight: true,\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoHeightMin: " .$this->ls_autoHeightMin. ",\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoHeightEaseDuration: " .$this->ls_autoHeightEaseDuration. ",\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoHeightEaseFunction: '" .$this->ls_autoHeightEaseFunction. "',\n";
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoHeight: false,\n";
		}
		
		$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "slideEaseDuration: " .$this->ls_slideEaseDuration. ",\n";
		$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "fadeInDuration: " .$this->ls_fadeInDuration. ",\n";
		$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "fadeOutDuration: " .$this->ls_fadeOutDuration. ",\n";
		$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "slideEaseFunction: '" .$this->ls_slideEaseFunction. "',\n";
		
		if ( $this->ls_autoSlide != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlide: true,\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSliderDirection: '" .$this->ls_autoSliderDirection. "',\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlideInterval: " .$this->ls_autoSlideInterval. ",\n";
			if ( $this->ls_autoSlideControls != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlideControls: true,\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlideControls: false,\n";	
			}
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlideStartText: '" .$this->ls_autoSlideStartText. "',\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlideStopText: '" .$this->ls_autoSlideStopText. "',\n";
			if ( $this->ls_autoSlideStopWhenClicked != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlideStopWhenClicked: true,\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlideStopWhenClicked: false,\n";		
			}
			if ( $this->ls_autoSlideStopWhenClicked != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlidePauseOnHover: true,\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlidePauseOnHover: false,\n";
			}
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "autoSlide: false,\n";
		}

		if ( $this->ls_continuous != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "continuous: true,\n";
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "continuous: false,\n";
		}

		if ( $this->ls_dynamicArrows != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicArrows: true,\n";
			if ( $this->ls_dynamicArrowsGraphical != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicArrowsGraphical: false,\n";		
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicArrowLeftText: '" .$this->ls_dynamicArrowLeftText. "',\n";
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicArrowRightText: '" .$this->ls_dynamicArrowRightText. "',\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicArrowsGraphical: true,\n";
			}
			if ( $this->ls_hideSideArrows != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hideSideArrows: true,\n";
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hideSideArrowsDuration: " .$this->ls_hideSideArrowsDuration. ",\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hideSideArrows: false,\n";
			}
			if ( $this->ls_hoverArrows != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hoverArrows: true,\n";
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hoverArrowDuration: " .$this->ls_hoverArrowDuration. ",\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hoverArrows: false,\n";
			}
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicArrows: false,\n";
		}

		if ( $this->ls_dynamicTabs != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicTabs: true,\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicTabsAlign: '" .$this->ls_dynamicTabsAlign. "',\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicTabsPosition: '" .$this->ls_dynamicTabsPosition. "',\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "panelTitleSelector: '" .$this->ls_panelTitleSelector. "',\n";
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "dynamicTabs: false,\n";
		}

		$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "firstPanelToLoad: " .$this->ls_firstPanelToLoad. ",\n";
		
		$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "navElementTag: '" .$this->ls_navElementTag. "',\n";
		
		if ( $this->ls_crossLinks != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "crossLinks: true,\n";
			if ( $this->ls_hashCrossLinks != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hashCrossLinks: true,\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hashCrossLinks: false,\n";
			}
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "crossLinks: false,\n";
		}

		if ( $this->ls_hashLinking != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hashLinking: true,\n";
			if ( $this->ls_hashNames != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hashNames: true,\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hashNames: false,\n";
			}
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hashTitleSelector: '" .$this->ls_hashTitleSelector. "',\n";
			if ( $this->ls_hashTagSeparator != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hashTagSeparator: '" .$this->ls_hashTagSeparator. "',\n";
			}
			if ( $this->ls_hashTLD != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hashTLD: '" .$this->ls_hashTLD. "',\n";
			}
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "crossLinks: false,\n";
		}
		
		if ( $this->ls_keyboardNavigation != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "keyboardNavigation: true,\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "leftKey: " .$this->ls_leftKey. ",\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "rightKey: " .$this->ls_rightKey. ",\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "panelKeys: {" .$this->ls_panelKeys. "},\n";
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "keyboardNavigation: false,\n";
		}
		
		if ( $this->ls_responsive != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "responsive: true,\n";
			if ( $this->ls_mobileNavigation != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "mobileNavigation: true,\n";
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "mobileNavDefaultText: '" .$this->ls_mobileNavDefaultText. "',\n";
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "mobileUIThreshold: " .$this->ls_mobileUIThreshold. ",\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "mobileNavigation: false,\n";
			}
			if ( $this->ls_hideArrowsWhenMobile != '' ) {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hideArrowsWhenMobile: true,\n";
			} else {
				$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "hideArrowsWhenMobile: false,\n";
			}
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "useCSSMaxWidth: " .$this->ls_useCSSMaxWidth. ",\n";
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "responsive: false,\n";
		}
	
		if ( $this->ls_preloader != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "preloader: true,\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "preloaderFadeOutDuration: " .$this->ls_preloaderFadeOutDuration. ",\n";
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "preloaderElements: '" .$this->ls_preloaderElements. "',\n";
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "preloader: false,\n";
		}

		if ( $this->ls_forwardFunction != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "callforwardFunction: " .$this->ls_callforwardFunction. ",\n";
		}

		if ( $this->ls_backFunction != '' ) {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "callbackFunction: " .$this->ls_callbackFunction. ",\n";
		}
		
		if ( $this->ls_swipe != '' ) {
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/liquidslider/html/jquery.touchSwipe.min.js';	
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "swipe: true\n";
		} else {
			$GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'] .= "swipe: false\n";
		}
		
	}
} 

