<?php
/**
* @package			SD Live CCK Field V2.5.0 for SEBLOD 3.x - www.seblod.com
* @license 			GNU General Public License version 2 or later
* @author       	Simon Dowdles - http://www.simondowdles.com
* @copyright		Copyright (C) 2013 Simon Dowdles New Media Holdings (Pty) Ltd. All Rights Reserved.
**/

defined( '_JEXEC' ) or die;
?>

<?php
JCckDev::initScript( 'live', $this->item );
?>

<div class="seblod">
	<?php echo JCckDev::renderLegend( JText::_( 'COM_CCK_CONSTRUCTION' ), JText::_( 'PLG_CCK_FIELD_LIVE_'.$this->item->name.'_DESC' ) ); ?>
    <ul class="adminformlist adminformlist-2cols">
        <?php
		echo JCckDev::renderForm( 'sd_live_cck_field_name', '', $config, array( 'storage_field'=>'sd_live_cck_field_name', 'label' => 'CCK Field' ) );
		?>
    </ul>
</div>