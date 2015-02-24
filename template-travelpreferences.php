<?php 

/*
Template Name: Dashboard Travel Preferences
*/

get_template_part( 'for-dashboard/header'); 

 ?>

<div class="container" style="min-height:600px;">
<h2 style="text-align: center; margin-bottom:30px">Travel Preferences</h2>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-6">
<table class="table">
    <tbody>
    <tr>
        <td>
        <a href="#" style="font-size:18px; font-weight:normal;">< Settings</a> 
        </td>
        <td>
        </td>
     </tr>
    <tr>
        <td>
        <h6 class="media-heading" style="padding-top:10px; font-weight:bold;">WHERE DO YOU MEET YOUR CUSTOMERS?</h5>  
		</td>
        <td>
        </td>
      </tr>
      <tr>
        <td>
        <h5 class="media-heading" style="padding-top:10px;"><i class="icon-share icon-sm" style="padding-right:10px;"></i>I travel to them</h5>  
		</td>
        <td>
        <div class="checkboxTwo">
			<input type="checkbox" value="3" id="1" name="" checked/>
			<label for="1"></label>
		</div>	
        </td>
      </tr>
      <tr>
        <td>
        <h5 class="media-heading" style="padding-top:10px;"><i class="icon-truck icon-sm" style="padding-right:10px;"></i>I'm willing to travel</h5>  
		</td>
        <td>
        <div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="min-width:60px;min-height: 36px;">		 
		    <span class="caret" style="float:right;"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a>0.25 miles</li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a>0.5 miles</li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a>0.75 miles</li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a>1 miles</li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a>10 miles</li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a>50 miles</li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"></a>100 miles</li>
		    <li role="presentation" class="active"><a role="menuitem" tabindex="-1" href="#"></a>150 miles</li>
		  </ul>
		</div>
        </td>
      </tr>
    </tbody>
  </table>
	<div class="col-md-11">
	<iframe width="100%" height="<?php echo zee_option('zee_contact_map_height');?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
	 src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo zee_option('zee_contact_map_location');?>&amp;aq=0&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo zee_option('zee_contact_map_location');?>&amp;t=m&amp;output=embed"></iframe>
	</div>
<table class="table">
    <tbody>
      <tr>
        <td>
        <h5 class="media-heading" style="padding-top:10px;width: 250px;"><i class="icon-reply icon-sm" style="padding-right:10px;"></i>They travel to me</h5>  
		</td>
        <td>
        <div class="checkboxTwo">
			<input type="checkbox" value="3" id="1" name="" checked/>
			<label for="1"></label>
		</div>	
        </td>
      </tr>
      <tr>
        <td>
        <h5 class="media-heading" style="padding-top:10px;width: 250px;"><i class="icon-comments icon-sm" style="padding-right:10px;"></i>Phone or internet only</h5>  
		</td>
        <td>
        <div class="checkboxTwo">
			<input type="checkbox" value="3" id="2" name="" checked/>
			<label for="2"></label>
		</div>	
        </td>
      </tr>
    </tbody>
  </table>
</div>
<div class="col-sm-4"></div>
</div>
</div>
<br><br>
<style>
/**
 * Checkbox Two
 */
.checkboxTwo {
	width: 60px;
	height: 40px;
	background: #333;

	border-radius: 50px;
	position: relative;
}
/**
 * Create the circle to click
 */
.checkboxTwo label {
	display: block;
	width: 22px;
	height: 22px;
	border-radius: 12px;

	-webkit-transition: all .5s ease;
	-moz-transition: all .5s ease;
	-o-transition: all .5s ease;
	-ms-transition: all .5s ease;
	transition: all .5s ease;
	cursor: pointer;
	position: absolute;
	top: 9px;
	z-index: 1;
	left: 8px;
	background: #ddd;
}
/**
 * Create the click event for the checkbox
 */
.checkboxTwo input[type=checkbox]:checked + label {
	left: 30px;
	background: #00e459;
}
input[type="radio"], input[type="checkbox"] {
display:none;
}

.table thead>tr>th, .table tbody>tr>th, .table tfoot>tr>th, .table thead>tr>td, .table tbody>tr>td, .table tfoot>tr>td{border-top:none;}
tr{border-bottom:none;}
</style>
<?php get_footer();