<?php get_header(); ?>
<!-- <main class="bg-light"> -->
      <div class="container">
        <div class="row pt-3">
          <!--メインコンテンツ-->
          <div class="col-md-10 mx-auto col-12"> 
         <!-- 記事の概要を表示 -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="bg-white py-3 mb-5 text-center">
              <!--記事タイトル-->
              <h1 class="px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h1>
              <!--本文-->
              <div class="text-left px-2"><?php the_content(); ?></div>
            </div>
　         <?php endwhile; else : ?>
　 　      <p>記事がありません。</p>
            <?php endif; ?>
          </div>
        </div>       
      </div>
       