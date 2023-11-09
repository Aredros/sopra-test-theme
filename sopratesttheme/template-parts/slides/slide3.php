<?php
/**
 * Title: SLIDE 3
 * Slug: template-parts/slides/slide3
 * Categories: slide-3
 * Description: First and only slide inside the section 3 with the photo of the couple
 */
?>

<section class="section-slide-3 outer-slide-area">
    <div class="container content-container">
        <div class="slide-3-component">
            <h2 class="slide-3-component_title">Our Mission</h2>
            <p class="slide-3-component_description">Life is made up of changes. For hundreds of years, financial institutions have helped people achieve their goals, secure their futures and take control of their lives. We believe that our technology and the power of our engagement must help our clients transform themselves and fulfill their mission.</p>
            <?php get_template_part('template-parts/components/button-1', null, array('class1' => 'button-1', 'class2' => 'button-1_black', 'text' => 'EXPLORE')); ?>
        </div>
    </div>

<!--VISUAL ASSETS controlled by the outer area-->
<img class="section-3-vector" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vector1.svg" alt="Sopra vector plus and arrow" />
<img class="section-3-bg-photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img1-v2.png" alt="Sopra Sopra photo 2" />
<!--END VISUAL ASSETS-->
</section>
