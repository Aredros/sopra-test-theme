<?php
/**
 * Title: BUTTON TEMPLATE 1
 * Slug: template-parts/components/button-1
 * Categories: basic-component
 * Description: Button used through all the site
 */
?>

<?php
$class1 = isset($args['class1']) ? $args['class1'] : '';
$class2 = isset($args['class2']) ? $args['class2'] : '';

$classes = array('button-1', $class1, $class2);
$classes = array_filter($classes); // Remove empty classes.
?>

<button class="<?php echo implode(' ', $classes); ?>">
    <?php echo $args['text'];  ?>
</button>