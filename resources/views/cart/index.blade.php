<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カート</title>
    
</head>
<body>
    <div class="container">
        <h1>カート</h1>

        @if ($cartItems->isEmpty())
            <p>カートに商品がありません。</p>
        @else
            <ul>
                @foreach ($cartItems as $cartItem)
                    <li>
                        {{ $cartItem->menu->name }} (数量: {{ $cartItem->quantity }})
                        <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">削除</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
