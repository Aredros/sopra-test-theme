<?php
/**
 * Title: INDEX
 * Slug: 
 * Categories: main-template
 * Description: Where the division between sections is, also the carousels being shown
 */
?>

<?php get_header(); ?>
<main id="fullpage">
    
    <!-------------SECTION 1 WITH SLIDES 1 and 2---------------->
    <div class="section" id="section1">

        <!--1st Slide-->
        <div class="slide" id='sect1-slide1'>
            <?php get_template_part('template-parts/slides/slide1') ?>
        </div>
        <!--2st Slide-->
        <div class="slide" id='sect1-slide2'>
            <?php get_template_part('template-parts/slides/slide2') ?>
        </div>
            <!--POSTs container 1-->
            <!--Normally there would be a post loop here, but that would be linked to the post db and not the theme, so I manually added these-->
        <?php get_template_part('template-parts/components/posts-container') ?>
        <!--Arrow down-->
        <img class="vertical-arrows vertical-arrows_arrow-down moveDownArrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left.svg" alt="arrow down" />
    </div>
    <!-------------SECTION 2 WITH SLIDE 3---------------->
        <!--3st Slide-->
    <div class="section" id="section2">
        <!--SLIDER-->
        <?php get_template_part('template-parts/slides/slide3') ?>
            <!--POSTs container 2-->
            <!--Normally there would be a post loop here, but that would be linked to the post db and not the theme, so I manually added these-->
        <?php get_template_part('template-parts/components/videos-container') ?>
            <!--Arrow up-->
        <img class="vertical-arrows vertical-arrows_arrow-up moveUpArrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left.svg" alt="arrow down" />
            <!--Arrow down-->
        <img class="vertical-arrows vertical-arrows_arrow-down moveDownArrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left.svg" alt="arrow up" />
    </div>
    <!-------------SECTION 4 WITH FOOTER---------------->
        <!--Footer and Last Section-->
    <div class="section fp-auto-height" id="section3">
        <?php //FOOTER Inside main --not the best practice, sorry
        get_footer(); ?>
    </div>

</main>
</body>
</html>