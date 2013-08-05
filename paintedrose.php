<?php

//Lets add our admin page action first!
//-----------------------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------------------
add_action('admin_menu', 'paintedrose_admin_actions');

function paintedrose_admin_actions() {
  add_options_page('PaintedRose', 'PaintedRose', 'manage_options', __FILE__, 'PaintedRose_admin');
}

function PaintedRose_admin() {
?>	
<!-- ALL ADMIN PAGE CONTENT HERE -->

    <div class="wrap">
    	<h2>PaintedRose Premium Shortcodes</h2>
        <small>Please make a <a href="#">donation</a> & show your support</small>
    </div>
    
<!-- google adds -->
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7290211193482259";
/* Gridline Forum */
google_ad_slot = "4175970322";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- end google adds -->

<!-- END ALL ADMIN PAGE CONTENT -->	
<?php	
}

?>
