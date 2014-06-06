<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

//前ページ(contact.php/contactck.php)のフォーム入力情報を受け取る
$name = $_SESSION['join']['name'];
$mail = $_SESSION['join']['mail'];
$subject = $_SESSION['join']['subject'];
$textarea = $_SESSION['join']['textarea'];

//mysql接続
$db=mysql_connect('mysql003.phy.lolipop.lan','LAA0473172','********');
mysql_select_db('LAA0473172-database',$db);
mysql_query("set character set utf8",$db);

//mysql書き込み情報
$sql = "INSERT INTO inquirycnt(name, mail, subject, textarea)".
	   "VALUES('$name','$mail','$subject','$textarea')";
	   
//mysql書き込み
mysql_query($sql,$db);

//フォーム入力情報の削除
unset($_SESSION['join']);

?>
<?php get_header('contact'); ?>
<!-- container Start -->
<div id="container">
<!-- InstanceBeginEditable name="contents" -->
  <!-- contents Start -->
  <div class="contents">
    <div class="catWapper">
    <h3><img src="<?php bloginfo('template_url'); ?>/images/contact/titleLogo_contact.png" width="565" height="35" alt="コンタクトフォーム"></h3>
    <p class="ccm">この度は、お問い合わせありがとうございます。<br>
      ご返信は時間を要する場合がありますので、ご了承ください。</p>
    <p class="topPage"><a href="home">トップへ戻る</a></p>
    </div>
  </div>
  <!-- contents End -->
<!-- InstanceEndEditable -->
</div>
<!-- container End -->
<?php get_footer('contact'); ?>