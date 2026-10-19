<?php

namespace App\Http\Controllers;

use App\Models\CashRegister;
use App\Models\PaymentMethod;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cashRegister = CashRegister::where('tenant_id', Auth::user()->tenant_id)->first();

        $products = Product::where('tenant_id', Auth::user()->tenant_id)->get();

        $paymentMethods = PaymentMethod::where('tenant_id', Auth::user()->tenant_id)->get();

        return view('sale.create', compact('cashRegister', 'products', 'paymentMethods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
