<x-layout.navigation></x-layout.navigation>
<div class="registration-block">
    <div class="block-1">
        <h1>Регистрация</h1>
        <form action="{{route('registration')}}"  method="post" novalidate>
            @csrf
            <div class="registration-label">
                <label>E-mail</label>
                <input type="email" class=" {{$errors ->has('email') ? 'is-invalid-input' : 'is-valid-input'}}" name="email" placeholder="Впишите свою почту" value="{{old('email')}}" autocomplete="off">
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
            <div class="block-1-radio-input {{$errors ->has('role') ? '' : 'is-valid-role'}}">
                <div>
                    <input type="radio" value="1" {{ old("role") == '1' ? 'checked' : '' }} name="role">
                    <label>Соискатель</label>
                </div>
                <div>
                    <input type="radio" value="2" {{ old("role") == '2' ? 'checked' : '' }} name="role">
                    <label>Работодатель</label>
                </div>
            </div>
            @error('role')
            <p class="block-1-radio-input-error">{{$message}}</p>
            @enderror
            <button type="submit">Далее</button>
        </form>
    </div>
    <div class="block-2">
    </div>
</div>
