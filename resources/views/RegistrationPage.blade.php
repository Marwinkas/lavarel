<link rel="stylesheet" type="text/css" href="css/app.css">
<div class="cards">
    <form class='auth' method="post" action="{{url('/registration')}}">
        @csrf
        <div class='product-description'>
            <p>Почта:</p>
            <input class="@error('amount') is-invalid @enderror" id="email" type="email" name="email">
        </div>
        <div class='product-description'>
            <p>Пароль:</p>
            <input class="@error('amount') is-invalid @enderror" id="password" type="password" name="password">
        </div>
        <button type="submit" href="" class='card-button'>Регистрация</button>
        <a href="/login" class='product-button'>Уже есть аккаунт</a>
        @error('amount')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
    <script src="../js/product.js"></script>
</div>