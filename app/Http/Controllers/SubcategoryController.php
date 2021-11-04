<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{
   
    public function index()
    {
        $subcategories=Subcategory::all();
        return  view('subcategory.index', compact('subcategories'));
    }

   
    public function create()
    {
        return view('admin.home');
    }

  
    public function store(Request $request)
    {
        $Subcategory = new Subcategory ;
        $Subcategory->subcategory_name = $request->subcategory_name ;
        $Subcategory->subcategory_type = $request->subcategory_type ;
        $Subcategory->save();

        return redirect()->route('admin.home');
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
