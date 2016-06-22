<?php

/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

class EventgalleryHelpersMedialoader
{

    static function load()
    {

        $document = JFactory::getDocument();

        JHtml::_('behavior.framework', true);
        JHtml::_('behavior.formvalidation');

        $params = JComponentHelper::getParams('com_eventgallery');
        $componentId = JComponentHelper::getComponent('com_eventgallery')->id;
        $extension = JTable::getInstance('extension');
        $extension->load($componentId);
        $data = json_decode($extension->manifest_cache, true);
        $version = $data['version'];

        // load script and styles in debug mode or compressed
        if ($params->get('debug',0)==1) {
        
            $css = JURI::base() . 'components/com_eventgallery/media/css/eventgallery.css?v=' . $version;
            $document->addStyleSheet($css);
            $css = JURI::base() . 'components/com_eventgallery/media/css/mediaboxAdvBlack21.css?v=' . $version;;
            $document->addStyleSheet($css);
            $js = JURI::base() . 'components/com_eventgallery/media/js/eventgallery.js?v=' . $version;;
            $document->addScript($js);
            $js = JURI::base() . 'components/com_eventgallery/media/js/mediaboxAdv-1.3.4b.js?v=' . $version;;
            $document->addScript($js);

            $joomlaVersion =  new JVersion();
            if (!$joomlaVersion->isCompatible('3.0')) {
                $css = JURI::base() . 'components/com_eventgallery/media/css/legacy.css?v=' . $version;;
                $document->addStyleSheet($css);
            } 


            $js = JURI::base() . 'components/com_eventgallery/media/js/JSGallery2.js?v=' . $version;;
            $document->addScript($js);
            $js = JURI::base() . 'components/com_eventgallery/media/js/LazyLoad.js?v=' . $version;;
            $document->addScript($js);
            $js = JURI::base() . 'components/com_eventgallery/media/js/LazyLoad.js?v=' . $version;;
            $document->addScript($js);

        } else {
            $css = "";
            $joomlaVersion =  new JVersion();
            if (!$joomlaVersion->isCompatible('3.0')) {
                $css = JURI::base() . 'components/com_eventgallery/media/css/eg-l-compressed.css?v=' . $version;;                
            } else {
                $css = JURI::base() . 'components/com_eventgallery/media/css/eg-compressed.css?v=' . $version;;                
            }
            $document->addStyleSheet($css);

            $js = JURI::base() . 'components/com_eventgallery/media/js/eg-compressed.js?v=' . $version;;
            $document->addScript($js);

        }

    }


}

	
	
