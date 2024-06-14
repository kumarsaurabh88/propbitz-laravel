<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Blog;
use App\News;
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

class newsController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }

        $news = 'App\News'::all();

        return view('admin.news.index', compact('news'));
    }
    public function create()
    {
        //  if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }
        $category = Category::get();
        $author = Author::get();
        
         $tags = Tag::get();
       return view('admin.news.create', compact('category','author','tags'));
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
        // if (! Gate::allows('news_manage')) {
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
            $compressd_image1->save('./public/uploads/News/'.$fileName1);
        }
        else{
            $fileName1 = NULL;
        }

        
    
             $news = News::create([
                'title'=> $request->title,
    		    'image' =>$fileName1,
    			
        	]);

       
        return redirect()->route('admin.news.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //dd($blog);
    //    if (! Gate::allows('news_manage')) {
    //         return abort(401);
    //     }
       
        $category = Category::get()->pluck('name', 'id');
        $author = Author::get()->pluck('name', 'id');
        $tags = Tag::get()->pluck('name', 'id');
        return view('admin.news.edit', compact('news','category','author','tags'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        
        //  if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }

       /* $blog->update($request->all());*/
        
           $form_data = array(
            'title'=> $request->title,
            'created_at'=> $request->dates,
		
        );
        
      
       
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." .'webp';
    
            $file_width1 = Image::make($file)->width();
            $file_height1 = Image::make($file)->height();
            $compressd_image1 = Image::make($file->getRealPath())->orientate()->resize($file_width1, $file_height1, function ($constraint) {
            $constraint->aspectratio(); //maintain image ratio
            });
            $compressd_image1->save('./public/uploads/News/'.$fileName1);
    
            // $file->move('./public/uploads/', $fileName1);
            $form_data['image'] = "$fileName1";
            }
            
        $news->update($form_data);
      
        return redirect()->route('admin.news.index');
    }
    
    
    
    
    
    
    
    

    public function show(News $news)
    {
        //  if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }

       

        return view('admin.news.show', compact('news'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        // if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }

        $news->delete();

        return redirect()->route('admin.news.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }
        Blog::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
