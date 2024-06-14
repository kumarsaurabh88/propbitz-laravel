<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Blog;
use App\Author;
use App\Offer;
use App\Subcategory;
use App\Product;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('author_manage')) {
            return abort(401);
        }

        $authors = 'App\Author'::all();

        return view('admin.author.index', compact('authors'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('author_manage')) {
            return abort(401);
        }
       
        
       return view('admin.author.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        if (! Gate::allows('author_manage')) {
            return abort(401);
        }
      
         $fileName1=null;
        
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/', $fileName1);    
        }
       
    
             $authors = Author::create([
                'name'=> $request->name,
                 'designation'=> $request->designation,
                
                'slug'=> Str::slug($request->name,"-"),
              'description'=> $request->description,
    		    'image' =>$fileName1,
    			
        	]);

       
        return redirect()->route('admin.author.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        if (! Gate::allows('author_manage')) {
            return abort(401);
        }
         
        return view('admin.author.edit', compact('author'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        if (! Gate::allows('author_manage')) {
            return abort(401);
        }


      
        
           $form_data = array(
            'name'=> $request->name,
             'designation'=> $request->designation,
            'slug'=> Str::slug($request->name,"-"),
            'description'=> $request->description,
		
        );
        
      
       
        
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        
        
        
        $author->update($form_data);
      
        return redirect()->route('admin.author.index');
    }
    
    
    
    
    
    
    
    

    public function show(Authors $author)
    {
        if (! Gate::allows('author_manage')) {
            return abort(401);
        }

       

        return view('admin.author.show', compact('author'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Authors $author)
    {
        if (! Gate::allows('author_manage')) {
            return abort(401);
        }

        $author->delete();

        return redirect()->route('admin.author.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('author_manage')) {
            return abort(401);
        }
        Author::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
