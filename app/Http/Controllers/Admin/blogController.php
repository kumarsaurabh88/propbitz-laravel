<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
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
use Image;
use Illuminate\Support\Str;

class blogController extends Controller
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

        $blogs = 'App\Blog'::all();

        return view('admin.blog.index', compact('blogs'));
    }
    public function create()
    {
        //  if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }
        $category = Category::get();
        $author = Author::get();
        
        $tags = Tag::get();
       return view('admin.blog.create', compact('category','author','tags'));
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
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." .'webp';

            $file_width1 = Image::make($file)->width();
            $file_height1 = Image::make($file)->height();
            $compressd_image1 = Image::make($file->getRealPath())->orientate()->resize($file_width1, $file_height1, function ($constraint) {
                $constraint->aspectratio(); //maintain image ratio
            });
            $compressd_image1->save('./public/uploads/blog/'.$fileName1);
        }


        if (request()->hasFile('image1')) {
            $file = request()->file('image1');
            $fileName2 = md5($file->getClientOriginalName() . time()) . "." .'webp';

            $file_width1 = Image::make($file)->width();
            $file_height1 = Image::make($file)->height();
            $compressd_image1 = Image::make($file->getRealPath())->orientate()->resize($file_width1, $file_height1, function ($constraint) {
                $constraint->aspectratio(); //maintain image ratio
            });
            $compressd_image1->save('./public/uploads/blog/'.$fileName2);
        }
        
    
             $blogs = Blog::create([
                'category_id'=>$request->category_id,
                'title'=> $request->title,
                'slug'=> $request->slug,
                'author_id'=> $request->author,
                //'tags'=> implode(",",$request->tags),
                //'slug'=> Str::slug($request->title,"-"),
               'description'=> $request->description,
               'created_at'=> $request->dates,
    		    'image' =>$fileName1,
    			'image1' =>$fileName2,
        	]);

       
        return redirect()->route('admin.blog.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //dd($blog);
    //    if (! Gate::allows('blog_manage')) {
    //         return abort(401);
    //     }
       
        $category = Category::get()->pluck('name', 'id');
        $author = Author::get()->pluck('name', 'id');
        $tags = Tag::get()->pluck('name', 'id');
        return view('admin.blog.edit', compact('blog','category','author','tags'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        
        //  if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }

       /* $blog->update($request->all());*/
        
           $form_data = array(
            'title'=> $request->title,
            'slug'=> $request->slug,
             'author_id'=> $request->author,
              //'tags'=> implode(",",$request->tags),
            'category_id'=>$request->category_id,
           //'slug'=> Str::slug($request->title,"-"),
            'created_at'=> $request->dates,
            'description'=> $request->description,
		
        );
        
      
       
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." .'webp';
    
            $file_width1 = Image::make($file)->width();
            $file_height1 = Image::make($file)->height();
            $compressd_image1 = Image::make($file->getRealPath())->orientate()->resize($file_width1, $file_height1, function ($constraint) {
                $constraint->aspectratio(); //maintain image ratio
            });
            $compressd_image1->save('./public/uploads/blog/'.$fileName1);
    
            // $file->move('./public/uploads/', $fileName1);
            $form_data['image'] = "$fileName1";
            }
            


            if (request()->hasFile('image1')) {
                $file = request()->file('image1');
                $fileName2 = md5($file->getClientOriginalName() . time()) . "." .'webp';
        
                $file_width1 = Image::make($file)->width();
                $file_height1 = Image::make($file)->height();
                $compressd_image1 = Image::make($file->getRealPath())->orientate()->resize($file_width1, $file_height1, function ($constraint) {
                    $constraint->aspectratio(); //maintain image ratio
                });
                $compressd_image1->save('./public/uploads/blog/'.$fileName2);
        
                // $file->move('./public/uploads/', $fileName1);
                $form_data['image1'] = "$fileName2";
                }
                
        
        $blog->update($form_data);
      
        return redirect()->route('admin.blog.index');
    }
    
    
    
    
    
    
    
    

    public function show(Blog $blog)
    {
        //  if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }

       

        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        // if (! Gate::allows('blog_manage')) {
        //     return abort(401);
        // }

        $blog->delete();

        return redirect()->route('admin.blog.index');
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
        Blog::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
