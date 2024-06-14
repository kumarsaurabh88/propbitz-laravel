<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Project;
use App\Tag;
use App\Inprojact;
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

class projectController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }

        $projects = 'App\Project'::all();
        

        return view('admin.project.index', compact('projects'));
    }
    public function create()
    {
        //  if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }
       
        
       
       return view('admin.project.create');
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
        
        // if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }
      
         $fileName1=null;
         $fileName2=null;
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/project/', $fileName1);    
        }
        if (request()->hasFile('image1')) {
            $file = request()->file('image1');
            $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/project/', $fileName2);    
        }
        
        
        
        
    
             $project = Project::create([
                
                'title'=> $request->title,
                'slug'=> Str::slug($request->title,"-"),
               'description'=> $request->description,
    		    'image' =>$fileName1,
    			'image1' =>$fileName2,
        	]);
        	if($request->p_category[0]!=Null)
            {
                dd($request->p_category[0]=Null);
         $project->id;
          $fileName3=null;
         $p_image = $request->file('p_image');
         
       foreach ($request->p_category as $key => $value) {
           
          $file = $p_image[$key];
            if ($file->isValid()) {
                $fileName3 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('./public/uploads/project/', $fileName3);    
            }
          
                  
             
              
              Inprojact::create([
                'project_id' => $project->id,
                'p_image'=>$fileName3,
                'p_category'=>$value,
                'p_title'=>$request->p_title[$key],
                'p_discription'=>$request->p_discription[$key],
                
                 ]);
        }
}

       
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
    //    if (! Gate::allows('blog_manage')) {
    //         return abort(401);
    //     }
      
       $inprojacts = Inprojact::where('project_id',$project->id)->get();
       //dd($inprojacts);
        return view('admin.project.edit', compact('project','inprojacts'));
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
        
        //  if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }

       /* $blog->update($request->all());*/
        
           $form_data = array(
            'title'=> $request->title,
            'slug'=> Str::slug($request->title,"-"),
            'description'=> $request->description,
		
        );
        
      
       
        
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/project/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        
        if (request()->hasFile('image1')) {
        $file = request()->file('image1');
        $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/project/', $fileName2);
        $form_data['image1'] = "$fileName2";
        }
        
        $project->update($form_data);
         
            if($request->p_category[0]!=Null)
            {
                Inprojact::where('project_id',$project->id )->delete();
        $project->id;
          $fileName3=null;
         $p_image = $request->file('p_image');
         
       foreach ($request->p_category as $key => $value) {
           
            $file = $p_image[$key];
            if ($file != null && $file->isValid()) {
                $fileName3 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
                $file->move('./public/uploads/project/', $fileName3);    
            }
            if ( $file != null && $file->isValid()) {
                Inprojact::create([
                'project_id' => $project->id,
                'p_image'=>$fileName3,
                'p_category'=>$value,
                'p_title'=>$request->p_title[$key],
                'p_discription'=>$request->p_discription[$key],
                
                 ]);
            }else{
                Inprojact::create([
                'project_id' => $project->id,
                'p_category'=>$value,
                'p_title'=>$request->p_title[$key],
                'p_discription'=>$request->p_discription[$key],
                
                 ]);
            }
            
              
              
        }
            }
      
        return redirect()->route('admin.project.index');
    }
    
    
    
    
    
    
    
    

   
    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        // if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }

        $project->delete();
        Inprojact::where('project_id', $project->id)->delete();
        return redirect()->route('admin.project.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }
        Project::whereIn('id', request('ids'))->delete();
        Inprojact::whereIn('projact_id', request('ids'))->delete();
        return response()->noContent();
    }

}
