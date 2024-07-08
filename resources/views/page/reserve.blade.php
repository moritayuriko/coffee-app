<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Reservation</title>
</head>
<body> 
            <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧お客様側！</h1>
            <div class="">
                <div class="grid grid-cols-4 gap-4 flex-wrap">
                @foreach($menus as $menu)
                        <div class="mycart_box text-center rounded shadow-lg bg-white p-6">
                            {{$menu->drink}} <br>
                            <!-- <img src="/image/{{$stock->imagePath}}" alt="" class="incart" > -->
                            <br>
                            {{$stock->other}} <br>
                        </div>
    
                    @endforeach
                </div>
                <div class="text-center" style="width: 200px;margin: 20px auto;">
                    {{  $stocks->links()}} 
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>