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
            <p >{{$product[0]->amount}}</p>
        </div>
        <div class='product-description'>
            <p>Купить:</p>   
            <input id="amount" type="number" onchange="handle()" name = "amount" value=0 min = 0 max = {{$product[0]->amount}}>
        </div>
        <div class='product-description'>   
            <p>Итого:</p>   
            <p id="countview">0 руб.</p>
        </div>  
        <a href="/" class='product-button'>Вернуться</a>
        <button type="submit" href="" class='card-button'>Купить</button>
        <input id="name" type="text" name = "name" value={{$product[0]->name}} class='product-input'>
        <input id="cost" type="number"name = "cost" value={{$product[0]->cost}} class='product-input' >
    </form>
    <script src="../js/product.js"></script>
</div>