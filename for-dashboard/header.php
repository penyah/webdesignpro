<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/html5shiv.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/respond.min.js"></script>
<![endif]-->       
<?php zee_favicon();?>
<?php wp_head(); ?>
<style>
.navbar .navbar-main {
margin-top: 20px;
float: left;
}
ul#menu-company-menu li:before {
content: "";
}
.navbar .navbar-main{
  margin-top:0px;
}
.navbar>.container .navbar-brand{
  margin-right:20px;
}
</style>

</head><!--/head-->

<body <?php body_class() ?>>


  <header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php _e('Toggle navigation', ZEETEXTDOMAIN); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php logo();?>
      </div>

      <div class="hidden-xs">
        <?php 
        if ( has_nav_menu( 'dashboard' ) ) {
          wp_nav_menu( array(
            'theme_location'  => 'dashboard',
            'container'       => false,
            'menu_class'      => 'nav navbar-nav navbar-main',
            'fallback_cb'     => 'wp_page_menu',
            'walker'          => new wp_bootstrap_navwalker()
            )
          ); 
        }
        ?>
        <ul class="nav navbar-nav navbar-right" style="margin-top:20px;">
        <img class="img-circle img-thumbnail" src="http://www.wordpress.workplace/wp-content/uploads/2013/09/team2.png" alt="" style="width:30px;float:left;margin-top:5px;">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Username <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Credits</a></li>
                <li class="divider"></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
      </div>

      <div id="mobile-menu" class="visible-xs">
        <div class="collapse navbar-collapse">
          <?php 
          if ( has_nav_menu( 'dashboard' ) ) {
            wp_nav_menu( array(
              'theme_location'  => 'dashboard',
              'container'       => false,
              'menu_class'      => 'nav navbar-nav',
              'fallback_cb'     => 'wp_page_menu',
              'walker'          => new wp_bootstrap_mobile_navwalker()
              )
            ); 
          }
          ?>
        </div>
      </div><!--/.visible-xs-->
    </div>
  </header><!--/#header-->

  <?php //get_template_part( 'sub', 'title' ); ?>

  <?php if( ! is_page() ) { ?>
  <section id="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div id="primary" class="content-area">
            <?php } ?>

