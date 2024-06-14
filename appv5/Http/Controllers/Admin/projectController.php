<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Blog;
use App\Project;
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
use Image;
use Illuminate\Support\Str;

class projectController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('project_manage')) {
        //     return abort(401);
        // }

        $project = 'App\Project'::all();

        return view('admin.project.index', compact('project'));
    }
    public function create()
    {
        //  if (! Gate::allows('project_manage')) {
        //     return abort(401);
        // }
        $category = Category::get();
        $author = Author::get();
        
         $tags = Tag::get();
       return view('admin.project.create', compact('category','author'));
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
        // if (! Gate::allows('project_manage')) {
        //     return abort(401);
        // }
      
         $fileName1=null;
        //  $fileName2=null;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." .'webp';

            $file_width1 = Image::make($file)->width();
            $file_height1 = Image::make($file)->height();
            $compressd_image1 = Image::make($file->getRealPath())->orientate()->resize($file_width1, $file_height1, function ($constraint) {
            $constraint->aspectratio(); //maintain image ratio
            });
            $compressd_image1->save('./public/uploads/Project/'.$fileName1);
        }
        else{
            $fileName1 = NULL;
        }

        
    
             $project = Project::create([
                'category_id'=>$request->category_id,
                'title'=> $request->title,
    		    'image' =>$fileName1,
                'purpose' => $request->purpose,
                'location' => $request->location,
    			
        	]);

       
        return redirect()->route('admin.project.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //dd($blog);
    //    if (! Gate::allows('project_manage')) {
    //         return abort(401);
    //     }
        $category = Category::get();
        $author = Author::get()->pluck('name', 'id');
        $tags = Tag::get()->pluck('name', 'id');
        // dd($project);
        return view('admin.project.edit', compact('project','category','author','tags'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        
        //  if (! Gate::allows('project_manage')) {
        //     return abort(401);
        // }

       /* $blog->update($request->all());*/
        
           $form_data = array(
            'title'=> $request->title,
            'category_id'=>$request->category_id,
            'created_at'=> $request->dates,
            'purpose' => $request->purpose,
            'location' => $request->location,
		
        );
        
      
       
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." .'webp';
    
            $file_width1 = Image::make($file)->width();
            $file_height1 = Image::make($file)->height();
            $compressd_image1 = Image::make($file->getRealPath())->orientate()->resize($file_width1, $file_height1, function ($constraint) {
            $constraint->aspectratio(); //maintain image ratio
            });
            $compressd_image1->save('./public/uploads/Project/'.$fileName1);
    
            // $file->move('./public/uploads/', $fileName1);
            $form_data['image'] = "$fileName1";
            }
            
        $project->update($form_data);
      
        return redirect()->route('admin.project.index');
    }
    
    
    
    
    
    
    
    

    public function show(Project $project)
    {
         if (! Gate::allows('project_manage')) {
            return abort(401);
        }

       

        return view('admin.project.show', compact('project'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        // if (! Gate::allows('project_manage')) {
        //     return abort(401);
        // }

        $project->delete();

        return redirect()->route('admin.project.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('project_manage')) {
        //     return abort(401);
        // }
        Project::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
