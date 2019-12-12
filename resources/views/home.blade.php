@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img src="{{$avatar}}" alt="">
                    <br>

                        <div class="wraper">
                            <div class="arrowup"></div>
                            <div class="arrowdown"></div>
                            <div class="window">
                                <ul class="list">
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf2-r3ZjxW6c6Jl5KOhOPLP7LWnn8f65F12ujA8dX2igzj80RsNWH3coWScg9oN1uC8gTtkue50JK0tcnBwGwj5Hf6zmNPeA/82fx62f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgporrf0e1Y07PLZTiVPvYznwL-DmOPLIbTVqWdY781lxO-Xo9j32Afirko-ZzygIoWddwE6N1nXq1jsxru-hZ-8ucjBmndk7yA8pSGKrPA1flw/165fx124f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf2-r3ZjxW6c6Jl5KOhOPLP7LWnn8f65F12ujA8dX2igzj80RsNWH3coWScg9oN1uC8gTtkue50JK0tcnBwGwj5Hf6zmNPeA/82fx62f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLOzLhRlxfbGTj5X09q_goWYkuHxPYTDk39D58dknuDO-7P5gVO8v11rNj_3doSVIA5taAmFrlXqx-rphJ66vc7AnXtg6Cgj43zdyRPm0h9NcKUx0kOQhc3i/165fx124f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PTbTjlH7du6kb-KkPDmNqjCmXlu4MBwnPD--Y3nj1H68xFqZmyhcNCTdgBoNAyC-AW4xufp05LovcnNz3Qy7HYg5iqMyhWwhQYMMLLglS0qcQ/82fx62f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PDdTjlH_9mkgL-OlvD4NoTSmXlD58F0hNbN_Iv9nBrhrRc5YTqgJdWcIA48M1iF81m8wurrgMW76s_LmydguSRwtn3VmUThn1gSOZyN_0a1/165fx124f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0Ob3djFN79eJg4GYg_L4MrXVqXlU6sB9teXI8oThxgbs_0tlajihJ4PAd1c8aAvWrwXsx-q9h8fqvZTNmic2uylz5SqJlxypwUYbBM1DXmo/165fx124f/image.png" alt=""></li>

                                </ul>
                            </div>
                        </div>
                        <p style="text-align: center">
                            <button class="button">Крутить</button></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf2-r3ZjxW6c6Jl5KOhOPLP7LWnn8f65F12ujA8dX2igzj80RsNWH3coWScg9oN1uC8gTtkue50JK0tcnBwGwj5Hf6zmNPeA/82fx62f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposLOzLhRlxfbGTj5X09q_goWYkuHxPYTDk39D58dknuDO-7P5gVO8v11rNj_3doSVIA5taAmFrlXqx-rphJ66vc7AnXtg6Cgj43zdyRPm0h9NcKUx0kOQhc3i/165fx124f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PTbTjlH7du6kb-KkPDmNqjCmXlu4MBwnPD--Y3nj1H68xFqZmyhcNCTdgBoNAyC-AW4xufp05LovcnNz3Qy7HYg5iqMyhWwhQYMMLLglS0qcQ/82fx62f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PDdTjlH_9mkgL-OlvD4NoTSmXlD58F0hNbN_Iv9nBrhrRc5YTqgJdWcIA48M1iF81m8wurrgMW76s_LmydguSRwtn3VmUThn1gSOZyN_0a1/165fx124f/image.png" alt=""></li>
                                    <li><img src="https://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0Ob3djFN79eJg4GYg_L4MrXVqXlU6sB9teXI8oThxgbs_0tlajihJ4PAd1c8aAvWrwXsx-q9h8fqvZTNmic2uylz5SqJlxypwUYbBM1DXmo/165fx124f/image.png" alt=""></li>

-->

@endsection
