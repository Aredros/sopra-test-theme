<?php
/**
 * Title: VIDEO POSTS TEMPLATE
 * Slug: template-parts/content/posts/video-1
 * Categories: videos, slide-3
 * Description: Template for all video posts shown on the third Slide
 */
?>

<?php
//tag
$tag_class = isset($args['tag-data']['tag-class']) ? $args['tag-data']['tag-class'] : 'blue-2-gradient';
$tag_title = isset($args['tag-data']['tag-title']) ? $args['tag-data']['tag-title'] : 'Unknown';
//extra card data
$card_text = isset($args['card-data']['card-text']) ? $args['card-data']['card-text'] : 'Unknown text';
$card_catch = isset($args['card-data']['card-catchphrase']) ? $args['card-data']['card-catchphrase'] : 'Unknown catch';
$card_catch_color = isset($args['card-data']['card-catchphrase-color']) ? $args['card-data']['card-catchphrase-color'] : 'blue-2-gradient';
$card_author = isset($args['card-data']['card-author']) ? $args['card-data']['card-author'] : '_';
$card_link = isset($args['card-data']['card-link']) ? $args['card-data']['card-link'] : '#';
?>


<article class="card">
    <div class="card_tag <?php echo $tag_class; ?>">
        <p class="text-dark font-weight-bold">
            #<?php echo $tag_title; ?>
        </p>       
    </div>
    <p class="card_title">
        <?php echo $card_text; ?>
        <b class="<?php echo $card_catch_color; ?>"><?php echo $card_catch; ?></b>
    </p>
    <div class="card_details">
        <p class="card_details_author mb-0"><?php echo $card_author; ?></p>
        <a class="card_details_readme" href="<?php echo $card_link; ?>">> WATCH</a>
    </div>
</article>