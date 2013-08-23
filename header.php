<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description') ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version') ?>" />
<title><?php bloginfo('name'); wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Comments RSS Feed" href="<?php bloginfo('comments_rss2_url') ?>"  />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- Подключение jQuery -->
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head() ?>
<script type="text/javascript">
    function change(){
        var datetoday;
        var timenow;
        var thistime;
        var bs;
            datetoday=new Date();
            timenow=datetoday.getTime();
            datetoday.setTime(timenow);
            thistime=datetoday.getHours();
            bs=document.getElementById("body_screen");
            
            if(thistime<18&&thistime>5){
               bs.style.cssText="background:#FFFFFF;"; 
            }else{
                bs.style.cssText="background:#000000;";
            }
        
    }
    windows.onload= function(){
        change();
    }
</script>
</head>

<body id="body_screen">
    <div class="site-header">
        <div class="container">
            <div id="logo">
                <?php if ( is_home() && !is_paged() ) { ?>                        
                            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php wp_title();?>"/>    <!-- вывод на главной-->
                        <?php } else { ?> 
                            <a href="<?php bloginfo('home'); ?>" title="<?php wp_title();?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php wp_title();?>"/></a><!-- вывод не на главной-->                            
                        <?php } ?>                                    
               
            </div>  <!-- конец logo -->
            <div id="info-links-top">
                <?php wp_nav_menu( array( 'theme_location' => 'info-links-top' ) ); ?>
            </div>
            <script type="text/javascript">
            var timer = setTimeout(function(){/* здесь скрываем меню */}, 500);
    jQuery(document).ready(function(){
             
               if(jQuery("#menu-menu>li").hasClass('current_page_parent')){
        jQuery("#menu-menu>li>ul").show();
    }
                     
        jQuery("#menu-menu>li").hover(function(){                   
            jQuery(this).find('ul').show('slow');                  
        },
                 
               function(){
            if (!jQuery(this).hasClass('current_page_parent')){
                jQuery(this).find('ul').hide();
            }                      
          }
    );         
});
</script>   
        
<script type="text/javascript">
       function display_moskow()
       {
           document.getElementById('moskow').style.display='block';
           document.getElementById('allsites').style.display='none';
            document.getElementById('button_moskow').style.background='#5CB85C';
           document.getElementById('button_allsites').style.background='#ECECEC';
           document.getElementById('button_moskow').style.color='#ffffff';
           document.getElementById('button_allsites').style.color='#000000';
       }
 
       function display_allsites()
       {
            document.getElementById('moskow').style.display='none';
            document.getElementById('allsites').style.display='block';
           document.getElementById('button_moskow').style.background='#ECECEC';
           document.getElementById('button_allsites').style.background='#5CB85C';
           document.getElementById('button_moskow').style.color='#000000';
           document.getElementById('button_allsites').style.color='#ffffff';
       }
</script>
                    
            <div class="site-nav-bar">
                <?php get_search_form(); ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'site-nav' ) ); ?>
                    
            </div>
        </div>
    </div>
            