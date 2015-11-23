<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\Admin\AddCategoriesRequest;
use App\Http\Requests\Admin\EditCategoriesRequest;
use App\Http\Controllers\Controller;
use App\Categories;

class CategoriesController extends Controller
{
    public function listAll()
    {
        $categories = Categories::all();
        $dataView   = [
            'categories' =>   $categories
        ];

        return view('admin.categories.list', $dataView);
    }

    public function add()
    {
        return view('admin.categories.add');
    }

    public function doAdd(AddCategoriesRequest $request)
    {
        $name       = $request->name;
        $staticName = $request->static_name;

        

        try {
            $categories = Categories::create(['name' => $name, 'static_name' => $staticName]);
            return redirect()->back()->with('message','Category has been added successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to create new category , with error message: ' . $ex->getMessage();
        }
    }

    public function edit($id)
    {
        $category = Categories::findOrFail($id);
        $dataView   = [
            'category' =>   $category
        ];
        return view('admin.categories.edit', $dataView);
    }

    public function doEdit(EditCategoriesRequest $request, $id)
    {
        $name = $request->name;
        try {
            $editCategory = Categories::findOrFail($id)->update(['name' => $name]);
            return redirect()->route('categories')->with('message','Category has been updated successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to create update this category , with error message: ' . $ex->getMessage();
        }
    }

    public function doDelete($id)
    {
        $category  =   Categories::findOrFail($id);

        try {
            $category->delete();
            return redirect()->back()->with('message','Category has been deleted successfully !');
        } catch (ParseException $ex) {
            echo 'Failed to delete this category , with error message: ' . $ex->getMessage();
        }
    }
}