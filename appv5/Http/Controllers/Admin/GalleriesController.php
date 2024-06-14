<?php
namespace App\Http\Controllers\Admin;


use App\Gallery;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;

class GalleriesController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('gallery-manage')) {
            return abort(401);
        }

        $gallery = 'App\Gallery'::all();

        return view('admin.galleries.index', compact('gallery'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('gallery-manage')) {
            return abort(401);
        }
        
        


        return view('admin.galleries.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! Gate::allows('gallery-manage')) {
            return abort(401);
        }
        
        $fileName1=null;
        if (request()->hasFile('image')) {
        
        
            foreach ($request->image as $image)
            
    {
         $file = $image;
        // dd($file);
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/gallery', $fileName1);   
        $gallery = 'App\Gallery'::create([
            'name'=> $request->name,
            'title'=> $request->title,
            'image' =>$fileName1,
             ]);
    }
       
        }
			
       

       
        return redirect()->route('admin.galleries.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        if (! Gate::allows('gallery-manage')) {
            return abort(401);
        }
      //  dd($testimonial);
       
        return view('admin.galleries.edit', compact('gallery'));
    }
    
    
   
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        if (! Gate::allows('gallery-manage')) {
            return abort(401);
        }

      /*  $slider->update($request->all());*/
        
         $form_data = array(
             'name'=> $request->name,
             'title'=> $request->title,
            
			);
			 if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/gallery/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        $gallery->update($form_data);
      
        return redirect()->route('admin.galleries.index');
        
    }




    public function show(Gallery $gallery)
    {
        if (! Gate::allows('gallery-manage')) {
            return abort(401);
        }

       

        return view('admin.galleries.show', compact('gallery'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if (! Gate::allows('gallery-manage')) {
            return abort(401);
        }

        $gallery->delete();

        return redirect()->route('admin.galleries.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('gallery-manage')) {
            return abort(401);
        }
        Gallery::whereIn('id', request('ids'))->delete();
        

        return response()->noContent();
    }

}
