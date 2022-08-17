<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;

class ProductController extends Controller
{

    public function index()
    {
        $products = products::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $product = [
            'name' => $request->name,
            'reference' => $request->reference,
            'price' => $request->price,
            'weigth' => $request->weigth,
            'category' => $request->category,
            'stock' => $request->stock,
            'date' => $request->date
        ];
        $products = products::insert($product);

        return response()->json($products);
    }

    public function show($id)
    {
        $product = products::findOrFail($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = products::findOrFail($id);
        $product->update($request->all());
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = products::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted']);
    }
}
