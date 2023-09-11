<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
class ProductController extends Controller
{
    public function index()
    {
       return view('products.create');

    }
    public function create(Request $request)
    {
        $request->validate([
        'name' => ['required', 'min:4'],
        'category' => ['required', 'min:4'],
        'description' => ['required', 'min:4'], // Correct the field name to 'description'.
    ]);
        \DB::table('products')->insert($request->all());
        return response()->json(['status' => 'success', 200]);

        // \DB::table('products')->insert($request ->all());
        // return response()->json(['status'=>'success',200]);

    }
    public function main()
    {
        $products = \DB::table('products')->get();
        return view('welcome', ['products' => $products]);

    }
    public function destroy($id)
{
    try {
        $product = Product::findOrFail($id);
        $product->delete();

        // Redirect to the home page ("/")
        return redirect('/')->with('success', 'Product deleted successfully');
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => 'Failed to delete product'], 500);
    }
}
    public function show(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);

            if ($request->wantsJson()) {
                return response()->json([
                    'status' => 'success',
                    'product' => $product,
                ]);
            } else {
                return view('product.show', compact('product'));
            }
        } catch (\Exception $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Product not found.',
                ], 404);
            } else {
                return redirect()->back()->with('error', 'Product not found.');
            }
        }
    }

    // $request ->validate([
    //     'name' =>['required','min:4'],
    //     'category' =>['required','min:4'],
    //     'descrition' =>['required','min:4']
    // ]);
}
