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
 
$GLOBALS['TL_LANG']['tl_content']['ls_sliderName'] 					= array('Slidername', 'Vergeben Sie hier einen eindeutigen Namen für den Slider.');

$GLOBALS['TL_LANG']['tl_content']['ls_hashLinking'] 				= array('Hash-Links verwenden', 'Mit Hash-Links können Elemente im Slider gezielt über interne Links oder von externen Seiten angesteuert werden. Beispiel: http://www.example.com/#3 mit dem Link-Syntax href="#3".');
$GLOBALS['TL_LANG']['tl_content']['ls_hashNames'] 					= array('Hash-Link Namen', 'Hiermit können für die Hash-Tags, anstatt Nummern, Namen verwendet werden. Beispiel: http://example.com/#about-me');
$GLOBALS['TL_LANG']['tl_content']['ls_hashTitleSelector'] 			= array('Hash-Titel Element', 'Bestimmt, welches HTML-Element für den Titel verwendet werden soll. Beispiel: h2 oder auch h2.title');
$GLOBALS['TL_LANG']['tl_content']['ls_hashTagSeparator'] 			= array('Hash-Tag Trennung', 'Hier können ein oder mehrere Zeichen für die Verwendung nach dem # Symbol angegeben werden. (Beispiel: "/", oder "!/")');
$GLOBALS['TL_LANG']['tl_content']['ls_hashTLD'] 					= array('Hash TLD', 'Geben Sie hier eine Zeichenfolge ein, welche an den Hash-Tag angehangen werden soll.');

$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabs'] 				= array('Dynamische Tabs', 'Aktiviert/Deaktiviert dynamische Tabs');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign'] 			= array('Dynamische Tab-Ausrichtung', 'Wählen Sie die Ausrichtung für die Tabs.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition'] 		= array('Dynamische Tab-Position', 'Wählen Sie die Position der Tabs.');
$GLOBALS['TL_LANG']['tl_content']['ls_panelTitleSelector'] 			= array('Tab-Titel Selector', 'Bestimmt, welches HTML-Element für den Tab-Titel verwendet werden soll. Beispiel: h2 oder auch h2.title');

$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign']['left'] 		= 'Links';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign']['center'] 		= 'Zentriert';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsAlign']['right'] 		= 'Rechts';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition']['top']		= 'Oben';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicTabsPosition']['bottom']	= 'Unten';

$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrows'] 				= array('Dynamische Pfeile', 'Aktiviert/Deaktiviert dynamische Pfeile.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowsGraphical'] 		= array('Text basierte Pfeile', 'Text basierte Pfeile verwenden.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowLeftText'] 		= array('Bezeichnung Links-Pfeil', 'Bezeichnung für Links-Pfeil.');
$GLOBALS['TL_LANG']['tl_content']['ls_dynamicArrowRightText'] 		= array('Bezeichnung Rechts-Pfeil', 'Bezeichnung für Rechts-Pfeil.');
$GLOBALS['TL_LANG']['tl_content']['ls_hideSideArrows'] 				= array('Pfeile ausblenden', 'Den jeweiligen Pfeil ausblenden, wenn Anfang oder Ende erreicht ist.');
$GLOBALS['TL_LANG']['tl_content']['ls_hideSideArrowsDuration'] 		= array('Dauer Ausblendung', 'Legen Sie die Dauer in Millisekunden fest, in der die Pfeile ausgeblendet werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['ls_hoverArrows'] 				= array('Zeige Pfeile bei Mouse-Hover', 'Die Pfeile bei Mouse-Hover einblenden.');
$GLOBALS['TL_LANG']['tl_content']['ls_hoverArrowDuration'] 			= array('Dauer Ein-/Ausblendung', 'Geben Sie die Geschwindigkeit in Millisekunden an, in der die Pfeile ein-/ausgeblendet werden sollen.');

$GLOBALS['TL_LANG']['tl_content']['ls_autoSlide'] 					= array('Automatisches Sliden', 'Aktiviert/Deaktiviert automatisches Sliden.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSliderDirection'] 		= array('Richtung', 'Wählen Sie die Richtung für das Sliden.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideInterval'] 			= array('Anzeigedauer', 'Geben Sie Anzeigedauer in Milisekunden, für die einzelnen Elemente an.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideControls'] 			= array('Steuerung', 'Abspielsteuerung verwenden. <strong><a href="http://liquidslider.kevinbatdorf.com/" onclick="window.open(this.href); return false;">Dokumentation</a></strong> und weitere Informationen.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStartText'] 			= array('Start-Text', 'Bezeichnung für Start-Text.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStopText'] 			= array('Stop-Text', 'Bezeichnung für Stop-Text.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlideStopWhenClicked'] 	= array('Stop bei Mouse-Click', 'Stoppt den Slider bei Mouse-Click.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoSlidePauseOnHover'] 		= array('Stop bei Mouse-Hover', 'Stoppt den Slider bei Mouse-Hover.');

$GLOBALS['TL_LANG']['tl_content']['ls_keyboardNavigation'] 			= array('Tastatursteuerung', 'Aktiviert/Deaktiviert die Verwendung der Tastatursteuerung.');
$GLOBALS['TL_LANG']['tl_content']['ls_leftKey'] 					= array('Taste - Nach links', 'Geben Sie hier den KeyCode ein.');
$GLOBALS['TL_LANG']['tl_content']['ls_rightKey'] 					= array('Taste - Nach rechts', 'Geben Sie hier den KeyCode ein.');
$GLOBALS['TL_LANG']['tl_content']['ls_panelKeys'] 					= array('Tasten für direkte Slidewahl', 'Geben Sie hier die KeyCodes für die jeweiligen Slides, getrennt mit Komma ein. (Bsp: "1:49,2:50,3:51,4:52")');

$GLOBALS['TL_LANG']['tl_content']['ls_slideEaseDuration'] 			= array('Slide Geschwindigkeit', 'Geben Sie die Geschwindigkeit in Milisekunden an, mit der geslidet werden soll.');
$GLOBALS['TL_LANG']['tl_content']['ls_fadeOutDuration'] 			= array('Dauer Ausblendung', 'Geben Sie die Geschwindigkeit in Millisekunden an, mit der die Slides ausgeblendet (bei Verwendung von "fade") werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['ls_fadeInDuration'] 				= array('Dauer Einblendung', 'Geben Sie die Geschwindigkeit in Millisekunden an, mit der die Slides eingeblendet (bei Verwendung von "fade") werden sollen.');
$GLOBALS['TL_LANG']['tl_content']['ls_slideEaseFunction'] 			= array('Animations-Typ', 'Wählen Sie den Animations-Typ.');

$GLOBALS['TL_LANG']['tl_content']['ls_responsive'] 					= array('Responsive', 'Verwandelt den Liquid Slider in einen <strong><a href="http://kevinbatdorf.github.com/codaslider/" onclick="window.open(this.href); return false;">Coda Slider</a></strong> wenn deaktiviert.');
$GLOBALS['TL_LANG']['tl_content']['ls_mobileNavigation'] 			= array('Mobile-Menü', 'Sie können das Mobile-Menü deaktivieren, wenn Sie statt dessen das Menü manuell anlegen möchten.');
$GLOBALS['TL_LANG']['tl_content']['ls_mobileNavDefaultText'] 		= array('Mobile-Menü Text', 'Bezeichnung für Mobile-Menü. Lassen Sie das Feld leer, wenn Sie hier keine Bezeichung verwenden möchten.');
$GLOBALS['TL_LANG']['tl_content']['ls_hideArrowsWhenMobile'] 		= array('Verstecke Pfeile auf Mobilen Geräten', 'Pfeile auf mobilen Geräten nicht anzeigen (wenn die maximale Breite für Mobile-Menü überschritten wurde).');
$GLOBALS['TL_LANG']['tl_content']['ls_swipe'] 						= array('Wischgesten verwenden', 'Erlaubt die Verwendung von Wischgesten.');
$GLOBALS['TL_LANG']['tl_content']['ls_mobileUIThreshold'] 			= array('Maximale Breite für Mobile-Menü', 'Geben Sie die maximale Breite in Pixel an, innerhalb der das Mobile-Menü angezeigt werden soll. Mit 0, wird das Mobile-Menü angezeigt, sobald die Tabs die Breite des Sliders überschreiten.');
$GLOBALS['TL_LANG']['tl_content']['ls_useCSSMaxWidth'] 				= array('Maximale Breite für CSS-Transition', 'Geben Sie die maximale Breite in Pixel an, bei der CSS-Transitions verwendet werden sollen. Funktioniert nur in Browsern, die CSS-Transition unterstützen.');

$GLOBALS['TL_LANG']['tl_content']['ls_autoHeight'] 					= array('Automatische Höhe', 'Passt die Höhe automatisch an das jeweilige anzuzeigende Element an. Deaktiviert - verwendet die Höhe des höchsten Elements.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightMin'] 				= array('Mindesthöhe', 'Geben Sie die Mindesthöhe für den Slider an.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightEaseDuration'] 		= array('Dauer Höhenanpassung', 'Geben Sie die Geschwindigkeit in Millisekunden, für automatische Höhenanpassung an.');
$GLOBALS['TL_LANG']['tl_content']['ls_autoHeightEaseFunction'] 		= array('Animations-Typ', 'Wählen Sie den Animations-Typ.');

$GLOBALS['TL_LANG']['tl_content']['ls_preloader'] 					= array('Preloader', 'Aktiviert/Deaktiviert den Preloader.');
$GLOBALS['TL_LANG']['tl_content']['ls_preloaderFadeOutDuration'] 	= array('Dauer Ausblendung', 'Geben Sie die Geschwindigkeit in Millisekunden an, in der der Preloader ausgeblendet werden soll.');
$GLOBALS['TL_LANG']['tl_content']['ls_preloaderElements'] 			= array('Elemente', 'Außer auf mobilen Geräten, funktionert der Preloader pro Slide-Element. Er sucht nach den angegebenen Elementen. Wenn es kein solches Element gibt, wird der Preloader ausgeblendet, bevor die Seite vollständig geladen wurde.');

$GLOBALS['TL_LANG']['tl_content']['ls_continuous'] 					= array('Durchgehend Sliden', 'Startet erneut mit dem ersten Element, wenn das letzte Element erreicht wurde. <strong>Beachte:</strong> Bis auf weitere Tests für mobile Geräte deaktiviert.');
$GLOBALS['TL_LANG']['tl_content']['ls_firstPanelToLoad'] 			= array('Erstes Element', 'Geben Sie an, welches Element zuerst angezeigt werden soll. Beachten Sie, dass dieser Wert durch Hash-Links überschrieben wird.');
$GLOBALS['TL_LANG']['tl_content']['ls_navElementTag'] 				= array('Alternatives HTML-Tag für Tabnavigation', 'Hier kann die Tabnavigation durch Angabe eines alternativen HTML-Tags geändert werden. (Beispiel: "nav" oder "ul").');
$GLOBALS['TL_LANG']['tl_content']['ls_crossLinks'] 					= array('Cross-Links', 'Aktiviert/Deaktiviert die Verwendung von Cross-Links zur Steuerung des Sliders. Beispiel: href="#1" (auch #left oder #right möglich) mit der Referenzierung auf den Namen des anzusteuernden Sliders (Beispiel: data-liquidslider-ref="slider-<strong>MeinName</strong>").');
$GLOBALS['TL_LANG']['tl_content']['ls_hashCrossLinks'] 				= array('Cross-Link Namen verwenden', 'Dies erlaubt Ihnen Hash-Namen für Cross-Links zu verwenden (Beispiel: statt href="#1" - href="#ueber-mich"). Nützlich, wenn Sie öfters die Reihenfolge der Slides ändern.');

$GLOBALS['TL_LANG']['tl_content']['ls_forwardFunction']				= array('Forward Funktion','Aktiviert/Deaktiviert die Verwendung einer Forward Funktion.');
$GLOBALS['TL_LANG']['tl_content']['ls_backFunction']				= array('Back Funktion','Aktiviert/Deaktiviert die Verwendung einer Back Funktion.');
$GLOBALS['TL_LANG']['tl_content']['ls_callforwardFunction']			= array('Funktionsaufruf','Geben Sie hier Ihr jQuery-Script ein, das mit Start des Slides ausgeführt werden soll.');
$GLOBALS['TL_LANG']['tl_content']['ls_callbackFunction']			= array('Funktionsaufruf','Geben Sie hier Ihr jQuery-Script ein, das nach Beenden des Slides ausgeführt werden soll.');

$GLOBALS['TL_LANG']['tl_content']['ls_liquidsliderTemplate']		= array('Slider-Template','Hier können Sie das Slider-Template auswählen.');
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['ls_hash_linking_legend']	   		= 'Hash Links';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamic_tabs_legend']    		= 'Dynamische Tabs';
$GLOBALS['TL_LANG']['tl_content']['ls_dynamic_arrows_legend']		= 'Dynamische Pfeile';
$GLOBALS['TL_LANG']['tl_content']['ls_auto_slide_legend']			= 'Automatisches Sliden';
$GLOBALS['TL_LANG']['tl_content']['ls_sliding_legend']				= 'Slideverhalten';
$GLOBALS['TL_LANG']['tl_content']['ls_keyboard_legend']				= 'Tastatursteuerung';
$GLOBALS['TL_LANG']['tl_content']['ls_responsive_settings_legend']	= 'Responsive-Einstellungen';
$GLOBALS['TL_LANG']['tl_content']['ls_auto_height_legend']			= 'Automatische Höhe';
$GLOBALS['TL_LANG']['tl_content']['ls_preloader_legend']			= 'Preloader';
$GLOBALS['TL_LANG']['tl_content']['ls_function_legend']				= 'Forward/Back Funktionen';

