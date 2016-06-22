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
IF ($this->showContent==true && (strlen($this->entry->getFileTitle())>0 || strlen($this->entry->getFileCaption())>0) ):?>    
<div class="content">               
	<div class="data">   
    <?php IF (strlen($this->entry->getFileTitle())>0) echo '<h2>'.$this->entry->getFileTitle()."</h2>"; ?>                        
    <div class="eventgallery-caption"><?php echo $this->entry->getFileCaption(); ?></div>
	</div>
</div>
<?php ENDIF ?> 
