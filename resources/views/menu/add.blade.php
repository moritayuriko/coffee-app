<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample menue</title>
</head>
<body>
    <main>
        <h1>追加</h1>
        <!-- <form action="{{ route('menu.add') }}"method="POST"> -->
        <form action="/drink.added"method="POST">
            @csrf

            <div>
                <label>商品名</label>
                <input type="text" name="drink">
            </div>
            <div>
            <label>その他</label>
            <input type="text" name="other">
            </div>
            <input type="submit" value="追加を送信">
            
        </form>
      <div>
      <a href="{{ route('menus.index') }}">メニューへ戻る</a>
      </div>
  
    </main>   

</body>
</html>