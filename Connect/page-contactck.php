<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

//前ページcontact.phpの情報を受け取る
$name = $_SESSION['join']['name'];
$mail = $_SESSION['join']['mail'];
$subject = $_SESSION['join']['subject'];
$textarea = $_SESSION['join']['textarea'];

?>
<?php get_header('contact'); ?>
<!-- container Start -->
<div id="container">
<!-- InstanceBeginEditable name="contents" -->
  <!-- contents Start -->
  <div class="contents">
    <div class="catWapper">
    <h3><img src="<?php bloginfo('template_url'); ?>/images/contact/titleLogo_contact.png" width="565" height="35" alt="コンタクトフォーム"></h3>
    <p>この内容でよろしければ「送信」を押してください。</p>
    <form action="#" method="post">
    	<table>
  			<tr>
    			<td class="tLeft">Name<span>-お名前-</span></td>
    			<td><?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8'); ?></td>
  			</tr>
  			<tr>
    			<td class="tLeft">MailAddress<span>-メールアドレス-</span></td>
    			<td><?php echo htmlspecialchars($mail,ENT_QUOTES,'UTF-8'); ?></td>
  			</tr>
  			<tr>
    			<td class="tLeft">Subject<span>-件名-</span></td>
    			<td><?php echo htmlspecialchars($subject,ENT_QUOTES,'UTF-8'); ?></td>
  			</tr>
  			<tr>
    			<td class="tLeft">Message<span>-メッセージ-</span></td>
   			  <td><?php echo htmlspecialchars($textarea,ENT_QUOTES,'UTF-8'); ?></td>
		    </tr>
		</table>
        <div class="btnArea">
  			<p class="backBtn"><a href="contact.php?input=1<?php echo SID; ?>"><img src="<?php bloginfo('template_url'); ?>/images/gnv/back.gif" width="75" height="28" alt="戻る"></a></p>
          	<input name="btn" type="image" id="btn" src="<?php bloginfo('template_url'); ?>/images/contact/sd.gif" alt="送信">
        </div>
    </form>
    </div>
  </div>
  <!-- contents End -->
<!-- InstanceEndEditable -->
</div>
<!-- container End -->
<?php get_footer('contact'); ?>