<?php
function registernhtPage() {
	add_submenu_page( 'edit.php?post_type=headline', 'News Headline Settings', 'Ticker Settings', 'manage_options', 'news-headline', 'newsHeadLineFunction' ); 
}
add_action('admin_menu', 'registernhtPage');

function newsHeadLineFunction() {
	
	echo '<div class="newsWrap">';
		echo '<h1>Headline Newsticker Configurations</h1>';
?>

<div id="nhtLeft">
  <form method="post" action="options.php">
    <?php wp_nonce_field('update-options'); ?>
    <div class="inside">
    <h3>Insert your text & background color</h3>
    <table class="form-table">
      <tr>
        <th><label for="nht_effect">Effect Type</label></th>
        <td><select name="nht_effect" id="nht_effect">
            <option value="typing" <?php if( get_option('nht_effect') == 'typing'){ echo 'selected="selected"'; } ?>>Typing</option>
            <option value="fade" <?php if( get_option('nht_effect') == 'fade'){ echo 'selected="selected"'; } ?>>Fade</option>
            <option value="slide" <?php if( get_option('nht_effect') == 'slide'){ echo 'selected="selected"'; } ?>>Slide</option>
          </select></td>
      </tr>
      <tr>
        <th><label for="nht_border_radius">Border Radius</label></th>
        <td><input type="text" name="nht_border_radius" value="<?php $nht_border_radius = get_option('nht_border_radius'); if(!empty($nht_border_radius)) {echo $nht_border_radius;} else {echo "15";}?>">
          px;</td>
      </tr>
      <tr>
        <th><label for="nht_label">Label Text</label></th>
        <td><input type="text" name="nht_label" value="<?php $nht_label = get_option('nht_label'); if(!empty($nht_label)) {echo $nht_label;} else {echo "Breaking News:";}?>"></td>
      </tr>
      <tr>
        <th><label for="nht_label_color">Label Text Color</label></th>
        <td><input type="text" name="nht_label_color" id="scrollbar_color" value="<?php $nht_label_color = get_option('nht_label_color'); if(!empty($nht_label_color)) {echo $nht_label_color;} else {echo "#FFF";}?>" class="color-picker nht_label_color" /></td>
      </tr>
      <tr>
        <th><label for="nht_bg_color">Background Color <span>*</span></label></th>
        <td><input type="text" name="nht_bg_color" id="scrollbar_color" value="<?php $nht_bg_color = get_option('nht_bg_color'); if(!empty($nht_bg_color)) {echo $nht_bg_color;} else {echo "#2d81c8";}?>" class="color-picker nht_bg_color" /></td>
      </tr>
      <tr>
        <th><label for="nht_text_color">Text Color <span>*</span></label></th>
        <td><input type="text" name="nht_text_color" id="scrollbar_color" value="<?php $nht_text_color = get_option('nht_text_color'); if(!empty($nht_text_color)) {echo $nht_text_color;} else {echo "#FFF";}?>" class="color-picker nht_text_color" /></td>
      </tr>
      <tr>
        <th><label for="nht_hover_color">Text Hover Color</label></th>
        <td><input type="text" name="nht_hover_color" id="scrollbar_color" value="<?php $nht_hover_color = get_option('nht_hover_color'); if(!empty($nht_hover_color)) {echo $nht_hover_color;} else {echo "#FFF";}?>" class="color-picker nht_hover_color" /></td>
      </tr>
    </table>
    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="nht_effect, nht_border_radius, nht_label,  nht_label_color, nht_bg_color, nht_text_color, nht_hover_color" />
    <p class="submit">
      <input type="submit" name="Submit" value="<?php _e('Save Changes') ?>" class="button button-primary" />
    </p>
  </form>
</div>
</div>
<div id="nhtRight">
  <div class="nhtWidget">
    <h3>About the Plugin</h3>
  
    <p>You can make my day by submitting a positive review on <a href="https://wordpress.org/support/view/plugin-reviews/news-headline-ticker" target="_blank"><strong>WordPress.org!</strong> <img src="<?php bloginfo('url' ); echo"/wp-content/plugins/news-headline-ticker/img/review.png"; ?>" alt="review" class="review"/></a></p>
	<p><strong>View live demo & support of <a href="http://www.e2soft.com/blog/news-headline-ticker/" target="_blank">News Headline Ticker</a> and <a href="https://www.youtube.com/watch?v=1dAKqB-Dr3E/" target="_blank">video tutorial.</a></strong></p>
    
    <div class="clrFix"></div>
  </div>
  
  <div class="nhtWidget">
    <div class="clrFix"></div>
    <h3>About the Author</h3>
    <p>My name is <strong><a href="https://www.upwork.com/freelancers/~01bf79370d989b2033" target="_blank">S M Hasibul Islam</a></strong> and I am a <strong>Web Developer, Expert WordPress Developer</strong>. I am regularly available for interesting freelance projects. If you ever need my help, do not hesitate to get in touch <a href="https://www.upwork.com/freelancers/~01bf79370d989b2033" target="_blank">me</a>.<br />
	  <strong>Skype:</strong> cse.hasib<br />
	  <strong>Email:</strong> cse.hasib@gmail.com<br />
	  <strong>Web:</strong> <a href="http://www.e2soft.com/"/>www.e2soft.com</a><br />
    <div class="clrFix"></div>
  </div>
  <div class="nhtWidget">
    <hr />
    <h3>Online Shopping Bangladesh</h3>
    <?php
	 $urls_total = array("http://www.bdonlinebazar.com/","http://bdonlinebazar.com/product-category/clothing/","http://bdonlinebazar.com/product-category/electronics/","http://bdonlinebazar.com/product-category/watches/","http://www.bdonlinebazar.com/product-category/home-living");
	$random_urls = array_rand($urls_total);
	?>
    <iframe class="border_1" src="<?php echo $urls_total["$random_urls"]; ?>" width="320" height="300"> </iframe>
    <div class="clrFix"></div>
  </div>
</div>
<div class="clrFix"></div>
<?php		
	echo '</div>';
}
