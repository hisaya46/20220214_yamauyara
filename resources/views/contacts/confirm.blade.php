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
    <h1 class="title">内容確認</h1>
    <form action="/thanks" method="post">
      @csrf
      <dl class="flex">
        <dt class="mt-0">お名前</dt>
        <dd>{{$fullname}}</dd>
      </dl>
      <dl class="flex">
        <dt class="mt-0">性別</dt>
        <dd>{{$gender}}</dd>
      </dl>
      <dl class="flex">
        <dt class="mt-0">メールアドレス</dt>
        <dd>{{$email}}</dd>
      </dl>
      <dl class="flex">
        <dt class="mt-0">郵便番号</dt>
        <dd>{{$postcode}}</dd>
      </dl>
      <dl class="flex">
        <dt class="mt-0">住所</dt>
        <dd>{{$address}}</dd>
      </dl>
      <dl class="flex">
        <dt class="mt-0">建物名</dt>
        <dd>{{$building_name}}</dd>
      </dl>
      <dl class="flex">
        <dt class="m0 mt-0">ご意見</dt>
        <dd>{{$opinion}}</dd>
      </dl>
      <button class="btn" type="submit">送信</button>
      <a href="#" class="fix" type="button" onclick="history.back()">修正する</a>
    </form>
  </div>

</html>