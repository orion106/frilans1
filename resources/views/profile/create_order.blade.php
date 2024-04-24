<x-layout.navigation></x-layout.navigation>
<section class="container">
    <div class="header-profile">
        <div>
            <img src="{{asset('/img/Component 6.png')}}" alt="Profile avatar">
            <h1>Иванов Иван</h1>
        </div>
        <a>
            <button>Добавить работу</button>
        </a>
    </div>
</section>
<div class="profile-main container">
    <form class="create_order_form">
        <x-profile.input-profile>
            placeholder="Имя заказа" type="text""
        </x-profile.input-profile>

        <x-profile.input-profile>
            placeholder="Опишите заказ" type="text""
        </x-profile.input-profile>
    </form>
    <x-profile.sidebar>
    </x-profile.sidebar>
</div>
