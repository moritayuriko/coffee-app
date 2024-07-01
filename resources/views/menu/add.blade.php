<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample menue</title>
</head>
<body>
    <main>
        <h1>追加・修正</h1>
        <form action="/menus"method="POST">
            @csrf
            <div>
            <label>商品番号</label>
            <input type="text" name="id">
            </div>
            <div>
                <label>商品名</label>
                <input type="text" name="drink">
            </div>
            <div>
            <label>その他</label>
            <input type="text" name="other">
            </div>
            <input type="submit" value="追加・修正を送信">
            
        </form>
    </main>   

</body>
</html>