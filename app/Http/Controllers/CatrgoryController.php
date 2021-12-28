<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

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
            $allArray=[];
            foreach ($category as $value) {
                $subcategory=Subcategory::where('category_id',$value['id'])->get();
                $item=[

                    'category_name'=>$value['category_name'],
                    'subcategory_name'=>$subcategory

                ];
                array_push($allArray,$item);
            }
            return $allArray;
    }

}
