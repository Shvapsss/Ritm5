<?php
/**
 * @package     Sven.Bluege
 * @subpackage  com_eventgallery
 *
 * @copyright   Copyright (C) 2005 - 2013 Sven Bluege All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<?php echo $this->loadSnippet('event/imagelist_script'); ?>

<div class="event">
    <?php IF ($this->params->get('show_date', 1) == 1): ?>
        <h4 class="date">
            <?php echo JHTML::Date($this->folder->getDate()); ?>
        </h4>
    <?php ENDIF ?>

    <h1 class="description">
        <?php echo $this->folder->getDescription(); ?>
    </h1>

    <?php echo $this->loadSnippet('event/inc/paging_top'); ?>

    <div class="text">
        <?php echo $this->folder->getText(); ?>
    </div>

    <?php echo $this->loadSnippet('imageset/imagesetselection'); ?>

    <?php echo $this->loadSnippet('event/imagelist_thumbnails'); ?>

    <?php echo $this->loadSnippet('event/inc/paging_bottom'); ?>

</div>
<div style="clear:both"></div>
