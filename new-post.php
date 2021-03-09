<!-- サブループ！ -->
<div class="container">
<div class="row pt-3">
<?php
$the_query = new WP_Query(
  array(
    'post_type'      => 'post',
  )
);
?>
<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : ?>
    <?php $the_query->the_post(); ?>
<div class="col-md-6 col-xs-12">
        <div class="text-center py-3 mb-5">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(500,500)); ?></a>
        <h2 class="px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h2>
        <p><?php the_time('Y-m-d'); ?></p>
         </div>
        </div><!-- col-md-6 -->
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div><!-- /.row -->
</div><!-- /.container -->
<!-- ハニワマンのサブループ記事を参考https://haniwaman.com/loop/ -->