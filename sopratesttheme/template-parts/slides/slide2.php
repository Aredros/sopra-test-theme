<?php
/**
 * Title: SLIDE 2
 * Slug: template-parts/slides/slide2
 * Categories: slide-2
 * Description: Second slide inside the section 1 with the photo of the couple
 */
?>

<section class="section-slide-2 outer-slide-area">
    <div class="container content-container">
        <div class="main-component">
            <div class="main-component_subtitles">
                <p class="main-component_subtitles_sub1">Financing Platform</p>
                <p class="main-component_subtitles_sub2">02<b>/02</b></p>
            </div>
            <h1 class="main-component_title">World's #1<br> Lending Platform</h1>
            <?php get_template_part('template-parts/components/button-1', null, array('class1' => 'button-1', 'class2' => 'button-1_white', 'text' => 'DISCOVER')); ?>
        </div>
    </div>

<!--VISUAL ASSETS controlled by the outer area-->
<img class="section-1-and-2-vector" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vector4.svg" alt="Sopra vector infinite blue" />
<img class="section-1-bg-photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img1.png" alt="Sopra photo 2" />
<!--END VISUAL ASSETS-->
</section>
