@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        @forelse ($products as $product)
            <div class="col">
                <div class="card">
                    <div class="card-image">
                        <div class="image">
                            <img src="/img/{{ $product['frontImage'] }}" alt="{{ $product['name'] }}">

                            <img class="hide" src="/img/{{ $product['backImage'] }}" alt="{{ $product['name'] }}">
                        </div>

                        <div class="heart"><i class="fa-solid fa-heart"></i></div>

                        <div class="card-badge">
                            @foreach ($product['badges'] as $badge)
                                @if($badge['type'] == 'discount')
                                    <span class="discount">{{ $badge['value'] }}</span>
                                @endif

                                @if($badge['value'] == 'Sostenibilità')
                                    <span class="sustainability">{{ $badge['value'] }}</span>
                                @endif
                            @endforeach

                        </div>
                    </div>

                    <div class="card-text">
                        <span>{{ $product['brand'] }}</span>

                        <h3>{{ $product['name'] }}</h3>

                        <div class="price">
                        <span>{{ $product['price'] }}</span>

                        <del></del>
                        </div>
                    </div>
                </div>
            </div>

        @empty

        @endforelse

    </div>
</div>

@endsection
