<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Blog;
use App\Offer;
use App\Tag;
use App\Author;
use App\Case_study;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class CasestudyController extends Controller
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

        $case_study = 'App\Case_study'::all();

        return view('admin.case_study.index', compact('case_study'));
    }
    public function create()
    {
        // if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }
        $category = Category::get();
         $author = Author::get();
         $tags = Tag::get();
        
       return view('admin.case_study.create', compact('category','tags','author'));
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
         $fileName2=null;
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/news', $fileName1);    
        }
        if (request()->hasFile('image1')) {
            $file = request()->file('image1');
            $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/news', $fileName2);    
        }
    
             $case_study = Case_study::create([
                'category_id'=>$request->category_id,
                'title'=> $request->title,
                'type'=> $request->type,
                 'tags'=> implode(",",$request->tags),
                'author_id'=>$request->author,
                'slug'=> Str::slug($request->title,"-"),
               'description'=> $request->description,
                  'created_at'=> $request->dates,
    		    'image' =>$fileName1,
    		    
    			'image1' =>$fileName2,
        	]);

       
        return redirect()->route('admin.news.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Case_study $news)
    {
        // if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }
       $case_study=$news;
        $category = Category::get()->pluck('name', 'id');
         $tags = Tag::get()->pluck('name', 'id');
          $author = Author::get()->pluck('name', 'id');
        return view('admin.case_study.edit', compact('case_study','category','tags','author'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Case_study  $news)
    {
        // if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }


     
        
           $form_data = array(
            'title'=> $request->title,
            'type'=> $request->type,
            //'slug'=> $request->slug,
            'category_id'=>$request->category_id,
             'tags'=> implode(",",$request->tags),
                'author_id'=>$request->author,
                
            'slug'=> Str::slug($request->slug,"-"),
               'created_at'=> $request->dates,
            'description'=> $request->description,
		
        );
        
      
       
        
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/news', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        
        if (request()->hasFile('image1')) {
        $file = request()->file('image1');
        $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/news', $fileName2);
        $form_data['image1'] = "$fileName2";
        }
        
        $news->update($form_data);
      
        return redirect()->route('admin.news.index');
    }
    
    
    
    
    
    
    
    

    public function show(News $case_study)
    {
        // if (! Gate::allows('news_manage')) {
        //     return abort(401);
        // }

       

        return view('admin.case_study.show', compact('case_study'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Case_study $news)
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
        Case_study::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
