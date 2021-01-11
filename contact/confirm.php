
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>sample</title>
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/contact/index.css">
        <link rel="stylesheet" href="../assets/css/contact/index.css">
        <link rel="stylesheet" href="../assets/css/contact/inquiry/common.css">
        <link rel="stylesheet" href="../assets/css/contact/inquiry/index.css">
    </head>

    <body>
    <div class="contactform-jumbotron p-jumbotron page-inquiry">
        <div class="base-container">
          <div class="p-jumbotron_container">
            <div class="p-jumbotron_header">
              <h1 class="contactform-headline c-headline -lg">
                <small>CONTACT FORM</small>
                お問い合わせフォーム
              </h1>
            </div>
            <div class="p-jumbotron_body">
              <div class="contactform-container">
                <ol class="contactform-progress">
                  <li class="contactform-progress_item">
                    <span class="contactform-progressnumber"></span>
                    <span class="u-hidden-sm">必要事項を</span>
                    入力
                  </li>
                  <li class="contactform-progress_item" aria-current="step">
                    <span class="contactform-progressnumber"></span>
                    <span class="u-hidden-sm">入力内容のご</span>
                    確認
                  </li>
                  <li class="contactform-progress_item">
                    <span class="contactform-progressnumber"></span>
                    <span class="u-hidden-sm">お問い合わせ受付</span>
                    完了
                  </li>
                </ol>
              </div>
              <form class="inquiry-form" action="send.php" method="post">
                <div class="contactform-container">
                  <div class="inquiry-section">
                    <p class="contactform-label">
                      <label for="f-01">お問い合わせの種類</label>
                      <span class="contactform-required">必須</span>
                    </p>
                    <p class="p-select -fluid inquiry-select">
                        <?php echo $_POST["kind"]; ?>
                        <input type="hidden" name="kind" value="<?php echo $_POST["kind"];?>">
                    </p>
                  </div>
                  <div class="inquiry-section">
                    <p class="contactform-label">
                      <label for="f-02">お問い合わせ内容</label>
                      <span class="contactform-required">必須</span>
                    </p>
                    <p class="p-textarea -fluid">
                        <?php echo $_POST["other"]; ?>
                        <input type="hidden" name="other" value="<?php echo $_POST["other"];?>">
                    </p>
                  </div>
                  <div class="inquiry-section">
                    <p class="contactform-label">
                      <label for="f-03">お名前</label>
                      <span class="contactform-required">必須</span>
                    </p>
                    <p class="p-textform -fluid">
                        <?php echo $_POST["name"]; ?>
                        <input type="hidden" name="name" value="<?php echo $_POST["name"];?>">
                    </p>
                  </div>
                  <div class="inquiry-section">
                    <p class="contactform-label">
                      <label for="f-04">ふりがな</label>
                      <span class="contactform-required">必須</span>
                    </p>
                    <p class="p-textform -fluid">
                        <?php echo $_POST["kana"]; ?>
                        <input type="hidden" name="kana" value="<?php echo $_POST["kana"];?>">
                    </p>
                  </div>
                  <div class="inquiry-section">
                    <p class="contactform-label">
                      <label for="f-05">メールアドレス</label>
                      <span class="contactform-required">必須</span>
                    </p>
                    <p class="p-textform -fluid">
                        <?php echo $_POST["mailaddress"]; ?>
                        <input type="hidden" name="mailaddress" value="<?php echo $_POST["mailaddress"];?>">
                    </p>
                  </div>
                  <div class="inquiry-section">
                    <p class="contactform-label">
                      <label for="f-06">
                        メールアドレス
                        <small>(確認用)</small>
                      </label>
                      <span class="contactform-required">必須</span>
                    </p>
                    <p class="p-textform -fluid">
                        <?php echo $_POST["mailaddress_confirm"]; ?>
                    </p>
                  </div>
                  <div class="inquiry-section">
                    <p class="contactform-label">
                      <label for="f-07">電話番号</label>
                      <span class="contactform-required">必須</span>
                    </p>
                    <p class="p-textform -fluid">
                        <?php echo $_POST["tel"]; ?>
                        <input type="hidden" name="tel" value="<?php echo $_POST["tel"];?>">
                    </p>
                  </div>
                  <div class="inquiry-section">
                    <p class="contactform-label">住所</p>
                    <p class="p-textform inquiry-address">
                        <?php echo $_POST["zipcode"]; ?>
                        <input type="hidden" name="zipcode" value="<?php echo $_POST["zipcode"];?>">
                    </p>
                    <p class="p-textform -fluid">
                        <?php echo $_POST["address1"]; ?>
                        <input type="hidden" name="address1" value="<?php echo $_POST["address1"];?>">
                    </p>
                    <p class="p-textform -fluid">
                        <?php echo $_POST["address2"]; ?>
                        <input type="hidden" name="address2" value="<?php echo $_POST["address2"];?>">
                    </p>
                  </div>
                </div>
                <input type="hidden" name="_token" value="eyP5lxUbySd90nsUPqPDtVQ9Hkw7NeItzvgaEVaa">
                <div class="contactform-submitcontainer inquiry-submitcontainer">
                  <button class="p-submitbtn js-toggleActive js-touchhover" type="submit" name="">
                    <span class="p-submitbtn_label">送信</span>
                    <svg class="p-btn_icon c-icon -submit">
                      <use xlink:href="/assets/img/common/sprite.svg#arrow_right"></use>
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