<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);

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
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
        	<div class="atewp">
					<h4 class="arcTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    	<div class="bColor">
                        	<p class="aImg"><?php the_post_thumbnail('article_image'); ?></p>
							<p class="arcText"><?php remove_filter ('the_content', 'wpautop'); ?><?php the_content(); ?></p>
							<p class="arcInfo"><?php echo get_the_date(); ?><span>カテゴリー：<?php the_category(', '); ?></span></p>
                        </div>
            </div>
		<?php endwhile; endif; ?>	
	  </div>
	</div>
</div>
<!-- container End -->
<?php get_footer('blog'); ?>