<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\ProductRepository;
use App\Http\Services\ProductService;

class ProductServiceImpl implements ProductService
{
    protected $productRepository;


    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll()
    {
        $products = $this->productRepository->getAll();

        return $products;
    }

    public function findById($id)
    {
        $product = $this->productRepository->findById($id);

        $statusCode = 200;
        if (!$product)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'products' => $product
        ];

        return $data;
    }

    public function create($request)
    {
        $product = $this->productRepository->create($request);

        $statusCode = 201;
        if (!$product)
            $statusCode = 500;

        $data = [
            'statusCode' => $statusCode,
            'products' => $product
        ];

        return $data;
    }

    public function update($request, $id)
    {
        $oldproduct = $this->productRepository->findById($id);

        if (!$oldproduct) {
            $newproduct = null;
            $statusCode = 404;
        } else {
            $newproduct = $this->productRepository->update($request, $oldproduct);
            $statusCode = 200;
        }

        $data = [
            'statusCode' => $statusCode,
            'products' => $newproduct
        ];
        return $data;
    }

    public function destroy($id)
    {
        $product = $this->productRepository->findById($id);

        $statusCode = 404;
        $message = "User not found";
        if ($product) {
            $this->productRepository->destroy($product);
            $statusCode = 200;
            $message = "Delete success!";
        }

        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;
    }
}
