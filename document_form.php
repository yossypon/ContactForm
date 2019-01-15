<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$tel = htmlspecialchars($_POST['tel'], ENT_QUOTES);
$address01 = htmlspecialchars($_POST['zip01'], ENT_QUOTES);
$address02 = htmlspecialchars($_POST['pref01'], ENT_QUOTES);
$address03 = htmlspecialchars($_POST['addr01'], ENT_QUOTES);
$freetext = htmlspecialchars($_POST['freetext'], ENT_QUOTES);
?>

<?php
mb_language("japanese");
mb_internal_encoding("UTF-8");
$to = "yossypon1990@yahoo.co.jp";
$subject = '資料請求の件';
$body = "名前：".$name."\n"."メール：".$email."\n"."電話番号：".$tel."\n"."〒：".$zip01."\n"."都道府県：".$pref01."\n"."住所：".$address01."\n"."コメント：".$freetext;
$success = mb_send_mail($to,$subject,$body,"From:form-mail");
?>

<?php
	include 'header.php';
?>
<?php
	include 'main.php';
?>

<main>
    <h2 class="subpage">お申し込み有難うございました。</h2>
    <h3>資料請求</h3>
    <p>ご入力頂きました送付先に資料をお送りいたします。<br>
    1週間以内に到着予定です。</p>   
</main>

<?php
	include 'footer.php';
?>
