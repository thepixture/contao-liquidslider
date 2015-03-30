-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table 'tl_content'
-- 

CREATE TABLE `tl_content` (
  `ls_sliderName` varchar(255) NOT NULL default '',
  `ls_hashLinking` char(1) NOT NULL default '',
  `ls_hashNames` char(1) NOT NULL default '1',
  `ls_hashTitleSelector` varchar(255) NOT NULL default 'h2.title',
  `ls_hashTagSeparator` varchar(64) NOT NULL default '',
  `ls_hashTLD` varchar(64) NOT NULL default '',
  `ls_dynamicTabs` char(1) NOT NULL default '1',
  `ls_dynamicTabsAlign` varchar(64) NOT NULL default 'left',
  `ls_dynamicTabsPosition` varchar(64) NOT NULL default 'top',
  `ls_panelTitleSelector` varchar(64) NOT NULL default 'h2.title',
  `ls_dynamicArrows` char(1) NOT NULL default '1',
  `ls_dynamicArrowsGraphical` char(1) NOT NULL default '1',
  `ls_dynamicArrowLeftText` varchar(64) NOT NULL default '&#171; left',
  `ls_dynamicArrowRightText` varchar(64) NOT NULL default 'right &#187;',
  `ls_hideSideArrows` char(1) NOT NULL default '',
  `ls_hideSideArrowsDuration` int(10) NOT NULL default '750',
  `ls_hoverArrows` char(1) NOT NULL default '1',
  `ls_hoverArrowDuration` int(10) NOT NULL default '250',
  `ls_autoSlide` char(1) NOT NULL default '',
  `ls_autoSliderDirection` varchar(64) NOT NULL default 'right',
  `ls_autoSlideInterval` int(10) NOT NULL default '7000',
  `ls_autoSlideControls` char(1) NOT NULL default '',
  `ls_autoSlideStartText` varchar(64) NOT NULL default 'Start',
  `ls_autoSlideStopText` varchar(64) NOT NULL default 'Stop',
  `ls_autoSlideStopWhenClicked` char(1) NOT NULL default '1',
  `ls_autoSlidePauseOnHover` char(1) NOT NULL default '1',
  `ls_slideEaseDuration` int(10) NOT NULL default '1500',
  `ls_fadeInDuration` int(10) NOT NULL default '1000',
  `ls_fadeOutDuration` int(10) NOT NULL default '1000',
  `ls_slideEaseFunction` varchar(64) NOT NULL default 'easeInOutExpo',
  `ls_responsive` char(1) NOT NULL default '1',
  `ls_mobileNavigation` char(1) NOT NULL default '1',
  `ls_mobileNavDefaultText` varchar(64) NOT NULL default 'Menu',
  `ls_mobileUIThreshold` int(10) NOT NULL default '0',
  `ls_hideArrowsWhenMobile` char(1) NOT NULL default '1',
  `ls_useCSSMaxWidth` int(10) NOT NULL default '1030',
  `ls_swipe` char(1) NOT NULL default '1',
  `ls_autoHeight` char(1) NOT NULL default '1',
  `ls_autoHeightMin` int(10) NOT NULL default '0',
  `ls_autoHeightEaseDuration` int(10) NOT NULL default '1500',
  `ls_autoHeightEaseFunction` varchar(64) NOT NULL default 'easeInOutExpo',
  `ls_preloader` char(1) NOT NULL default '1',
  `ls_preloaderFadeOutDuration` int(10) NOT NULL default '250',
  `ls_preloaderElements` varchar(255) NOT NULL default 'img,video,iframe,object',
  `ls_continuous` char(1) NOT NULL default '1',
  `ls_firstPanelToLoad` int(2) NOT NULL default '1',
  `ls_navElementTag` varchar(64) NOT NULL default 'div',
  `ls_crossLinks` char(1) NOT NULL default '',
  `ls_hashCrossLinks` char(1) NOT NULL default '',
  `ls_forwardFunction` char(1) NOT NULL default '',
  `ls_backFunction` char(1) NOT NULL default '',
  `ls_callforwardFunction` mediumtext NULL,
  `ls_callbackFunction` mediumtext NULL,
  `ls_liquidsliderTemplate` varchar(64) NOT NULL default '',
  `ls_keyboardNavigation` char(1) NOT NULL default '',
  `ls_leftKey` int(3) NOT NULL default '39',
  `ls_rightKey` int(3) NOT NULL default '39',
  `ls_panelKeys` varchar(255) NOT NULL default '1:49,2:50,3:51,4:52',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


