<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Reservation</title>
</head>
<body> 
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧お客様側！</h1>
            <div class="text-align:center;">
                
                @foreach($menus as $menu)
                <h2 style="text-align:center;font-size:1em;">
                            {{$menu->drink}}
                            <br>
                            <img src="{{ asset($menu->imagePath) }}">
                            <br>

                        {{$menu->other}} </h2>
    
                    @endforeach
            </div>
               
</body>
</html>