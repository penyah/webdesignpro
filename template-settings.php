<?php 

/*
Template Name: Dashboard Settings
*/

get_template_part( 'for-dashboard/header'); 

 ?>

<div class="container" style="min-height:600px;">
<h2 style="text-align: center; margin-bottom:30px">Settings</h2>
<div class="row">
<div class="col-sm-3">
<a href="" class="tile">
<div class="center team-member"><i class="icon-user icon-md"></i>Account</div></a>
</div>
<div class="col-sm-3">
<a href="" class="tile">
<div class="center team-member"><i class="icon-file-text icon-md"></i>Request Types</div></a>
</div>
<div class="col-sm-3">
<a href="" class="tile">
<div class="center team-member"><i class="icon-plane icon-md"></i>Travel Preferences</div></a>
</div>
<div class="col-sm-3">
<a href="" class="tile">
<div class="center team-member"><i class="icon-flag icon-md"></i>Notifications</div></a>
</div>
</div>
</div>
<style>
a.tile {
color: #666;
display: block;
height: 216px;
background: #fff;
border: 1px solid #e6e6e6;
text-align: center;
border-radius: 4px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-moz-background-clip: padding;
-webkit-background-clip: padding-box;
background-clip: padding-box;
transition: background-color .5s;
-o-transition: background-color .5s;
-webkit-transition: background-color .5s;
-moz-transition: background-color .5s;
-ms-transition: background-color .5s;
transition: color .5s;
-o-transition: color .5s;
-webkit-transition: color .5s;
-moz-transition: color .5s;
-ms-transition: color .5s;
}
</style>


<?php get_footer();