<?php
/**
* @package			SD Live CCK Field V2.5.0 for SEBLOD 3.x - www.seblod.com
* @license 			GNU General Public License version 2 or later
* @author       	Simon Dowdles - http://www.simondowdles.com
* @copyright		Copyright (C) 2013 Simon Dowdles New Media Holdings (Pty) Ltd. All Rights Reserved.
**/

// No Direct Access
defined( '_JEXEC' ) or die;

jimport( 'cck.rendering.rendering' );

// Plugin Class
class plgCCK_Field_LiveSd_Live_Cck_Field extends JCckPluginLive
{
	protected static $type	=	'sd_live_cck_field';
	
	// -------- -------- -------- -------- -------- -------- -------- -------- // Prepare
		
	// onCCK_Field_LivePrepareForm
	public function onCCK_Field_LivePrepareForm( &$field, &$value = '', &$config = array() )
	{	

		// If for some reason the type of live does not match ours and is using this script, kill it
		if ( self::$type != $field->live ) {
			return;
		}
		// Define a variabel. Yawn.
		$live = '';

		$options2 = JCckDev::fromJSON( $field->live_options );

		$liveValue = @$options2['sd_live_cck_field_name'];

			
		// Get the live value and do some magic... Not much to it really.
		if ( $liveValue > '') {
			// Create a CCK rendering object (needed to get values) - see libraries/cck/rendering/rendering.php for how to use...
			$SdCck	=	new CCK_Rendering();
			// Initialize our rendering object - if you look in the above file you'll see this needs to be done
			$SdCck->initialize();
			// Get the live values, in our case the CCK field to clone
			$SdFieldValue = trim($liveValue);
			// Get the value of the field we want to use as live value
			$SdGetValue = $SdCck->getValue($SdFieldValue);
			// Did it exist? Did it have a value? Good! If not, assign false. Can assign NULL too if so desired.
			$live = (($SdGetValue !== NULL && $SdGetValue > '') ? $SdGetValue : false);
		}
		
		// Set our value based on the live conditions. If there was a valid value, set it. Else return false.
		if(!$live == '' && !$live == NULL ){
			$value = $live;
		}else{
			return false;
		}
	}
}
?>