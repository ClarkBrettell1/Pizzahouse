@extends('layouts.app')
@section('content')
    <a class="btn-primary btn-lg mx-auto d-block w-25" href="pizzas/create">Order a pizza</a>
    <div class="mssg"> {{ session('mssg') }}</div>
@endsection
