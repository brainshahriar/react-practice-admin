<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CatrgoryController extends Controller
{
    public function index(){
        $category=Category::all();
        return view('admin.pages.category.index',compact('category'));
    }
      public function store(Request $request){
            $category=Category::insert([
            'category_name'=>$request->category_name,
        ]);
    return back()->with('success', 'Success');

    }
    public function delete($id){

        Category::findOrFail($id)->delete();
         return back()->with('success', 'Deleted');
    }
    public function indexapi(){
        $category=Category::all();
        return $category;
    }

}
