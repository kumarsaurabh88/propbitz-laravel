<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoriesRequest;
use App\Http\Requests\Admin\UpdateCategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('categories_manage')) {
        //     return abort(401);
        // }

        $categories = Category::all();

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('categories_manage')) {
        //     return abort(401);
        // }
      
        return view('admin.categories.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesRequest $request)
    {
        // if (! Gate::allows('categories_manage')) {
        //     return abort(401);
        // }
        //  $validator = Validator::make($request->all(), [
        //   'image' => 'dimensions:width=1349,height=400',
        //   ]);
        //     if ($validator->fails()){
        //     return back()->withErrors("You Have to upload 1349X400 size image")->withInput();
        //  }
         
         
       if(\App\Category::where('name', '=', $request->name)->exists()){
           return view('admin.categories.create');
       }
       
        $fileName1=null;
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName1);    
    }
        $slug = Str::slug($request->name,'-');
        $categories = Category::create([
            'name'=> $request->name,
            'image' =>$fileName1,
            'slug' =>$slug,
			
        ]);

       
        return redirect()->route('admin.categories.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // if (! Gate::allows('categories_manage')) {
        //     return abort(401);
        // }
       //dd($category);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, Category $category)
    {
        // if (! Gate::allows('categories_manage')) {
        //     return abort(401);
        // }
        
         
        $slug = Str::slug($request->name,'-');
         $form_data = array(
               'name'=> $request->name,
               'slug'=> $slug,
             );
         if (request()->hasFile('image')) {
           $file = request()->file('image');
           $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
           $file->move('./public/uploads/', $fileName1);
            $form_data['image'] = "$fileName1";
    }
        $category->update($form_data);
      
        return redirect()->route('admin.categories.index');
    }

    public function show(Category $category)
    {
        // if (! Gate::allows('categories_manage')) {
        //     return abort(401);
        // }

       

        return view('admin.categories.show', compact('category'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // if (! Gate::allows('categories_manage')) {
        //     return abort(401);
        // }

        $category->delete();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('categories_manage')) {
        //     return abort(401);
        // }
        Category::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
