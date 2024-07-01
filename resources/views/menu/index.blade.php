<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample menue</title>
</head>
<body>
    <h1>メニュー</h1>
    <table border="1">
    <tr> 
        <th>商品番号</th>
        <th>詳細</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach($menus as $menu)
    <tr>
        <td>{{ $menu->id }}</td>
        <td>{{ $menu->drink }}</td>
        <td>{{"まだ"}}</td>
        <td>{{"です"}}</td>
    </tr>
    @endforeach
    </table>
    <a href="{{ route('menus.add') }}">メニューを追加</a>


       

</body>
</html>