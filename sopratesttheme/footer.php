<?php
/**
 * Title: FOOTER
 * Slug: 
 * Categories: Footer, main-template
 * Description: Footer included inside the main area so it will be responding to the fullpage.js
 */
?>


<?php
    wp_footer();
    ?>

<footer class="position-relative py-4">
  <div class="container position-relative">
    <!--BOTTOM MENU-->
    <?php wp_nav_menu( array(
          'theme_location' => 'sopra-bot-footer',
          //class and id of the div surrounding the nav
          'container_class' => 'menu-footer_menu_container',
          //the ul of the nav
          'menu_id' => 'bottom-nav-menu',
          'menu_class' => 'd-flex justify-content-between flex-wrap m-0 p-0 footer-menu flex-sm-row flex-column',
          //the li of the nav
          'menu_item_class' => 'menu-item',
    )); ?>
        <!-- WHITE LINE BORDER -->
    <div class="pb-5 pb-lg-4 border-bottom border-white"></div>
  </div>
  <div class="sub-footer container d-flex justify-content-between flex-wrap-reverse flex-md-wrap">
    <div>
          <!--BOTTOM SUB MENU-->
      <?php wp_nav_menu( array(
          'theme_location' => 'sopra-sub-bot-footer',
          //class and id of the div surrounding the nav
          'container_class' => 'sub-footer_container',
          //the ul of the nav
          'menu_id' => 'menu-sub_footer',
          'menu_class' => 'ps-0 py-3 m-0 subfooter-menu sub-footer_container_ul',
          //the li of the nav
          'menu_item_class' => 'menu-item',
      )); ?>
          <!-- RIGHTS RESERVED TEST -->
          © Sopra Banking Software. All Rights Reserved. ® Sopra Banking Software is a registered trademark of Sopra Steria.        
    </div>
    <div class="pt-3 pt-lg-4 footer-logo">
      <img class="ms-lg-auto" alt="Sopra Banking Software Logo" src="https://www.soprabanking.com/wp-content/themes/sopra/assets/svg/logo-v2.svg" />
    </div>
  </div>
</footer>
