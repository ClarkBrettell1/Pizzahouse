<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PizzaController extends Controller
{
    use HasFactory;

    public function __construct()
    {
        $this->middleware('auth')->except(['store','create']);
    }

    public function index() {
    $pizzas = Pizza::all();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store() {

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }

}
