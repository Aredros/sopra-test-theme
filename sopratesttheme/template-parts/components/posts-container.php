<?php
/**
 * Title: POST CONTAINER TEMPLATE
 * Slug: template-parts/components/posts-container
 * Categories: posts, slide-1
 * Description: AREA that holds all posts
 */
?>

<div class="slider-container">
    <h2>White papers</h2>
    <div class="inner-slider">
        <!-----post 1----->
        <?php get_template_part('template-parts/content/posts/post-1', 
                                null, 
                                array(
                                    'tag-data' => array(
                                        'tag-class'=> 'blue-2-gradient',
                                        'tag-title' => 'IA'),
                                     'card-data' => array(
                                        'card-text' => 'Sopra Banking Software announces tie-up with O.R. System',
                                        'card-catchphrase' => 'I VIDEO I',
                                        'card-catchphrase-color' => 'blue-2-gradient',
                                        'card-author' => 'Natalie Sweet',
                                        'card-link' => '#',
                                     ))); ?>
        <!-----post 2----->                                     
        <?php get_template_part('template-parts/content/posts/post-1', 
                                null, 
                                array(
                                    'tag-data' => array(
                                        'tag-class'=> 'blue-1-gradient',
                                        'tag-title' => 'OPEN BANKING'),
                                     'card-data' => array(
                                        'card-text' => 'Sopra Banking Software and Axway Prepare a digital platform for financial services players',
                                        'card-catchphrase' => 'WEBINAR',
                                        'card-catchphrase-color' => 'blue-1-gradient',
                                        'card-author' => 'Will Kitson',
                                        'card-link' => '#',
                                     ))); ?>
        <!-----post 3----->                                             
        <?php get_template_part('template-parts/content/posts/post-1', 
                                null, 
                                array(
                                    'tag-data' => array(
                                        'tag-class'=> 'orange-gradient',
                                        'tag-title' => 'CORPORATE'),
                                     'card-data' => array(
                                        'card-text' => "Sopra Banking Software sweeps the podium at IBS' 2018 annual ranking",
                                        'card-catchphrase' => 'INFOGRAPHY',
                                        'card-catchphrase-color' => 'orange-gradient',
                                        'card-author' => '_',
                                        'card-link' => '#',
                                     ))); ?>
        <!-----post 4----->                                              
        <?php get_template_part('template-parts/content/posts/post-1', 
                                null, 
                                array(
                                    'tag-data' => array(
                                        'tag-class'=> 'green-gradient',
                                        'tag-title' => 'PAYMENT'),
                                     'card-data' => array(
                                        'card-text' => 'Sopra Steria to acquire French core banking vendor SAB',
                                        'card-catchphrase' => 'WHITE PAPER',
                                        'card-catchphrase-color' => 'green-gradient',
                                        'card-author' => 'Will Kitson',
                                        'card-link' => '#',
                                     ))); ?>                                
        
    </div>
</div>