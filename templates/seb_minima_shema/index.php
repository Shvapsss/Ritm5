<?php
/**
* @version 			SEBLOD 3.x More
* @package			SEBLOD (App Builder & CCK) // SEBLOD nano (Form Builder)
* @url				http://www.seblod.com
* @editor			Octopoos - www.octopoos.com
* @copyright		Copyright (C) 2013 SEBLOD. All Rights Reserved.
* @license 			GNU General Public License version 2 or later; see _LICENSE.php
**/

defined( '_JEXEC' ) or die;

// -- Initialize
require_once dirname(__FILE__).'/config.php';
$cck	=	CCK_Rendering::getInstance( $this->template );
if ( $cck->initialize() === false ) { return; }

// -- Render
if ( $cck->id_class != '' ) {
	echo '<div class="'.trim( $cck->id_class ).'">'.$cck->renderPosition( 'mainbody', '', $cck->h( 'mainbody' ) ).'</div>';
} else {
// -- MY Render
	echo '<div itemscope itemtype="http://schema.org/Product">';
	echo '<h1 itemprop="name">' . $cck->getValue('tov_title') .'</h1>';
	echo $cck->renderField('tov_intro');
		
		echo $cck->renderField('tov_img_glav_x');
		
	echo $cck->renderField('tov_razmer');
	echo $cck->renderField('tov_oborudovanie');
	
	
	
		//echo '<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">';
			//echo 'Цена:';
			//echo '<span itemprop="price" style="font-size: 20px;"> ' . $cck->getValue('tov_price') .'</span>';
			//echo '<span itemprop="priceCurrency" style="font-size: 20px;"> руб.</span>';
		//echo '</div>';
	
	echo '<span itemprop="description">' . $cck->getValue('tov_opisanie') .'</span>';
	
	echo $cck->renderField('tov_design');
	
	echo '</div>';
	
	//echo $cck->renderPosition( 'mainbody', '', $cck->h( 'mainbody' ) );
	
}

if ( $cck->countFields( 'modal' ) && JCck::on() ) {
	JHtml::_( 'bootstrap.modal', 'collapseModal' );
	?>
	<div class="modal hide fade" id="collapseModal">
		<?php echo $cck->renderPosition( 'modal' ); ?>
	</div>
<?php }

if ( $cck->countFields( 'hidden' ) ) { ?>
	<div style="display: none;">
		<?php echo $cck->renderPosition( 'hidden' ); ?>
	</div>
<?php }

// -- Finalize
$cck->finalize();
?>













<?php 

?>