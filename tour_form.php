<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$email = htmlspecialchars($_POST['email'], ENT_QUOTES);
$datehour = htmlspecialchars($_POST['datehour'], ENT_QUOTES);
$freetext = htmlspecialchars($_POST['freetext'], ENT_QUOTES);

mb_language("japanese");
mb_internal_encoding("UTF-8");
$to = " yossypon1990@yahoo.co.jp ";
$subject = '施設見学会予約の件';
$body = "名前：".$name."\n"."メール：".$email."\n"."日時：".$datehour."\n"."コメント：".$freetext;
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
    <h3>施設見学会</h3>
    <p>ご入力頂きましたメールアドレス宛に施設見学会のご案内をお送りいたしました。</p>
    <p>５分以内にメールが届かない場合は、恐れ入りますが電話にてお問い合わせ、または再度ご登録をお願い致します。</p>                   
</main>

<?php
	include 'footer.php';
?>

