<?php

/**
 * Layout Default
 * @version     1.0.0
 **/

$widget_id = isset($widget_id) ? $widget_id : 'sw_cookie_slider_' . rand() . time();
$default = array(
    'post_type' => 'product',
    'orderby' => $orderby,
    'order' => $order,
    'post_status' => 'publish',
    'showposts' => $numberposts
);

$default['tax_query'] = array(
    array(
        'taxonomy' => 'product_cat',
        'field' => 'slug',
        'terms' => isset( $_COOKIE['ProductCookie'] ) ? $_COOKIE['ProductCookie'] : '')
);


$list = new WP_Query($default);
do_action('before');
if ($list->have_posts()) { ?>
    <div id="<?php echo 'slider_' . $widget_id; ?>"
         class="sw-woo-container-slider responsive-slider woo-slider-default loading"
         data-lg="<?php echo esc_attr($columns); ?>" data-scroll="<?php echo esc_attr($scroll); ?>"
         data-interval="<?php echo esc_attr($interval); ?>" data-autoplay="<?php echo esc_attr($autoplay); ?>">
        <div class="top-tab-slider">
            <div class="order-title">
                <?php
                $titles = strpos($title1, ' ');
                $title = ($titles !== false) ? '<span>' . substr($title1, 0, $titles) . '</span>' . ' ' . substr($title1, $titles + 1) : $title1;
                echo '<h2><strong>' . $title . '</strong></h2>';
                ?>

                <?php if ($image_icon != '') { ?>
                    <div class="order-icon">
                        <?php
                        $image_thumb = wp_get_attachment_image($image_icon, 'thumbnail');
                        echo $image_thumb;
                        ?>
                    </div>
                <?php } ?>

                <?php echo ($description != '') ? '<div class="order-desc">' . $description . '</div>' : ''; ?>
            </div>
        </div>
        <div class="resp-slider-container">
            <div class="slider responsive">
                <?php
                $count_items = 0;
                $numb = ($list->found_posts > 0) ? $list->found_posts : count($list->posts);
                $count_items = ($numberposts >= $numb) ? $numb : $numberposts;
                $i = 0;
                while ($list->have_posts()): $list->the_post();
                    global $product, $post;
                    $class = ($product->get_price_html()) ? '' : 'item-nonprice';
                    if ($i % $item_row == 0) {
                        ?>
                        <div class="item <?php echo esc_attr($class) ?>">
                    <?php } ?>
                    <?php include(WCTHEME . '/default-item.php'); ?>
                    <?php if (($i + 1) % $item_row == 0 || ($i + 1) == $count_items) { ?> </div><?php } ?>
                    <?php $i++; endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <?php
}
?>
