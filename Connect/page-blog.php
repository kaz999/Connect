<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);

?>
<?php
/*
Template Name: ブログ
*/
?>
<?php
	/*------------------------------------------------
        WP ブログ機能
    ------------------------------------------------*/
    //カテゴリー別リンクの取得
    
    //指定したカテゴリーのIDを取得
    $imp = get_cat_ID( '参考書の感想' );   //参考書の感想
    $site = get_cat_ID( '参考サイト' );    //参考サイト
    $others = get_cat_ID( 'その他' );      //その他
    
    // このカテゴリーの URL を取得
    $imp_link = get_category_link( $imp );        //参考書の感想リンク
    $site_link = get_category_link( $site );      //参考サイトリンク
    $others_link = get_category_link( $others );  //その他リンク
    
    //カテゴリー別の投稿数を取得
    //カテゴリID
    $catImp = 2;	//参考書の感想
    $catSite = 3;  //参考サイト
    $catOth = 4;   //その他
    //投稿数を取得
	$thisImp = get_category($catImp);
    $thisSite = get_category($catSite);
    $thisOth = get_category($catOth);
?>
<?php get_header('blog'); ?>
<!-- container Start -->
<div id="container">
  <div class="contents">
    <div class="blogWapper">
	  <div class="cgywp">
  			<h3><img src="<?php bloginfo('template_url'); ?>/images/blog/cImage.gif" width="190" height="30" alt="Category カテゴリー"></h3>
            <div class="cgy">
  				<ul>
                  <li class="liTop"><a href="<?php echo $imp_link; ?>">参考書の感想&nbsp;<span>(<?php echo $thisImp->count; ?>)</span></a></li>
  				  <li class="bd"><img src="<?php bloginfo('template_url'); ?>/images/blog/border.gif" alt="line" width="100" height="1"></li>
                  <li><a href="<?php echo $site_link; ?>">参考サイト&nbsp;<span>(<?php echo $thisSite->count; ?>)</span></a></li>
  				  <li class="bd"><img src="<?php bloginfo('template_url'); ?>/images/blog/border.gif" alt="line" width="100" height="1"></li>
                  <li><a href="<?php echo $others_link; ?>">その他&nbsp;<span>(<?php echo $thisOth->count; ?>)</span></a></li>
			  	</ul>
			</div>
	  </div>
<!--ここからブログ記事-->
	<div class="atewp">
	<?php query_posts('post_type=post&paged='.$paged); ?>
	<?php if (have_posts()) : ?>
  	  <?php while (have_posts()) : the_post(); ?>
  		  	<div class="ate">
    	      <h3><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0'))); ?></a></h3>
    	   	  <div class="ateText">
  					<div class="ateSubject">
    					<p class="ateTitle"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
    					<p class="ateDate"><?php the_time("Y.m.j") ?></p>
   					</div>
        	      	<div class="ateDetail">
  				  		<p class="dlTitle">記事の内容<span>Contents&nbsp;of&nbsp;an&nbsp;article</span></p>
        	        	<p class="dlText"><?php global $more; $more = FALSE; ?>
        	            				  <?php remove_filter ('the_content', 'wpautop'); ?><?php the_content('続きを見る'); ?>
        	                              <?php $more = TRUE; ?></p>
        	      	</div>
					<div class="atecc">
        	       	    <p class="cgy">Category&nbsp;<span><?php the_category(','); ?></span></p>
        	       	</div>
        	  </div>
  	  		</div>
    	<?php endwhile; ?>
                <?php
        //ページャー機能
  			if (function_exists('page_navi')) :
    			page_navi('elm_class=page-nav&edge_type=span');
  			endif;
        ?>

		<?php else : ?>
    		<div class="noText">
        		<h2>記事が見つかりません</h2>
        		<p>記事が存在しないときのテキスト</p>
    		</div>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
        </div>
<!--ここまでブログ記事-->
		</div>
	</div>
</div>
<!-- container End -->
<?php get_footer('blog'); ?>