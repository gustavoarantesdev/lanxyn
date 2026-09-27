<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockBatch;
use App\Models\StockMovement;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockBatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $stockBatches = StockBatch::where('user_id', Auth::id())
            ->with('product')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('stock.index', compact('stockBatches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $products = Product::where('user_id', Auth::id())
            ->where('is_active', 1)
            ->select('id', 'name')
            ->orderBy('created_at', 'desc')
            ->get();

        $suppliers = Supplier::where('user_id', Auth::id())
            ->where('is_active', 1)
            ->select('id', 'name')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('stock.create', compact('products', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Registra na tabela de lotes
        $stockBatch = StockBatch::create([
            'user_id' => Auth::id(),
            'product_id' => $request->input('product_id'),
            'supplier_id' => $request->input('supplier_id'),
            'initial_quantity' => (int) $request->input('quantity'),
            'remaining_quantity' => (int) $request->input('quantity'),
            'purchase_date' => $request->input('purchase_date'),
            'expiration_date' => $request->input('expiration_date'),
            'location' => $request->input('location'),
        ]);

        // Registra na tabela de movimentação
        StockMovement::create([
            'stock_id' => $stockBatch->id,
            'movement_type' => 'entry',
            'quantity' => (int) $request->input('quantity'),
            'movement_date' => now(),
        ]);

        return redirect()->route('dashboard');
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
