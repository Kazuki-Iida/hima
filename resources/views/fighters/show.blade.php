<x-app-layout>

    <x-slot name="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/fighters.css') }}">
    </x-slot>
    <div class="f-container">
        <div class="back">
            <a href="{{ route('fighters.index') }}">戻る</a>
        </div>
        <h1 class="head tx-center f-xl f-bold">ファイターNo.{{ $fighter->id }}</h1>
        <div class="fighters">
            <div class="flex al-center">
                <div class="fighter-image">
                    <img src="{{ asset('/images/noimage.png') }}" alt="">
                </div>
                <h3>{{ $fighter->name }}</h3>
            </div>
            <div class="w-80p mx-center">
                <canvas id="fighterChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        const power = @json($fighter->power);
        const speed = @json($fighter->speed);
        const technic = @json($fighter->technic);
        const intelli = @json($fighter->intelli);
        const stamina = @json($fighter->stamina);
        const mental = @json($fighter->mental);
    </script>
</x-app-layout>