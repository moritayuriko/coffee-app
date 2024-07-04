<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>sample menue</title>
</head>

<body>
    <main>
        <h1>更新</h1>
        <form action="{{route('menu.up',['menu' => $menu->id])}}"method="POST">
            @csrf
            @method('PUT')

            <div>
                <label>商品番号</label>
                <td>{{ "$menu->id" }}</td>
            </div>
            <div>
                <label>商品名</label>
                <input type="text" name="drink" value="{{old('drink',$menu->drink)}}">
            </div>
            <div>
                <label>その他</label>
                <input type="text" name="other" value="{{old('other',$menu->other)}}">
            </div>

            <div>
                <input type="submit" value="更新を送信">
            </div>
        </form>
    </main>
        <div>
            <a href="{{ route('menus.index') }}">メニューへ戻る</a>
        </div>


</body>

</html>