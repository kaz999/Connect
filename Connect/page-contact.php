<?php
header("Content-Type:text/html; charset=UTF-8");
error_reporting(4);
session_start();

//入力フォームに空白がないかを確認
if(!empty($_POST)){
	//空白の場合、エラー文を生成
	if($_POST['name']==''){
		$error['name'] = 'blank';
	}
	if($_POST['mail']==''){
		$error['mail'] = 'blank';
	}
	if($_POST['subject']==''){
		$error['subject'] = 'blank';
	}
	if($_POST['textarea']==''){
		$error['textarea'] = 'blank';
	}
	
	//項目が全て記述されている場合
	if(empty($error)){
		$_SESSION['join'] = $_POST;
		header('Location: https://noor-connect-ki.ssl-lolipop.jp/Connect/contactck.php');
		exit();
	}
}

//次頁か戻るボタンを押したときの処理(入力フォームの保存)
if('1' == $_GET['input']){
	$_POST['name'] = $_SESSION['join']['name'];
	$_POST['mail'] = $_SESSION['join']['mail'];
	$_POST['subject'] = $_SESSION['join']['subject'];
	$_POST['textarea'] = $_SESSION['join']['textarea'];
}

?>
<?php get_header('contact'); ?>
<!-- container Start -->
<div id="container">
<!-- InstanceBeginEditable name="contents" -->
  <!-- contents Start -->
  <div class="contents">
    <div class="catWapper">
    <h3><img src="<?php bloginfo('template_url'); ?>/images/contact/titleLogo_contact.png" width="565" height="35" alt="コンタクトフォーム"></h3>
    <p>サイト制作やロゴ作成等のご依頼は受け付けておりませんので、ご了承ください。</p>
    <?php if($error['name'] == 'blank'): ?>
    	<p class="error">※「Name&nbsp;-お名前-」を入力してください</p>
    <?php endif; ?>
    <?php if($error['mail'] == 'blank'): ?>
    	<p class="error">※「MailAddress&nbsp;-メールアドレス-」を入力してください</p>
    <?php endif; ?>
    <?php if($error['subject'] == 'blank'): ?>
    	<p class="error">※「Subject&nbsp;-件名-」を入力してください</p>
    <?php endif; ?>
    <?php if($error['textarea'] == 'blank'): ?>
    	<p class="error">※「Message&nbsp;-メッセージ-」を入力してください</p>
    <?php endif; ?>
    <form action="#" method="post">
    	<table>
  			<tr>
    			<td class="tLeft"><span class="hs">※</span>&nbsp;Name<span>-お名前-</span></td>
    			<td><input name="name" type="text" class="tf" id="name" size="30" value="<?php echo htmlspecialchars($_POST['name'],ENT_QUOTES,'UTF-8'); ?>"></td>
  			</tr>
  			<tr>
    			<td class="tLeft"><span class="hs">※</span>&nbsp;MailAddress<span>-メールアドレス-</span></td>
    			<td><input name="mail" type="text" class="tf" id="mail" size="45" value="<?php echo htmlspecialchars($_POST['mail'],ENT_QUOTES,'UTF-8'); ?>"></td>
  			</tr>
  			<tr>
    			<td class="tLeft"><span class="hs">※</span>&nbsp;Subject<span>-件名-</span></td>
    			<td><input name="subject" type="text" class="tf" id="subject" size="25" value="<?php echo htmlspecialchars($_POST['subject'],ENT_QUOTES,'UTF-8'); ?>"></td>
  			</tr>
  			<tr>
    			<td class="tLeft"><span class="hs">※</span>&nbsp;Message<span>-メッセージ-</span></td>
   			  <td><textarea name="textarea" cols="60" rows="10" class="tf" id="textarea"><?php echo htmlspecialchars($_POST['textarea'],ENT_QUOTES,'UTF-8'); ?></textarea></td>
		    </tr>
		</table>
    	<p class="ckBtn"><input name="ckBtn" type="image" id="ckBtn" src="<?php bloginfo('template_url'); ?>/images/gnv/check.gif" alt="確認"></p>
    </form>
    </div>
  </div>
  <!-- contents End -->
<!-- InstanceEndEditable -->
</div>
<!-- container End -->
<?php get_footer('contact'); ?>