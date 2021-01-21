@extends('layouts.app')
@section('content')
    <a class="btn-dark btn-lg mx-auto d-block w-25" href="pizzas/create">Order a pizza</a>
    <div class="mssg"> {{ session('mssg') }}</div>
@endsection
