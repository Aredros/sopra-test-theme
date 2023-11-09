<?php
/**
 * Title: VIDEOS POST CONTAINER TEMPLATE
 * Slug: template-parts/components/videos-container
 * Categories: videos, slide-
 * Description: AREA that holds all video posts
 */
?>

<div class="slider-container videos-container">
    <h2>Videos</h2>
    <div class="inner-slider">
       <!-----post 1----->
       <?php get_template_part('template-parts/content/videos/video-1', 
                                null, 
                                array(
                                    'tag-data' => array(
                                        'tag-class'=> 'yellow-gradient',
                                        'tag-title' => 'LENDING AND LEASING'),
                                     'card-data' => array(
                                        'card-text' => "Sopra Banking Software partners the first Digital Women's Day on the African Continent",
                                        'card-catchphrase' => 'I INFOGRAPHY I',
                                        'card-catchphrase-color' => 'yellow-gradient',
                                        'card-author' => 'Philippe Serafin',
                                        'card-link' => '#',
                                     ))); ?>
       <!-----post 2----->
       <?php get_template_part('template-parts/content/videos/video-1', 
                                null, 
                                array(
                                    'tag-data' => array(
                                        'tag-class'=> 'green-gradient',
                                        'tag-title' => 'PAYMENT'),
                                     'card-data' => array(
                                        'card-text' => "How can lenders mitigate wholesale finance losses during the global pandemic?",
                                        'card-catchphrase' => ' ',
                                        'card-catchphrase-color' => 'green-gradient',
                                        'card-author' => 'Kris Turner',
                                        'card-link' => '#',
                                     ))); ?>       
       <!-----post 3----->
       <?php get_template_part('template-parts/content/videos/video-1', 
                                null, 
                                array(
                                    'tag-data' => array(
                                        'tag-class'=> 'blue-2-gradient',
                                        'tag-title' => 'OPEN BANKING'),
                                     'card-data' => array(
                                        'card-text' => "Adopt vs. adapt: Which approach is best for your business?",
                                        'card-catchphrase' => ' I WHITE PAPER I ',
                                        'card-catchphrase-color' => 'blue-2-gradient',
                                        'card-author' => 'Fabien Oliveira',
                                        'card-link' => '#',
                                     ))); ?>
        
    </div>
</div>