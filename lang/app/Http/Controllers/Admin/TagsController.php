<?php
namespace App\Http\Controllers\Admin;

use App\Tag;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoriesRequest;
use App\Http\Requests\Admin\UpdateCategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }

        $tags = Tag::all();

        return view('admin.tags.index', compact('tags'));
    }
    public function rating()
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }

        $ratings = 'App\Rating'::all();

        return view('admin.tags.rating', compact('ratings'));
    }
    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
      
        return view('admin.tags.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
        try{
        if(\App\Tag::where('name', '=', $request->name)->exists()){

          return redirect()->back()->withErrors(["errors" => "Record already exists in system!"]);

       }       
       
        $slug = Str::slug($request->name,'-');
        $categories = Tag::create([
            'name'=> $request->name,
            'slug' =>$slug,
			
        ]);
        //return redirect()->route('admin.tags.index');
        return redirect()->route('admin.tags.index')
                           ->with('success_message', 'Record successfully added.');
      } catch (Exception $exception) {

          return back()->withInput()
                       ->withErrors(['unexpected_error' => $exception->getMessage()]);
      }
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
       //dd($category);
        return view('admin.tags.edit', compact('tag'));
    }

    
    public function update(Request $request, Tag $tag)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
        
        try{
        if(\App\Tag::where('name', '=', $request->name)
        ->where('id','!=',$tag->id)->exists()){

          return redirect()->back()->withErrors(["errors" => "Record already exists in system!"]);

       } 
         $slug = Str::slug($request->name,'-');
         $form_data = array(
               'name'=> $request->name,
               'slug'=> $slug,
             );
        $tag->update($form_data);
      
        //return redirect()->route('admin.tags.index');
        return redirect()->route('admin.tags.index')
                           ->with('success_message', 'Record successfully added.');
      } catch (Exception $exception) {

          return back()->withInput()
                       ->withErrors(['unexpected_error' => $exception->getMessage()]);
      }
    }

    public function show(Tag $tag)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }

       

        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }

        $tag->delete();

        return redirect()->route('admin.tags.index');
    }
    public function rating_det($id)
    {   //return $id;
        $rating='App\Rating'::findOrFail($id);

        $rating->delete();

        return back();
    }
    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('tag_manage')) {
            return abort(401);
        }
        Tag::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
