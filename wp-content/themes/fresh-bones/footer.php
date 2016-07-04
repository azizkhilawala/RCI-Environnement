
<div id="footer-dark-row"></div>

<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

	<div id="inner-footer" class="inner-footer-tablet wrap cf">

		<nav role="navigation">
			<?php wp_nav_menu(array(
				'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
				'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
				'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
				'menu_class' => 'nav footer-nav cf',            // adding custom nav class
				'theme_location' => 'footer-links',             // where it's located in the theme
				'before' => '',                                 // before the menu
				'after' => '',                                  // after the menu
				'link_before' => '',                            // before each link
				'link_after' => '',                             // after each link
				'depth' => 0,                                   // limit the depth of the nav
				'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
			)); ?>
		</nav>

		<!-- <p class="source-org copyright">&copy; <?php //echo date('Y'); ?> <?php //bloginfo( 'name' ); ?>.</p> -->

		<!-- <div id="footer-find-us">
		<span class="map-icon">
		<img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/footer-section/maps-icon.png" alt="locate us"></span>

		<span class="map-text">Find Us</span>
	</div>

	<div id="footer-address">
	<p class="address-heading">RCI ENVIRONNEMENT INC.</p>
	<p class="address-body">9501, boul. Ray Lawson Anjou (Quebec) H1J 1L4</p>
</div>

<div id="footer-img-recycle">
<img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/footer-section/rci-icon.png" alt="rci icon recycle recongnition">
</div>

<div id="footer-img-prize">
<img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/footer-section/rci-prize.png" alt="rci prize award recongnition">
</div> -->

<!-- find us wrapper desktop -->
<div id="findus-wrapper-desktop">
		<?php dynamic_sidebar( 'footerfindus' ); ?>
</div>

<!-- social icon desktop -->
<div id="social-icon-wrapper-desktop">
	<div class="social-red-line">
	</div>
	<div class="social-icon-textarea tablet">
		<?php dynamic_sidebar( 'stay-connected-text' );?>
	</div>
	<div class="red-border">
	</div>
	<div class="red-triangle"></div>
	<div class="social-icons">
		<?php dynamic_sidebar( 'social-icon-bar' );?>
	</div>
</div>


<!-- social icon tablet view -->
<div id="social-icon-wrapper-tablet">
	<div class="social-red-line">
	</div>
	<div class="social-icon-textarea tablet">
		<?php dynamic_sidebar( 'stay-connected-text' );?>
	</div>
	<div class="social-icons">
		<?php dynamic_sidebar( 'social-icon-bar' );?>
	</div>
</div>


<!-- find us wrapper tablet view -->
<div id="findus-wrapper-tablet">
		<?php dynamic_sidebar( 'footerfindus' ); ?>
</div>



<!-- customer service desktop -->
<div id="customer-service-wrapper-desktop">

	<div class="reach-us-text">
		<?php dynamic_sidebar( 'reach-us-247' );?>
	</div>

	<div class="customer-service-text">
		<?php dynamic_sidebar( 'customer-service-info' );?>
	</div>

	<div class="red-border"></div>
	<div class="red-triangle"></div>

	<div class="customer-service-info-wrapper">

		<div class="phone-area-wrapper">
			<div class="customer-area-phone-icon">
				<?php dynamic_sidebar( 'customer-area-phone' ); ?>
			</div>
			<div class="customer-area-phone-text">
			<?php dynamic_sidebar( 'customer-area-phone-text' );?>
			</div>
		</div>

		<div class="toll-area-wrapper">
			<div class="customer-area-toll-icon">
				<?php dynamic_sidebar( 'customer-area-toll' ); ?>
			</div>

			<div class="customer-area-toll-text">
				<?php dynamic_sidebar( 'customer-area-toll-text' ); ?>
			</div>

			<div class="customer-area-toll-free-text">
				<?php dynamic_sidebar( 'customer-area-toll-free-text' ); ?>
			</div>
		</div>

		<div class="fax-area-wrapper">
			<div class="customer-area-fax-icon">
				<?php dynamic_sidebar( 'customer-area-fax' ); ?>
			</div>

			<div class="customer-area-fax-text">
				<?php dynamic_sidebar( 'customer-area-fax-text' ); ?>
			</div>
		</div>

		<div class="email-area-wrapper">
			<div class="customer-area-email-icon">
				<?php dynamic_sidebar( 'customer-area-email' );?>
			</div>

			<div class="customer-area-email-text">
				<?php dynamic_sidebar( 'customer-area-email-text' );?>
			</div>
		</div>


	</div>

</div>

<!-- customer service tablet -->
<div id="customer-service-wrapper-tablet">

<div class="customer-red-line"></div>

<div class="customer-text-wrapper">

	<span class="reach-us-text">
		<?php dynamic_sidebar( 'reach-us-247' );?>
	</span>

	<span class="border-between"></span>

	<span class="customer-service-text">
		<?php dynamic_sidebar( 'customer-service-info' );?>
	</span>

</div>

	<div class="customer-service-info-wrapper">

		<div class="phone-area-wrapper">
			<div class="customer-area-phone-icon">
				<?php dynamic_sidebar( 'customer-area-phone' ); ?>
			</div>
			<div class="customer-area-phone-text">
			<?php dynamic_sidebar( 'customer-area-phone-text' );?>
			</div>
		</div>

		<div class="fax-area-wrapper">
			<div class="customer-area-fax-icon">
				<?php dynamic_sidebar( 'customer-area-fax' ); ?>
			</div>

			<div class="customer-area-fax-text">
				<?php dynamic_sidebar( 'customer-area-fax-text' ); ?>
			</div>
		</div>

		<div class="toll-area-wrapper">
			<div class="customer-area-toll-icon">
				<?php dynamic_sidebar( 'customer-area-toll' ); ?>
			</div>

			<div class="customer-area-toll-text">
				<?php dynamic_sidebar( 'customer-area-toll-text' ); ?>
			</div>

			<div class="customer-area-toll-free-text">
				<?php dynamic_sidebar( 'customer-area-toll-free-text' ); ?>
			</div>
		</div>

		<div class="email-area-wrapper">
			<div class="customer-area-email-icon">
				<?php dynamic_sidebar( 'customer-area-email' );?>
			</div>

			<div class="customer-area-email-text">
				<?php dynamic_sidebar( 'customer-area-email-text' );?>
			</div>
		</div>


	</div>

</div>



<!-- lower footer tabs desktop -->
<div id="lower-footer-tabs-desktop">

	<div class="billing-area">
		<?php dynamic_sidebar( 'footer-tabs' );  ?>
	</div>

	<!-- button color - #272727
	text color - #666666 -->

	<div class="admin-area">
		<?php dynamic_sidebar( 'footer-admin' ); ?>
	</div>

	<div class="account-area">
		<?php	dynamic_sidebar( 'account-area' ); ?>
	</div>

	<div class="sales-area">
		<?php	dynamic_sidebar( 'sales-area' ); ?>
	</div>

	<div class="repair-area">
		<?php	dynamic_sidebar( 'repair-area' ); ?>
	</div>

</div>


<!-- lower footer tabs tablet -->
<div id="lower-footer-tabs-tablet">

	<div class="billing-area">
		<?php dynamic_sidebar( 'footer-tabs' );  ?>
	</div>

	<!-- button color - #272727
	text color - #666666 -->

	<div class="admin-area">
		<?php dynamic_sidebar( 'footer-admin' ); ?>
	</div>

	<div class="account-area">
		<?php	dynamic_sidebar( 'account-area' ); ?>
	</div>

	<div class="sales-area">
		<?php	dynamic_sidebar( 'sales-area' ); ?>
	</div>

	<div class="repair-area">
		<?php	dynamic_sidebar( 'repair-area' ); ?>
	</div>

</div>

<!-- billing info desktop -->
<div id="billing-info-wrapper-desktop">

		<div class="billing-info">

			<div class="billing-title">
			<?php dynamic_sidebar( 'billing-info-title' );?>
			</div>

			<div class="billing-close-icon">
				<i class="fa fa-times-circle-o" aria-hidden="true"></i>
			</div>

			<div class="billing-inner-section-wrapper">

			<div class="billing-phone-wrapper">

			<div class="billing-phone-icon">
			<?php	dynamic_sidebar( 'billing-info-phone-icon' );?>
			</div>
			<div class="billing-phone-text">
				<?php	dynamic_sidebar( 'billing-info-phone-text' );?>
			</div>

			</div>

			<div class="billing-fax-wrapper">

			<div class="billing-fax-icon">
				<?php	dynamic_sidebar( 'billing-info-fax-icon' );?>
			</div>
			<div class="billing-fax-text">
				<?php	dynamic_sidebar( 'billing-info-fax-text' );?>
			</div>

			</div>

			<div class="billing-email-wrapper">

			<div class="billing-email-icon">
				<?php	dynamic_sidebar( 'billing-info-email-icon' );?>
			</div>
			<div class="billing-email-text">
				<?php	dynamic_sidebar( 'billing-info-email-text' );?>
			</div>

			</div>
			</div>

			<div class="arrow-down">
			</div>

		</div>

</div>


<!-- billing info tablet -->
<div id="billing-info-wrapper-tablet">

		<div class="billing-info">

			<div class="billing-title">
			<?php dynamic_sidebar( 'billing-info-title' );?>
			</div>

			<div class="billing-close-icon">
				<i class="fa fa-times-circle-o" aria-hidden="true"></i>
			</div>

			<div class="billing-inner-section-wrapper">

			<div class="billing-phone-wrapper">

			<div class="billing-phone-icon">
			<?php	dynamic_sidebar( 'billing-info-phone-icon' );?>
			</div>
			<div class="billing-phone-text">
				<?php	dynamic_sidebar( 'billing-info-phone-text' );?>
			</div>

			</div>

			<div class="billing-fax-wrapper">

			<div class="billing-fax-icon">
				<?php	dynamic_sidebar( 'billing-info-fax-icon' );?>
			</div>
			<div class="billing-fax-text">
				<?php	dynamic_sidebar( 'billing-info-fax-text' );?>
			</div>

			</div>

			<div class="billing-email-wrapper">

			<div class="billing-email-icon">
				<?php	dynamic_sidebar( 'billing-info-email-icon' );?>
			</div>
			<div class="billing-email-text">
				<?php	dynamic_sidebar( 'billing-info-email-text' );?>
			</div>

			</div>
			</div>

			<div class="arrow-down">
			</div>

		</div>

</div>



</div>

<div id="copyright">
	<p class="copy-text">All Rights Reserved &copy; RCI Environnement Inc</p>
</div>

</footer>

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>

</body>

</html> <!-- end of site. what a ride! -->
