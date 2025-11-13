<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProdutos = Product::count();
        $valorTotal = Product::sum(DB::raw('price * quantity'));
        $ultimas = Transaction::latest()->take(5)->get();

        return view('dashboard', compact('totalProdutos', 'valorTotal', 'ultimas'));
    }
}
