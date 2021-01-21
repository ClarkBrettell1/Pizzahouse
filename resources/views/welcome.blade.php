@extends('layouts.app')
@section('content')
    <a class="btn-info btn-lg" href="pizzas/create">Order a pizza</a>
    <div class="mssg"> {{ session('mssg') }}</div>
@endsection
