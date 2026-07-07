<div>
    <h1>Welcome to the Habit Tracker</h1>
    <p>Olá, {{ $name }}!</p>
    <p>Seus Hábitos:</p>
    <ul>
        @foreach ($habits as $habit)
            <li>{{ $habit }}</li>
        @endforeach
    </ul>
</div>

@auth
    <p>Você está logado</p>
@endauth

@guest
    <p>Você não está logado!</p>
@endguest
