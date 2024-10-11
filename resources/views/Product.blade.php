<link rel="stylesheet" type="text/css" href="../css/app.css">
<div class="cards">
    <form class='product-item' method="post" action="{{url('/')}}">
        @csrf
        <div class='product-description'>
            <h1>{{$product[0]->name}}</h1>
        </div>
        <div class='product-description'>
            <p id="cost">{{$product[0]->cost}} руб.</p>
        </div>
        <div class='product-description'>
            <p>Количество:</p>
            <p>{{$product[0]->amount}}</p>
        </div>
        <div class='product-description'>
            <p>Купить:</p>
            <input class="@error('amount') is-invalid @enderror" id="amount" type="number" name="amount" value=0 min=0 max={{$product[0]->amount}}>
        </div>
        <button type="submit" href="" class='card-button'>Купить</button>
        <a href="/" class='product-button'>Вернуться</a>
        <input id="id" type="text" name="id" value={{$product[0]->id}} class='product-input'>
        @error('amount')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
    <script src="../js/product.js"></script>
</div>