<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\SalesTransaction;

class TransactionController extends Controller
{
    // Level 1 (Easy) - Get all users
    public function getUsers()
    {
        return response()->json(User::all());
    }

    // Level 2 (Moderate) - Get products with their categories
    public function getProducts()
    {
        $products = Product::with('categories')->get();
        return response()->json($products);
    }

    // Level 3 (Challenging) - Get transactions with user details
    public function getTransactions()
    {
        $transactions = SalesTransaction::with('user')->get();
        return response()->json($transactions);
    }

    // Level 4 (Difficult) - Get sales transactions with product details
    public function getSalesData()
    {
        $sales = SalesTransaction::with(['user', 'product'])->get();
        return response()->json($sales);
    }
}


