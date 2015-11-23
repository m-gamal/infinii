<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Products;

class ProductsController extends Controller
{
    public function listAll()
    {
        $products = Products::all();
        $dataView   = [
            'products' =>   $products
        ];

        return view('admin.products.list', $dataView);
    }

    public function doDelete($id)
    {
        $product  =   Products::findOrFail($id);

        try {
            $product->delete();
            return redirect()->back()->with('message','Product has been deleted successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to delete this product , with error message: ' . $ex->getMessage();
        }
    }
}
