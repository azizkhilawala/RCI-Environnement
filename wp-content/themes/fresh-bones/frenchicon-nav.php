<div id="top-header" class="top-wrap cf">
  <nav id="top-header-nav" class="top-header-nav">
    <div class="tel-wrapper">
    <span class="tel-icon"><i class="fa fa-phone fa-1x" aria-hidden="true"></i></span>
    <span class='tel-number-1'>514-352-2020</span>
    <span class="tel-number-2">1-877-565-2025</span>
    </div>
    <ul class="icons-list">
      <li id="hamburger-click"><span class="hamburger-icon"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></span></li>
      <li><a href="<?php echo home_url(); ?>" rel="no-follow"><img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/header-icons/home-icon.png" alt="<?php bloginfo('name') ?>" /></a></li>
      <li><a href="<?php echo site_url('fr_faq'); //site_url('faqs'); ?>" rel="no-follow"><img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/header-icons/faq-icon.png" alt="<?php bloginfo('name') ?>" /></a></li>
      <li><a href="<?php echo site_url('liens-utiles'); ?>" rel="no-follow"><img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/header-icons/quicklink-icon.png" alt="<?php bloginfo('name') ?>" /></a></li>
      <li><a href="<?php echo site_url('carrieres'); ?>" rel="no-follow"><img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/header-icons/career-icon.png" alt="<?php bloginfo('name') ?>" /></a></li>
      <li><a href="<?php echo site_url('terminologie'); ?>" rel="no-follow"><img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/header-icons/terminology-icon.png" alt="<?php bloginfo('name') ?>" /></a></li>
      <li><a href="<?php echo site_url('telecharger'); ?>" rel="no-follow"><img src="<?php echo get_stylesheet_directory_uri();?>/library/images/rci-assests/header-icons/download-icon.png" alt="<?php bloginfo('name') ?>" /></a></li>
    </ul>
<?php dynamic_sidebar( 'language' ); ?>
</nav>
</div>
