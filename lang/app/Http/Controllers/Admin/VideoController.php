<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Sectioncontent;
use App\Tag;
use App\Subcategory;
use App\Video;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('video_gallery_manage')) {
            return abort(401);
        }

        $video = 'App\Video'::all();

        return view('admin.video.index', compact('video'));
    }
    public function create()
    {
        if (! Gate::allows('video_gallery_manage')) {
            return abort(401);
        }
        
       return view('admin.video.create');
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
       if (! Gate::allows('video_gallery_manage')) {
            return abort(401);
        }
      
         $fileName1=null;
     
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/vodeo_image', $fileName1);    
        }
       
    
             $video = Video::create([
                'page'=>$request->page,
                'title'=> $request->title,
                
    		    'image' =>$fileName1,
    			'video'=> $request->video,
        	]);

       
        return redirect()->route('admin.video.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
      if (! Gate::allows('video_gallery_manage')) {
            return abort(401);
        }
 return view('admin.video.edit', compact('video'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
       if (! Gate::allows('video_gallery_manage')) {
            return abort(401);
        }


       /* $blog->update($request->all());*/
        
           $form_data = array(
            'title'=> $request->title,
             'page'=> $request->page,
            'video'=>$request->video,
           
		
        );
        
      
       
        
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/vodeo_image', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        
    
        
        $video->update($form_data);
      
        return redirect()->route('admin.video.index');
    }
    
    
    
    
    
    
    
    

    

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
            if (! Gate::allows('video_gallery_manage')) {
            return abort(401);
        }


        $video->delete();

        return redirect()->route('admin.video.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
           if (! Gate::allows('video_gallery_manage')) {
            return abort(401);
        }

        Video::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}