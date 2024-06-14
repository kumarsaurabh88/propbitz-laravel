<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Blog;
use App\Course;
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

class courseController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        $courses = 'App\Course'::all();

        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
       return view('admin.course.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        if (! Gate::allows('categories_manage')) {
            return abort(401);
        }
      
         $fileName1=null;
         $fileName2=null;
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/', $fileName1);    
        }
        if (request()->hasFile('image1')) {
            $file = request()->file('image1');
            $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/', $fileName2);    
        }
    
             $blogs = Course::create([
                'title'=> $request->title,
                'slug'=> Str::slug($request->title,"-"),
               'description'=> $request->description,
               'curriculum'=> $request->curriculum,
               'duration'=> $request->duration,
    		    'image' =>$fileName1,
    			'image1' =>$fileName2,
        	]);

       
        return redirect()->route('admin.course.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
       
        return view('admin.course.edit', compact('course'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }


       /* $blog->update($request->all());*/
        
           $form_data = array(
            'title'=> $request->title,
            'slug'=> Str::slug($request->title,"-"),
            'description'=> $request->description,
            'curriculum'=> $request->curriculum,
               'duration'=> $request->duration,
		
        );
        
      
       
        
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        
        if (request()->hasFile('image1')) {
        $file = request()->file('image1');
        $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName2);
        $form_data['image1'] = "$fileName2";
        }
        
        $course->update($form_data);
      
        return redirect()->route('admin.course.index');
    }
    
    
    
    
    
    
    
    

    public function show(Course $course)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

       

        return view('admin.course.show', compact('course'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        $course->delete();

        return redirect()->route('admin.course.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
        Product::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
