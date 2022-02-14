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
    <h1 class="title">管理システム</h1>
    <form action="/management" method="get">
      @csrf
      <dl class="flex">
        <dt class="mt-0">お名前</dt>
        <dd><input type="text" name="fullname"></dd>
      </dl>
      <dl class="flex">
        <dt class="mt-0">性別</dt>
        <dd class="float">
          <input class="radio" type="radio" name="gender" value="全て" id="default" checked="checked">
          <label for="default" class="label">全て</label>
          <input class="radio" type="radio" name="gender" value="男性" id="man">
          <label for="man" class="label">男性</label>
          <input class="radio" type="radio" name="gender" value="女性" id="woman">
          <label for="woman" class="label">女性</label>
        </dd>
      </dl>
      <dl class="flex">
        <dt class="mt-0">登録日</dt>
        <dd><input type="date">~<input type="date"></dd>
      </dl>
      <dl class="flex">
        <dt class="mt-0">メールアドレス</dt>
        <dd><input type="email" name="email"></dd>
      </dl>


      <button class="btn" type="submit">検索</button>
      <input type="reset" value="リセット">
    </form>
  </div>

  <style>
    .resultsTable {
      width: 1000px;
      margin: 0 auto;
    }

    .resultsTr {}

    .resultsTh {
      width: 10%;
      text-align: left;

    }

    .resultsTh-last {
      width: 20%;
    }

    svg.w-5.h-5 {
      width: 30px;
      height: 30px;
    }

    .paginate {
      width: 100%;
      height: 20px;
      display: flex;
      justify-content: space-between;
      margin-bottom: 50px;
    }
  </style>


  <div class="paginate">{{ $items->links() }}</div>
  <table class="resultsTable">
    <tr class="resultsTr">
      <th class="resultsTh">ID</th>
      <th class="resultsTh">お名前</th>
      <th class="resultsTh">性別</th>
      <th class="resultsTh">メールアドレス</th>
      <th class="resultsTh-last">ご意見</th>
    </tr>
    @foreach ($items as $item)
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->fullname}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->opinion}}</td>
    </tr>
    @endforeach
  </table>



  <script src="{{ asset('js/index.js')}}"></script>

</html>