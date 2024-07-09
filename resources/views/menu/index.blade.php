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
            <th>その他</th>
            <th>イメージ</th>
            <th>削除</th>
            <th>更新</th>
        </tr>
        @foreach($menus as $menu)
        <tr>
            <td>{{ $menu->id }}</td>
            <td>{{ $menu->drink }}</td>
            <td>{{ $menu->other }}</td>
            <td>{{ $menu->imagePath }}</td>
            
            <td>
                <form action="{{ route('menus.destroy',$menu) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除">
                </form>
            </td>
            <td>
            <a href="{{ route('menus.edit', ['menu' => $menu->id]) }}">
                    <button type="button">更新</button>
                </a>
            </td>


        </tr>
        @endforeach
    </table>
    <a href="{{ route('menu.add') }}">メニューを追加</a>




</body>

</html>