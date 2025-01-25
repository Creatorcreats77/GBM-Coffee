<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Classes;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('client.layouts.layout')->with('categories', $categories);
    }

    public function category($id)
    {
      $products = Product::where('category_id', $id)->get();
      return view('client.category.show')->with([
          'products' => $products
      ]);

    }

    public function product($id)
    {
        $classes = Classes::pluck('name');

        $product_selected = Product::where('id', $id)
            ->get();
        foreach ($product_selected as $prod)

            $id2 =  $prod['category_id'];

        $products = Product::where('category_id', $id2)->get();

        return view('client.category.showItem')->with([
            'products' => $products,
            'product_selected' => $product_selected,
            'id' => $id,
            'classes' => $classes,

        ]);
    }
    public function create()
    {
        $i = 1;
        $products = Product::orderBy('category_id')->get();
        $categories = Category::pluck('name', 'id');
        return view('client.category.create')
            ->with([
                'categories' => $categories,
                'products' => $products,
                'i' => $i,
            ]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $product = Product::create($input);
        return redirect()->route('create')->with('flash_message', 'Önüm üstünlikli goşuldy! ');

    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('create')->with('flash_message', 'Önüm üstünlikli aýryldy! ');
    }


    public function createCat()
    {
        $i = 1;
        $categories = Category::pluck('name', 'id');
        return view('client.category.createCat')
            ->with([
                'categories' => $categories,
                'i' => $i,
            ]);
    }

    public function storeCat(Request $request)
    {

        $category = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('createCat')->with('flash_message', 'Bölüm üstünlikli goşuldy! ');

    }

    public function destroyCat($id)
    {
        Category::destroy($id);
        return redirect()->route('createCat')->with('flash_message', 'Bölüm üstünlikli aýryldy! ');
    }

}
