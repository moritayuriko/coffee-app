<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>sample menue</title>
</head>
<body>
    <h1>メニュー</h1>
    <ul>
        @foreach($menus as $menu)
        <li>{{ $menue->body }}</li>
        @endforeach
    </ul>
</body>
</html>