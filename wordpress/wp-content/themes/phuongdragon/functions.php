<?php
define('THEME_URL',get_stylesheet_directory());
define('CORE',THEME_URL . "/core" );

require_once( CORE ."/init.php");

if(!isset($content_width)){
  $content_width=620;  
}

if(!function_exists('phuongdragon_theme_setup'))
{
    function phuongdragon_theme_setup(){
      $language_folder=THEME_URL . '/languages';
      load_theme_textdomain('phuongdragonbaby',$language_folder) ;
      add_theme_support('automatic-feed-links'); 
      add_theme_support('post-thumbnails');
      add_theme_support('post-formats',array(
        'image',
        'video',
        'galley',
        'quote',
        'link'
      ));
      add_theme_support('title-tag');
      $default_background =array(
          'default-color'=>'#e8e8e8'
      );
      add_theme_support('custom-background',$default_background);
      register_nav_menu('primary-menu',__('Primary Menu','phuongdragonbaby'));
      $sidebar=array(
          'name'=>__('Main Sidebar','phuongdragonbaby'),
          'id'=> 'main-sidebar',
          'description'=>__('Default sidebar'),
          'class'=>'main-sidebar',
          'before_title'=>'<h3 class="widgettitle">',
          'after_title'=>'</h3>'
      );
      register_sidebar($sidebar);

    }
   
    add_action('init','phuongdragon_theme_setup');
}

if(!function_exists('phuongdragon_header')){
  function phuongdragon_header(){ ?>
   <div class="site-name">
    <?php
        if(is_home()){
            printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename')); 
        }else{
            printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',
            get_bloginfo('url'),
            get_bloginfo('description'),
            get_bloginfo('sitename')); 
        }
        ?>
     </div>
     <div class="site-description">
     <?php bloginfo('description'); ?>
     </div> 
     <?php
   }
}

if(!function_exists('menu')){
  function phuongdragon_menu($menu){
       $menu=array(
         'theme_location'=> $menu,
         'container'=>'nav',
         'container_class'=>$menu
       );
       wp_nav_menu($menu);
  } 
}

if(!function_exists('phuongdragon_pagination')){
  function phuongdragon_pagination(){
     if($GLOBALS['wp_query']-> max_num_pages<2)
     {
       return '';
     } ?>
      <nav class="pagination" role="navigation">
          <?php if (get_next_posts_link()): ?>
            <div class="prev"><?php next_posts_link(__('Older Posts',"phuongdragonbaby")) ?> </div>
          <?php endif ?>
          <?php if (get_previous_posts_link()): ?>
            <div class="next"><?php previous_posts_link(__('Newest Posts',"phuongdragonbaby")) ?> </div>
          <?php endif ?>
        </nav>
      <?php 
  } 
}

if(!function_exists('phuongdragon_thumbnail')){
  function phuongdragon_thumbnail($size){
    if(!is_single()&& has_post_thumbnail()&& !post_password_required() || has_post_format('image')): ?>
    <figure class="post-thumbnail">
        <?php the_post_thumbnail($size); ?>     
    </figure>
    <?php endif ?>
    <?php
  } 
}

if(!function_exists('phuongdragon_entry_header')){
  function phuongdragon_entry_header(){ ?>
   <?php if(is_single()): ?>
   <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h1>
    <?php else:?>
    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?></a></h2>
    <?php endif ?>
    <?php
  } 
}
