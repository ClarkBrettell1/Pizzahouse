@extends('layouts.app')
@section('content')
    <a href="pizzas/create">Order a pizza</a>
    <div class="mssg"> {{ session('mssg') }}</div>
@endsection
