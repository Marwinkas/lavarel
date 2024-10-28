<link rel="stylesheet" type="text/css" href="css/app.css">
<div class="cards">
    @foreach ($products as $product) 
        <div class='card-item'>
            <div class='card-description'>
                <a href="/"> Обратно</a>
                <p>Имя товара:</p>
                <p>{{$product->name}}</p>
            </div>
            <div class='card-description'>
                <p>Цена:</p>
                <p>{{$product->cost}}</p>
            </div>
            <div class='card-description'>
                <p>Количество товара:</p>
                <p>{{$product->amount}}</p>
            </div>
            <div class='card-description'>
                <p>Статус:</p>
                <p>{{$product->status}}</p>
                @if($adminprivilages->privilages == "admin")

                    <form class='product-item2' method="post" action="{{url('/profile')}}">
                        @csrf
                        <select name="status" id="status">
                        <option value="">Выберите статус</option>
                        <option value="Новый">Новый</option>
                        <option value="Одобрен">Одобрен</option>
                        <option value="Доставлен">Доставлен</option>
                    </select>
                    <input type="hidden" name="id" id="id" value={{$product->id}}></input>
                    <button type="submit" href="" >Изменить Статус</button>
                    </form>

                @endif
            </div>
            @if($adminprivilages->privilages == "admin")
                <div class='card-description'>
                    <p>Дата Создания:</p>
                    <p>{{$product->created_at}}</p>
                </div>
                <div class='card-description'>
                    <p>Почта Пользователя:</p>
                    <p>{{$product->user->email}}</p>
                </div>
            @endif
        </div>
    @endforeach
</div>