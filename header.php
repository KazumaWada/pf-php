<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="<?php echo get_template_directory_uri() ?>/index.js" type="text/javaScript" charset="utf-8"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
           <div class="logo mt-2">
            <a href="<?php echo home_url(); ?>"><h1 class="text-dark h3 pt-3"><?php bloginfo('name'); ?></h1></a>
           </div>
       <?php 
       $args=array(
         'menu'=>'global-navigation',
         'container'=>false,
         'menu_class'=>'nav justify-content-center p-3',
         'link_before'     => '<span class="nav-item text-dark m-2">',
	       'link_after'      => '</span>',

       );
       wp_nav_menu($args);
       ?>
       　<!-- パンくずリストスタート -->
        <?php if(!is_home()): ?>
        <div class="breadcrumbs">
        <?php 
        // パンくずリストを表示
        if(function_exists('bcn_display')){
          bcn_display();
        }
        ?>
        </div>
      <?php endif; ?> 
      <!-- パンくずリスト終わり -->
        </div>
    </div>
    </header>

 <!-- <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link active text-dark" href="">Home</a>
      　　　　　　</li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Contact</a>
            </li>
          </ul> -->