@extends('layouts.app')
@section('content')
    <div class="Wrapper display-flex column-f pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type"> Type - {{ $pizza->type }} </p>
        <p class="base"> Base - {{ $pizza->base }} </p>
        @if($pizza->toppings)
        <p class="toppings">Extra Toppings: </p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
            @endforeach
        </ul>
        @endif

        <br />
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method ('DELETE')
        <button class="complete-btn btn">Complete Order</button>
    </form>
        <br />
        <br />
        <a href="/pizzas" class="back-btn btn">Back to all pizzas</a>
    </div>
@endsection
