<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/index.css')}}">

</head>

<body>
  <div class="formWrapper">
    <h1 class="title">お問い合わせ</h1>
    <form action="/confirm" method="post">
      @csrf
      <dl class="flex">
        <dt>お名前<span class="required">※</span></dt>
        <dd>
          <ul>
            <li><input type="text" name="familyName" class="name" required><span class="inputExample">例）山田</span></li>
            <li><input type="text" name="personalName" class="name" required><span class="inputExample">例）太郎</span></li>
          </ul>
        </dd>
      </dl>
      <dl class="flex">
        <dt>性別<span class="required">※</span></dt>
        <dd>
          <input class="radio" type="radio" name="gender" value="男性" id="man" checked="checked">
          <label for="man" class="label">男性</label>
          <input class="radio" type="radio" name="gender" value="女性" id="woman">
          <label for="woman" class="label">女性</label>
        </dd>
      </dl>
      <dl class="flex">
        <dt>メールアドレス<span class="required">※</span></dt>
        <dd><input type="email" name="email" class="inputForm" required><span class="inputExample">例）test@example.com</span></dd>
      </dl>
      <dl class="flex">
        <dt>郵便番号<span class="required">※</span></dt>
        <span class="postMark">〒&nbsp;</span>
        <dd><input type="text" name="zip11" id="postNumber" pattern="\d{3}-\d{4}" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');" class="inputForm postNumber"><span class="inputExample">例）123-4567</span></dd>
      </dl>
      <dl class="flex">
        <dt>住所<span class="required">※</span></dt>
        <dd><input type="text" name="addr11" class="inputForm"><span class="inputExample">例）東京都渋谷区千駄ヶ谷1-2-3</span></dd>
      </dl>
      <dl class="flex">
        <dt>建物名</dt>
        <dd><input type="text" name="addressBuilding" class="inputForm"><span class="inputExample">例）千駄ヶ谷マンション101</span></dd>
      </dl>
      <dl class="flex">
        <dt class="m0">ご意見<span class="required">※</span></dt>
        <dd><textarea name="message" class="inputForm textarea"></textarea></dd>
      </dl>
      <button class="btn" type="submit">確認</button>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="{{ asset('js/index.js')}}"></script>
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</body>

</html>