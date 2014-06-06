<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
?>
<?php get_header(); ?>
<!-- container Start -->
<div id="container">
<!-- InstanceBeginEditable name="contents" -->
  <!-- contents Start -->
  <div class="contents">
    <div class="cWapper">
      <div class="cAbout">
        <h3><img src="<?php bloginfo('template_url'); ?>/images/home/titleLogo_about.png" width="430" height="35" alt="About このサイトについて"></h3>
        <p>当サイトは、<a href="<?php echo get_page_link(19); ?>">イモトカズヤ</a>が制作したWEBサイト・ロゴ等を<br>
          紹介するポートフォリオサイトです。</p>
        <p class="tBottom">何かご質問があれば、<a href="https://noor-connect-ki.ssl-lolipop.jp//Connect/contact.php">コンタクトフォーム</a>又はこちらの<br>
          メールアドレス[info@connect-ki.noor.jp]までご連絡<br>
          下さい。</p>
      </div>
      <div class="cNews">
        <h3><img src="<?php bloginfo('template_url'); ?>/images/home/titleLogo_news.png" width="470" height="35" alt="News 更新情報のお知らせ"></h3>
        <ul>
          <li class="ntTop">2014-04-28&nbsp;ブログデザインを変更しました。</li>
          <li>2014-01-06&nbsp;制作物のサイトを追加しました。</li>
          <li>2013-12-22&nbsp;ブログを開設しました。</li>
          <li class="ntBottom">2013-12-11&nbsp;制作物のロゴを追加しました。</li>
        </ul>
      </div>
    </div>
    <div class="cPortf">
      <h3><img src="<?php bloginfo('template_url'); ?>/images/home/titleLogo_works.png" width="919" height="35" alt="Portfolio 制作物一覧"></h3>
      <div class="slideFrame"  id="slider-0">
  	  	<ul class="slideGuide">
    		<li class="slideCell"><a href="<?php echo get_page_link(21); ?>#Top"><img src="<?php bloginfo('template_url'); ?>/images/home/site01tthum_big.jpg" width="280" height="300" alt="BeansLifeCoffee"></a></li>
    		<li class="slideCell"><a href="<?php echo get_page_link(21); ?>#Middle"><img src="<?php bloginfo('template_url'); ?>/images/home/site02tthum_big.jpg" width="280" height="265" alt="Landscapehotel in KOBE"></a></li>
            <li class="slideCell"><a href="<?php echo get_page_link(21); ?>#Middle02"><img src="<?php bloginfo('template_url'); ?>/images/home/site03tthum_big.jpg" width="310" height="300" alt="KitamiDentalClinic"></a></li>
            <li class="slideCell"><a href="<?php echo get_page_link(21); ?>#Bottom"><img src="<?php bloginfo('template_url'); ?>/images/home/site04tthum_big.jpg" alt="Connect" width="280" height="260"></a></li>
            <li class="slideCell"><a href="<?php echo get_page_link(21); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/site01logo_c.gif" alt="Logo01" width="350" height="151"></a></li>
            <li class="slideCell"><a href="<?php echo get_page_link(21); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/site02logo.gif" alt="Logo02" width="350" height="146"></a></li>
            <li class="slideCell"><a href="<?php echo get_page_link(21); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/pfslogo.gif" alt="Logo03" width="350" height="120"></a></li>
            <li class="slideCell"><a href="<?php echo get_page_link(21); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/kitamiLogo.gif" alt="Logo04" width="350" height="151"></a></li>
  	    </ul>
      </div>
    </div>
  </div>
  <!-- contents End -->
<!-- InstanceEndEditable -->
</div>
<!-- container End -->
<?php get_footer(); ?>