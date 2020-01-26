<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Webdot</title>
<meta name="description"  content="Разработка сайтов, продажа шаблонов на wp" />


<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="theme-color" content="#212121"/>
       <meta name="msapplication-navbutton-color" content="#212121"/>
       <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

<!-- Web Fonts
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- CSS
================================================== -->



   
   


<!-- Favicons
================================================== -->
<link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/main/favicon.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">


 
<script>
document.documentElement.className = 'js';
var supportsCssVars = function() {
var s = document.createElement('style'),
support;

s.innerHTML = "root: { --tmp-var: bold; }";
document.head.appendChild(s);
support = !!(window.CSS && window.CSS.supports && window.CSS.supports('font-weight', 'var(--tmp-var)'));
s.parentNode.removeChild(s);
return support;
}
if (!supportsCssVars()) alert('Please view this demo in a modern browser that supports CSS Variables.')
</script>

<?php wp_head(); ?>
</head>
<body>

<!-- Page preloader wrap
================================================== -->

<div class="animsition">

<!-- Nav and Logo
================================================== -->

<header class="cd-header">
<div class="header-wrapper">
<div class="logo-wrap">
<a href="<?php echo home_url();?>" class="cursor-link animsition-link"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/webdot.png" alt=""></a>
</div>  <span class="catitle"><a href="tel:+ 375293175383" class="cursor-link">/тел: +375 (29) 317-53-83</a> &nbsp;  &nbsp; &nbsp;<a href="mailto:info@webdot.by" class="cursor-link">/почта: info@webdot.by</a></span> 
<div class="nav-but-wrap">
<div class="menu-icon cursor-link">
<span class="menu-icon__line menu-icon__line-left"></span>
<span class="menu-icon__line"></span>
<span class="menu-icon__line menu-icon__line-right"></span>
</div>
</div>
</div>

</header>



<div class="nav">
<div class="nav__content">

<div class="menu">
    <ul class="nav__list">


<?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'li',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav__list-item',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>


       
    </ul>

   

</div>



</div>
</div>



<!-- Primary Page Layout
================================================== -->
<script>
$(document).ready(function () {
    var location = window.location.href;
   
    $('.menu li').each(function () {
        var link = $(this).find('a').attr('href');
   
        if (location.indexOf(link) !== -1)
        {
            $(this).addClass('nav__list-item active-nav');
        }
    });
});
</script>