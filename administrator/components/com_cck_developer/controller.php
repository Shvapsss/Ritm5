<?php
/**
* @version 			SEBLOD Developer 1.x
* @package			SEBLOD Developer Add-on for SEBLOD 3.x
* @url				http://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2013 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

// Controller
class CCK_DeveloperController extends JControllerLegacy
{
	protected $default_view	=	'cck_developer';
	
	// display
	public function display( $cachable = false, $urlparams = false )
	{
		$app	=	JFactory::getApplication();
		$id		=	$app->input->getInt( 'id' );
		$layout	=	$app->input->get( 'layout', 'default' );
		$view	=	$app->input->get( 'view', $this->default_view );
		
		if ( !( $layout == 'edit' || $layout == 'edit2' ) ) {
			Helper_Admin::addSubmenu( $this->default_view, $view );
		}
		
		parent::display();
		
		return $this;
	}
		
	// createPlugin
	public function createPlugin()
	{
		JSession::checkToken() or jexit( JText::_( 'JINVALID_TOKEN' ) );
		
		$model	=	$this->getModel( 'cck_developer' );
		$params	=	JComponentHelper::getParams( 'com_cck_developer' );
		$output	=	$params->get( 'output', 0 );
		
		if ( $file = $model->createPlugin( $params ) ) {
			if ( $output > 0 ) {
				$this->setRedirect( CCK_LINK, JText::_( 'COM_CCK_SUCCESSFULLY_CREATED' ), 'message' );
			} else {
				$file	=	str_replace( '\\', '/', $file );
				$this->setRedirect( 'components/com_cck/download.php?file='.$file );
			}
		} else {
			$this->setRedirect( CCK_LINK, JText::_( 'JERROR_AN_ERROR_HAS_OCCURRED' ), 'error' );
		}
	}
}
?>