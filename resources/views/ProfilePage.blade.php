<link rel="stylesheet" type="text/css" href="css/app.css">
<div class="cards">
    @foreach ($products as $product) 
        <div class='card-item'>
            <div class='profilecard-description'>
                <a href="/"> Обратно</a>
                <p>Имя: {{$product->name}}</p>
                <p>Цена: {{$product->cost}}</p>
                <p>Количество товара: {{$product->amount}}</p>
            </div>
            <div class='card-description'>
                <p>Статус:</p>
                <p>{{$product->status}}</p>
                @if(Auth::user()->privilages == "admin")
                    <form class='product-item2' method="post" action="{{url('/profile')}}">
                        @csrf
                        <select name="status" id="status">
                            <option value="">Выберите статус</option>
                            <option value="Новый">Новый</option>
                            <option value="Одобрен">Одобрен</option>
                            <option value="Доставлен">Доставлен</option>
                        </select>
                        <input type="hidden" name="id" id="id" value={{$product->id}}></input>
                        <button type="submit">Изменить Статус</button>
                    </form>
                @endif
            </div>
            @if(Auth::user()->privilages == "admin")
                <div class='profilecard-description'>
                    <p>Дата Создания: {{$product->created_at}}</p>
                    <p>Почта Пользователя: {{$product->user->email}}</p>
                </div>
            @endif
        </div>
    @endforeach
</div>