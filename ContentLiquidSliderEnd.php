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
 
 
class ContentLiquidSliderEnd extends ContentElement
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_liquid_slider_end';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			/* $objTemplate->wildcard = '### LIQUID SLIDER - END ###'; */
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
		$strTemplate = 'ce_liquid_slider_end';
	
		// Use a custom template
		if (TL_MODE == 'FE' && $this->ls_liquidsliderTemplate != '')
		{
			$strTemplate = $this->ls_liquidsliderTemplate;
		}

		$objTemplate = new FrontendTemplate($strTemplate);
		
		$this->Template->lsOptions = $GLOBALS['LIQUIDSLIDER'][$this->pid]['lsOptions'];
		$this->Template->sliderName = $GLOBALS['LIQUIDSLIDER'][$this->pid]['lsSliderName'];
	}
}

