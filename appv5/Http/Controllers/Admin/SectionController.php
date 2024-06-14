<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Sectioncontent;
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

class SectionController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('page_content')) {
            return abort(401);
        }

        $sectioncontent = 'App\Sectioncontent'::all();

        return view('admin.section.index', compact('sectioncontent'));
    }
    public function create()
    {
        if (! Gate::allows('page_content')) {
            return abort(401);
        }
      
         $tags = Tag::get();
       return view('admin.section.create');
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
        if (! Gate::allows('page_content')) {
            return abort(401);
        }
      
         $fileName1=null;
     
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/', $fileName1);    
        }
       
    
             $Sectioncontent = Sectioncontent::create([
                'page'=>$request->page,
                'section'=>$request->section,
                'title'=> $request->title,
                'slug'=> Str::slug($request->title,"-"),
               'description'=> $request->description,
    		    'image' =>$fileName1,
    			'video'=> $request->video,
        	]);

       
        return redirect()->route('admin.sectioncontent.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sectioncontent $sectioncontent)
    {
        if (! Gate::allows('page_content')) {
            return abort(401);
        }
       
       
        return view('admin.section.edit', compact('sectioncontent'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sectioncontent $sectioncontent)
    {
        if (! Gate::allows('page_content')) {
            return abort(401);
        }


       /* $blog->update($request->all());*/
        
           $form_data = array(
            'title'=> $request->title,
             'page'=> $request->page,
             'section'=> $request->section,
            'video'=>$request->video,
            'slug'=> Str::slug($request->title,"-"),
            'description'=> $request->description,
		
        );
        
      
       
        
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        
    
        
        $sectioncontent->update($form_data);
      
        return redirect()->route('admin.sectioncontent.index');
    }
    
    
    
    
    
    
    
    

    

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sectioncontent $sectioncontent)
    {
        if (! Gate::allows('page_content')) {
            return abort(401);
        }

        $sectioncontent->delete();

        return redirect()->route('admin.section.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('page_content')) {
            return abort(401);
        }
        Sectioncontent::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}