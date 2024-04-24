<x-layout.navigation></x-layout.navigation>
<div class="registration-block">
    <div class="block-1">
        <h1>Авторизация</h1>
        <form action="{{route('login')}}"  method="post" novalidate>
            @csrf
            <div class="registration-label">
                <label>E-mail</label>
                <input type="email" class=" {{$errors ->has('email') ? 'is-invalid-input' : 'is-valid-input'}}" name="email" placeholder="Впишите свою почту" value="{{old('email')}}" autocomplete="off" autofocus>
                @error('email')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div class="registration-label">
                <label>Пароль</label>
                <input type="password" class=" {{$errors ->has('password') ? 'is-invalid-input' : 'is-valid-input'}}" name="password" placeholder="Введите свой пароль" autocomplete="off">
                @error('password')
                <p>{{$message}}</p>
                @enderror
            </div>

            <button class="login-btn" type="submit">Далее</button>
        </form>
    </div>
    <div class="block-2">
    </div>
</div>
