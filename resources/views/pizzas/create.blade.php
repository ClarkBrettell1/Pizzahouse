@extends('layouts.app')
@section('content')
    <div class="display-flex column-f create-pizza">
        <h1>Create a new pizza order</h1>
        <div clas="mssg"></div>
        <form class="display-flex column-f create-form"  action="/pizzas" method="POST">
            @csrf
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Pizza Type:</label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="mighty meaty">Mighty Meaty</option>
                <option value="volcano">Volcano</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="chicken">Chicken</option>
            </select>
            <label for="base">Base Type:</label>
            <select name="base" id="base">
                <option value="garlic crust">Garlic Crust</option>
                <option value="cheese crust">Cheese Crust</option>
                <option value="stuffed crust">Stuffed Crust</option>
                <option value="thin and crispy">Thin and Crispy</option>
            </select>
            <fieldset>
                <label>Extra Toppings:</label><br />
                <div><input type="checkbox" name="toppings[]" value="mushrooms"><span>Mushrooms</span> </div>
                <div><input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni</div>
                <div>  <input type="checkbox" name="toppings[]" value="peppers">Peppers</div>
                <div><input type="checkbox" name="toppings[]" value="onions">Onions</div>
            </fieldset>
            <input class="btn order-btn" type="submit" value="Order Pizza">
        </form>
    </div>
@endsection
