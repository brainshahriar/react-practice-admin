<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;

class SubcategoryController extends Controller
{
    public function index(){
        $category=Category::all();
        $subcategory=Subcategory::all();
        return view('admin.pages.subcategory.index',compact('subcategory','category'));
    }
      public function store(Request $request){
            $subcategory=Subcategory::insert([
            'category_id'=>$request->category_id,
            'subcategory_name'=>$request->subcategory_name,
        ]);
    return back()->with('success', 'Success');

    }
    public function delete($id){

        Subcategory::findOrFail($id)->delete();
         return back()->with('success', 'Deleted');

}
}
