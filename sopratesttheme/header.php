<?php
/**
 * Title: HEADER
 * Slug: 
 * Categories: header, main-template
 * Description: Header of the site
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head> 
  
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
    <title><?php wp_title('Sopra banking test'); ?></title>
    <link rel='profile' href='http://gmpg.org/xfn/11' />
    <link rel='pingback' href='<?php bloginfo('pingback_url'); ?>' />
    
</head>
<body>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg bg-black">
      <div class="container content-container">
        <a class="navbar-brand" href="/Landing">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sopralogotop.jpg" alt="Sopra Banking" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 16 16"><path fill="white" fill-rule="evenodd" d="M0 3.75A.75.75 0 0 1 .75 3h14.5a.75.75 0 0 1 0 1.5H.75A.75.75 0 0 1 0 3.75ZM0 8a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H.75A.75.75 0 0 1 0 8Zm.75 3.5a.75.75 0 0 0 0 1.5h14.5a.75.75 0 0 0 0-1.5H.75Z" clip-rule="evenodd"/></svg>   

              </button>
              <div class="collapse navbar-collapse"> 
        <?php
            wp_nav_menu(array(
              'theme_location' => 'sopra-top-nav',
                  //class and id of the div surrounding the nav
                  'container'=> false,
                  //the ul of the nav
              'menu_class'=>'',
              'fallback_cb' => '_return_false',
              'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 m-lg-auto %2$s">%3$s</ul>',
              'depth' => 2,
               'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));  ?>   
            </div>   
      </div>
    </nav>
  </header>
  