<html>
    <head>
        <meta charset="utf-8">
        <title>sample</title>
        <link rel="stylesheet" href="https://kenta0817.github.io/o-stage/assets/css/main.css">
        <link rel="stylesheet" href="https://kenta0817.github.io/o-stage/assets/css/contact/index.css">
        <link rel="stylesheet" href="https://kenta0817.github.io/o-stage/assets/css/contact/index.css">
        <link rel="stylesheet" href="https://kenta0817.github.io/o-stage/assets/css/contact/inquiry/common.css">
        <link rel="stylesheet" href="https://kenta0817.github.io/o-stage/assets/css/contact/inquiry/index.css">
    </head>
    <body>
        <?php
            mb_language("Japanese");
            mb_internal_encoding("UTF-8");
            $kind = $_POST['kind'];
            $other = $_POST['other'];
            $name = $_POST['name'];
            $kana = $_POST['kana'];
            $mailaddress = $_POST['mailaddress'];
            $tel = $_POST['tel'];
            $zipcode = $_POST['zipcode'];
            $address1 = $_POST['address1'];
            $address2 = $_POST['address2'];
        ?>
        
        <div class="contactform-jumbotron p-jumbotron page-inquiry">
        <div class="base-container">
          <div class="p-jumbotron_container">
            <div class="p-jumbotron_header">
              <h1 class="contactform-headline c-headline -lg">
                <small>CONTACT FORM</small>
                お問い合わせフォーム
              </h1>
            </div>
            <div class="mail_result">
                <?php
                    if (mail("kenta081708170817@gmail.com",$kind,"---------------------------------\r\n※このメールは\r\n[オーステージ株式会社]のメールフォームから送信されています。\r\n---------------------------------\r\n\r\n【問い合わせ内容】\r\n$other\r\n\r\n【名前】\r\n$name\r\n\r\n【ふりがな】\r\n$kana\r\n\r\n【メールアドレス】\r\n$mailaddress\r\n\r\n【電話番号】\r\n$tel\r\n\r\n【郵便番号】\r\n$zipcode\r\n\r\n【住所】\r\n$address1\r\n$address2"))
                    {
                        echo "メールの送信を完了しました。<br />お問い合わせありがとうございます。<br />返信までしばらくお待ちください。";
                    } else{
                        echo "メールの送信に失敗しました。";
                    }
                ?>
            </div> 
            <div class="p-jumbotron_body">
              <div class="contactform-container">
                <ol class="contactform-progress">
                  <li class="contactform-progress_item">
                    <span class="contactform-progressnumber"></span>
                    <span class="u-hidden-sm">必要事項を</span>
                    入力
                  </li>
                  <li class="contactform-progress_item">
                    <span class="contactform-progressnumber"></span>
                    <span class="u-hidden-sm">入力内容のご</span>
                    確認
                  </li>
                  <li class="contactform-progress_item" aria-current="step">
                    <span class="contactform-progressnumber"></span>
                    <span class="u-hidden-sm">お問い合わせ受付</span>
                    完了
                  </li>
                </ol>
              </div>
              <form class="inquiry-form" action="index.html" method="post">
                <div class="contactform-container">
                </div>
                <input type="hidden" name="_token" value="eyP5lxUbySd90nsUPqPDtVQ9Hkw7NeItzvgaEVaa">
                <div class="contactform-submitcontainer inquiry-submitcontainer">
                  <button class="p-submitbtn js-toggleActive js-touchhover" type="submit" name="">
                    <span class="p-submitbtn_label">サイトに戻る</span>
                    <svg class="p-btn_icon c-icon -submit">
                      <use xlink:href="https://kenta0817.github.io/o-stage/assets/img/common/sprite.svg#arrow_right"></use>
                    </svg>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>