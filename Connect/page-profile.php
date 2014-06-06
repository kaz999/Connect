<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);

?>
<?php get_header('profile'); ?>
<!-- container Start -->
<div id="container">
<!-- InstanceBeginEditable name="contents" -->
  <!-- contents Start -->
  <div class="contents_pfe">
    <div class="pfewp">
  		<h3><img src="<?php bloginfo('template_url'); ?>/images/profile/titlelogo_profile.png" width="898" height="35" alt="プロフィール"></h3>
	    <p class="tTop">イモトカズヤ&nbsp;|&nbsp;Imoto Kazuya</p>
	   	<p class="tMiddle">1987年生まれ</p>
	    <p class="tBottom">2010年&nbsp;-&nbsp;相愛大学人文学部英米文化学科&nbsp;卒業<br>
      					   2012年&nbsp;-&nbsp;KENスクールWEBデザインコース&nbsp;修了 </p>
	  </div>
    <div class="skillwp">
        <h3><img src="<?php bloginfo('template_url'); ?>/images/profile/titlelogo_skill.png" width="898" height="35" alt="スキル"></h3>
        <p><img src="<?php bloginfo('template_url'); ?>/images/profile/skill.png" alt="スキル一覧" width="878" height="238"></p>
    </div>
  </div>
  <!-- contents End -->
<!-- InstanceEndEditable -->
</div>
<!-- container End -->
<?php get_footer('profile'); ?>