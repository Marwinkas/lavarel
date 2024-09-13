<link rel="stylesheet" type="text/css" href="css/app.css">
<div class="cards">
@foreach ($products as $product) 
        <div class='card-item'>
            <div class='card-description'> 
                <p>Имя товара:</p>
                <p>{{$product["name"]}}</p>
            </div>
            <div class='card-description'>
                <p>Цена товара:</p>
                <p>{{$product["cost"]}}</p>
            </div>
            <div class='card-description'>
                <p>Количество товара:</p>
                <p>{{$product["amount"]}}</p>
            </div>
        </div>
@endforeach
</div>
