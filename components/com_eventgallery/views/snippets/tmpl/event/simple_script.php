<?php

/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<script type="text/javascript">

    var eventgalleryEventsList;
    var eventgalleryLazyloader;
    var EventgalleryGridCollection;

    window.addEvent("domready", function () {

        var options = {
            eventgallerySelector: '.event-thumbnails',
            eventgalleryImageSelector: '.event-thumbnail',
            adjustMode: 'height',
            initComplete: function () {
                eventgalleryLazyloader = new LazyLoadEventgallery({
                    range: 100,                    
                    elements: 'img.lazyme',
                    image: 'components/com_eventgallery/media/images/blank.gif',
                    onScroll: function () {
                        //console.log('scrolling');
                    },
                    onLoad: function (img) {
                        //console.log('image loaded');
                        setTimeout(function () {
                            img.setStyle('opacity', 0).fade(1);
                        }, 500);
                    },
                    onComplete: function () {
                        //console.log('all images loaded');
                    }

                });
                
                var gridOptions = {
                    tilesSelector: '.eventgallery-simplelist .eventgallery-simplelist-tile',
                    tilesContainerSelector: '.eventgallery-simplelist',
                    thumbSelector: '.event-thumbnail',
                    thumbContainerSelector: '.event-thumbnails'
                };
                EventgalleryGridCollection = new EventgalleryGridCollection(gridOptions);
                EventgalleryGridCollection.calculate();
                // we need to recalculate the whole thing because it might happen that a font loads
                // and the size of a tile changes. 
                window.addEvent('load', function(){
                    EventgalleryGridCollection.calculate();
                });

            },
            resizeStart: function () {
                $$('.event-thumbnails .event-thumbnail img').setStyle('opacity', 0);


            },
            resizeComplete: function () {
                eventgalleryLazyloader.initialize();
                EventgalleryGridCollection.calculate();
                window.fireEvent('scroll');
            }
        };

        // initialize the imagelist
        eventgalleryEventsList = new EventgalleryEventsTiles(options);
        

    });

</script>