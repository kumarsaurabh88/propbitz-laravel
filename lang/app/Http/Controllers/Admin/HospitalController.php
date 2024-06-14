<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Hospital;
use App\Blog;
use App\Tag;
use App\Subcategory;
use App\Author;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class HospitalController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('blog_manage')) {
            return abort(401);
        }

        $hospitals = 'App\Hospital'::all();

        return view('admin.hospital.index', compact('hospitals'));
    }
    public function create()
    {
         if (! Gate::allows('blog_manage')) {
            return abort(401);
        }
       
       return view('admin.hospital.create');
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        if (! Gate::allows('blog_manage')) {
            return abort(401);
        }
      
    
             $hospital = Hospital::create([
                'name'=> $request->name,
                'address'=> $request->address,
                'state'=> $request->state,
                'city'=> $request->city,
                'website'=> $request->website,
                'slug'=> Str::slug($request->name,"-"),
        	]);

       
        return redirect()->route('admin.hospital.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //dd($blog);
       if (! Gate::allows('blog_manage')) {
            return abort(401);
        }
        return view('admin.hospital.edit', compact('hospital'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        
         if (! Gate::allows('blog_manage')) {
            return abort(401);
        }

     
        
           $form_data = array(
             'name'=> $request->name,
                'address'=> $request->address,
                'state'=> $request->state,
                'city'=> $request->city,
                'website'=> $request->website,
                'slug'=> Str::slug($request->name,"-"),
        );
        
      
       
        
        $hospital->update($form_data);
      
        return redirect()->route('admin.hospital.index');
    }
    
    
    
    
    
    
    
    

 

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        if (! Gate::allows('blog_manage')) {
            return abort(401);
        }

        $hospital->delete();

        return redirect()->route('admin.hospital.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('blog_manage')) {
            return abort(401);
        }
        Hospital::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}