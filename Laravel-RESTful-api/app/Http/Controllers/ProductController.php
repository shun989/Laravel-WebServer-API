<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAll();

        return response()->json($products, 200);
    }

    public function indexWeb()
    {
//        $products = $this->productService->getAll();
        $products = Product::paginate(3);
        return view('products.list', compact('products'));
    }

    public function show($id)
    {
        $dataProduct = $this->productService->findById($id);

        return response()->json($dataProduct['products'], $dataProduct['statusCode']);
    }

    public function formCreate()
    {
        return view('products.create');
    }

    public function create(Request $request)
    {
        $dataProduct = $this->productService->create($request->all());
        return redirect()->route('products.list');
    }

    public function store(Request $request)
    {
        $dataProduct = $this->productService->create($request->all());

        return response()->json($dataProduct['products'], $dataProduct['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $dataProduct = $this->productService->update($request->all(), $id);

        return response()->json($dataProduct['products'], $dataProduct['statusCode']);
    }

    public function editForm($id)
    {
        $oldProduct = Product::find($id);
        return view('products.edit', ['oldProduct'=>$oldProduct]);
    }
    public function updateWeb(Request $request, $id)
    {
        $dataProduct = $this->productService->update($request->all(), $id);
        return redirect()->route('products.list');
    }

    public function destroy($id)
    {
        $dataProduct = $this->productService->destroy($id);

        return response()->json($dataProduct['message'], $dataProduct['statusCode']);
    }

    public function destroyWeb($id)
    {
        $dataProduct = $this->productService->destroy($id);
        return redirect()->route('products.list');
    }
}
