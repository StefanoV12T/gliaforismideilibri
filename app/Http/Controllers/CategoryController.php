<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('categories.index', ['categories'=>$categories]);
    }
    public function create()
    {
        return view('categories.createcategory');
    }
    public function store(Request $request)
    {

        $category=new Category();
        $category->name=$request->name;
        $category->category_author_id=auth()->user()->id;
        $category->category_author_name=auth()->user()->name;
        $category->save();
     
        return redirect()->route('categories.index')->with(['success'=>'Categoria creata correttamente']);

    }
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

 
     //Update the specified resource in storage.

    public function update(Request $request, Category $category)
    {
        $category->fill($request->all())->save();
        //return redirect()->back()->with(['success'=>'Categoria modificata correttamente']);
        return redirect()->route('categories.index')->with(['success'=>'Categoria modificata correttamente']);
        
    }

    
     //Remove the specified resource from storage.
     
    public function destroy(Category $category)
    {
        // dd($category);
        $category->delete();
        return redirect()->back()->with(['success'=>'Categoria cancellata correttamente']);

    }

}
