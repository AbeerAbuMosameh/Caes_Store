<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorysRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $breadcrumbs = [
            ['link' => "dashboard/slides-list", 'name' => "Slides List"], ['name' => "Slides List"]
        ];
        return view('/admin/content/category/index', compact('breadcrumbs', 'categories'));
    }

    public function create()
    {
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/category/create', ['breadcrumbs' => $breadcrumbs]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $breadcrumbs = [
            ['link' => "dashboard/home-page", 'name' => "Home page"], ['name' => "Home page"]
        ];
        return view('/admin/content/category/edit', compact('breadcrumbs', 'category'));
    }

    public function store(CategorysRequest $request)
    {
        Category::create($request->all());
        return redirect()->back()->with('msg', 'Category created Successfully!');
    }

    public function update(CategorysRequest $request, $id)
    {
        $category = Category::find($id);
        $input = $request->all();
        $category->update($input);
        return redirect()->back()->with('msg', 'Category updated Successfully!');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('msg', 'Category deleted Successfully!');
    }

}
