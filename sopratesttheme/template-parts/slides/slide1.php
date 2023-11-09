<?php
/**
 * Title: SLIDE 1
 * Slug: template-parts/slides/slide1
 * Categories: slide-1
 * Description: First slide inside the section 1 with the photo of the first girl
 */
?>

<section class="section-slide-1 outer-slide-area">
    <div class="container content-container">
        <div class="main-component">
            <div class="main-component_subtitles">
                <p class="main-component_subtitles_sub1">Banking Platform</p>
                <p class="main-component_subtitles_sub2">01<b>/02</b></p>
            </div>
            <h1 class="main-component_title">Component<br> Banking at scale</h1>
            <?php get_template_part('template-parts/components/button-1', null, array('class1' => 'button-1', 'class2' => 'button-1_white', 'text' => 'DISCOVER')); ?>
        </div>
    </div>

<!--VISUAL ASSETS controlled by the outer area-->
<img class="section-1-and-2-vector" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/vector5.svg" alt="Sopra vector infinite" />
<img class="section-1-bg-photo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img2.png" alt="Sopra photo 1" />
<!--END VISUAL ASSETS-->
</section>

