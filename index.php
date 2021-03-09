<!-- 学んだ事 -->
<!-- containerとrowはループの外側。 -->


<?php get_header(); ?>
    <main>
<!---------------------------------------------
アニメーション
-------------------------------------->
    <div class="container_for_js container">
        <div class="box_for_js">
          <h1>Hello, world!</h1>
          <p><a href="https://github.com/peacepostman/wavify">I'm Web Enginner</a></p>
        </div>
      </div>
      
      <svg  version="1.1" xmlns="http://www.w3.org/2000/svg"><path id="wave" d=""/></svg>
<!-------------------------------------------
About
-------------------------------------->
            <section id="about">
            <h2 class="title poppins text-center m-5"><span>私について</span></h2>

                <div class="container ">   
                  <div class="row">
                    <div class="col-md-6 p-5">
                      <img class="img-fluid rounded-pill" src="<?php echo get_template_directory_uri(); ?>/img/new-profile.jpg" alt="">
                    </div>
                    <div class="col-md-6 d-flex align-items-center text-secondary">
                      <div class="profile-text">
                      1998年生まれ。<br>神奈川県川崎市在住。<br>2020年4月に4年制大学を卒業。<br>コーディング、WordPressサイトの作成ができます。<br>このポートフォリオは、WordPressで自作しました。
                    </div>
                    </div>
                  </div>      
                </div>
               </section> 
<!-------------------------------------------
service
-------------------------------------->
          <section id="service">
                <h2 class="title poppins text-center m-5"><span>私ができること</span></h2>
                <div class="container">
                <div class="row">
                  <div class="col-md-6 text-center p-1">
                    <h3 class="h4　poppins my-3">コーディング</h3>
                    <div class="service-icon">
                    <i class="fas fa-code fa-5x"></i>
                    </div>
                    <p class="text text-secondary p-3">デザインに忠実なコーディングを心がけています。Bootstrapなどのフレームワークを使い、後々保守しやすいコーディングを行います。</p>
                    </div>
                  <div class="col-md-6 text-center p-1">
                  <h3 class="poppins my-3">WordPress</h3>
                  <div class="service-icon">
                  <i class="fab fa-wordpress fa-5x"></i>
                  </div>
                  <p class="text text-secondary p-3">WordPressのオリジナルテーマ作成や、<br>既存テーマのカスタマイズ、修正ができます。</p>
                  </div>
                </div>
              </div>
        </section>
<!-------------------------------------------
works
-------------------------------------->

<section id="works">
          <h2 class="title poppins text-center mt-5"><span>制作物</span></h2>  
           <div class="container"> 
                 <div class="row"> 
            <?php if(have_posts()): while(have_posts()): the_post(); ?> 
          <div class="col-md-4 text-center mt-4">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium',array('class'=>'img-fluid img-thumbnail')); ?></a>
            </div>
              <?php endwhile;
              endif;
              ?> 
              </div>
              </div>
        </section>
    </main>
    <?php get_footer(); ?>
    <!-- <img class="img-fluid img-thumbnail" src="img/bootstrapwithwpのコピー.png" alt=""> -->