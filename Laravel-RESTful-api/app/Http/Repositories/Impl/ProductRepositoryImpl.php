<?php


namespace App\Http\Repositories\Impl;


use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Http\Repositories\ProductRepository;
use App\Models\Product;

class ProductRepositoryImpl extends EloquentRepository implements ProductRepository
{
    public function getModel()
    {
        $model = Product::class;
        return $model;
    }
}
