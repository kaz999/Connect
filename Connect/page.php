<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);

?>
<?php get_header('profile'); ?>
<!-- container Start -->
<div id="container">

<?php
	
    if(have_posts()):
    	while(have_posts()):
        	the_post();
            the_content();
        endwhile;
    endif;
    
?>

</div>
<!-- container End -->
<?php get_footer('profile'); ?>