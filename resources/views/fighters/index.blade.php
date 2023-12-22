<x-app-layout>
    <x-slot name="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/fighters.css') }}">
    </x-slot>
    <div class="f-container w-60p">
        <h1 class="head tx-center f-xl f-bold">ファイターリスト</h1>
        {{-- バンタム級 --}}
        <h2 class="weight-head f-lg f-bold">バンタム級</h2>
        <div class="fighters">
            @foreach ($fighters['bantam'] as $fighter)
                <a href="{{ route('fighters.show', ['fighter' => $fighter->id]) }}">
                <div class="fighter-box w-80p flex al-center">
                    <div class="fighter-image">
                        <img src="{{ asset('/images/noimage.png') }}" alt="">
                    </div>
                    <h3 class="mr-s">{{ $fighter->name }}</h3>
                    <p>{{ $fighter->height }}cm/</p>
                    <p>{{ $fighter->weight }}kg</p>
                </div>
                </a>
            @endforeach
        </div>
        {{-- フェザー級 --}}
        <h2 class="weight-head f-lg f-bold">フェザー級</h2>
        <div class="fighters">
            @foreach ($fighters['feather'] as $fighter)
                <a href="{{ route('fighters.show', ['fighter' => $fighter->id]) }}">
                <div class="fighter-box w-80p flex al-center">
                    <div class="fighter-image">
                        <img src="{{ asset('/images/noimage.png') }}" alt="">
                    </div>
                    <h3 class="mr-s">{{ $fighter->name }}</h3>
                    <p>{{ $fighter->height }}cm/</p>
                    <p>{{ $fighter->weight }}kg</p>
                </div>
                </a>
            @endforeach
        </div>
        {{-- ライト級 --}}
        <h2 class="weight-head f-lg f-bold">ライト級</h2>
        <div class="fighters">
            @foreach ($fighters['light'] as $fighter)
                <a href="{{ route('fighters.show', ['fighter' => $fighter->id]) }}">
                <div class="fighter-box w-80p flex al-center">
                    <div class="fighter-image">
                        <img src="{{ asset('/images/noimage.png') }}" alt="">
                    </div>
                    <h3 class="mr-s">{{ $fighter->name }}</h3>
                    <p>{{ $fighter->height }}cm/</p>
                    <p>{{ $fighter->weight }}kg</p>
                </div>
                </a>
            @endforeach
        </div>
        {{-- ヘビー級 --}}
        <h2 class="weight-head f-lg f-bold">ヘビー級</h2>
        <div class="fighters">
            @foreach ($fighters['heavy'] as $fighter)
                <a href="{{ route('fighters.show', ['fighter' => $fighter->id]) }}">
                <div class="fighter-box w-80p flex al-center">
                    <div class="fighter-image">
                        <img src="{{ asset('/images/noimage.png') }}" alt="">
                    </div>
                    <h3 class="mr-s">{{ $fighter->name }}</h3>
                    <p>{{ $fighter->height }}cm/</p>
                    <p>{{ $fighter->weight }}kg</p>
                </div>
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>

import Chart from "chart.js/auto";
import axios from 'axios';

const ctx = document.getElementById("myChart").getContext("2d");
const myChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: ["月", "火曜", "水曜", "木曜", "金曜", "土曜", "日曜"],
        datasets: [
            {
                label: "data 1",
                //data: コントローラから取得,
                borderColor: "rgb(75, 192, 192)",
                backgroundColor: "rgba(75, 192, 192, 0.5)",
            },
        ],
    },
});