@extends('layouts.app')
@section('content')
<div>
    <div class="content display-flex column-f pizza-list-container">
        <div class="display-flex column-f">
            <h1>Orders Waiting</h1>
        </div>
        <table class="pizza-list">
            <tr>
                <th>Name</th>
                <th>Pizza Type</th>
                <th>Pizza Base</th>
                <th>View Order</th>
            </tr>
            @foreach($pizzas as $pizza)
            <tr>
                <td>{{ $pizza->name }} </td>
                <td>{{ $pizza->type }} </td>
                <td>{{ $pizza->base }}</td>
                <td><a href="/pizzas/{{ $pizza->id }}" class="btn">view</a></td>
            </tr>
            @endforeach
        </table>
        <a class="order-btn btn" href="pizzas/create">Order a Pizza</a>
    </div>
</div>
@endsection
