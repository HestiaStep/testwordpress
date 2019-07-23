<div class="contacts">
	<?php 
	$contacts_item1 = CFS()->get( 'contacts_email' );
	?>
	<div class="contacts-item  contacts__email">			
		<?php echo $contacts_item1 ?>
	</div><!-- .contacts-item -->		
 
	<?php 
	$contacts_item3 = CFS()->get( 'contacts_phone' );  
	?>
	<div class="contacts-item  contacts__phone">
		<?php echo $contacts_item3; ?>
	</div><!-- .contacts-item -->
</div>