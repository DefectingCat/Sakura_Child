<?php
/**
 * 修改post卡片样式
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Akina
 */
//function custom_short_excerpt($excerpt){
//	return substr($excerpt, 0, 120);
//}
//add_filter('the_excerpt', 'custom_short_excerpt');
$i=0; while ( have_posts() ) : the_post(); $i++;
$class = ($i%2 == 0) ? 'post-list-thumb-left' : ''; // 如果为偶数
if(has_post_thumbnail()){
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
	$post_img = $large_image_url[0];
}else{
	$post_img = "https://api.ixiaowai.cn/api/api.php";
}
$the_cat = get_the_category();
// 摘要字数限制

//add_filter( 'excerpt_length', 'custom_excerpt_length', 160 );

?>
	<article class="post post-list-thumb <?php echo $class; ?>" itemscope="" itemtype="http://schema.org/BlogPosting">
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>"><img class="lazyload" src="https://cdn.jsdelivr.net/gh/moezx/cdn@3.0.1/img/svg/loader/orange.progress-bar-stripe-loader.svg" data-src="<?php echo $post_img; ?>"></a>
		</div><!-- thumbnail-->

        <div class="post-content-wraps">
            <div class="post-content">
                <a href="<?php the_permalink(); ?>" class="post-title"><h3><?php the_title(); ?></h3></a>
                <div class="float-contents">
                    <?php the_excerpt(); ?>
                </div>
                <div class="post-date">
                    <i class="iconfont icon-time"></i><?php echo poi_time_since(strtotime($post->post_date_gmt)); ?>
                    <?php if (is_sticky()) : ?>
                        &nbsp;<i class="iconfont hotpost">&#xe758;</i>
                    <?php endif ?>
                </div>
                <div class="post-meta">
                    <span class="enthusiasm"><i class="iconfont icon-attention"></i><?php echo get_post_views(get_the_ID()); ?> 热度</span>
                    <span class="comment-number"><i class="iconfont icon-mark"></i><?php comments_popup_link('NOTHING', '1 条评论', '% 条评论'); ?></span>
                    <span class="classification"><i class="iconfont icon-file"></i><a href="<?php echo esc_url(get_category_link($the_cat[0]->cat_ID)); ?>"><?php echo $the_cat[0]->cat_name; ?></a></span>
                </div>
            </div>
        </div>
		
	</article>
<?php
endwhile; 