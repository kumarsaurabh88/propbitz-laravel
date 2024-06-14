<?php
namespace App\Http\Controllers\Admin;


use App\Patner;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;

class PatnerController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('patner_manage')) {
        //     return abort(401);
        // }

        $patner= 'App\Patner'::all();

        return view('admin.patner.index', compact('patner'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('patner_manage')) {
        //     return abort(401);
        // }
        
        


        return view('admin.patner.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if (! Gate::allows('patner_manage')) {
        //     return abort(401);
        // }
        
        $fileName1=null;
        if (request()->hasFile('image')) {
        
        
            foreach ($request->image as $image)
            
    {
         $file = $image;
        // dd($file);
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/patner', $fileName1);   
        $patner = 'App\Patner'::create([
            'title'=> $request->title,
            'type'=> $request->type,
            'image' =>$fileName1,
             ]);
    }
       
        }
			
       

       
        return redirect()->route('admin.patner.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Patner $patner)
    {
        // if (! Gate::allows('patner_manage')) {
        //     return abort(401);
        // }
      //  dd($testimonial);
       
        return view('admin.patner.edit', compact('patner'));
    }
    
    
   
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patner $patner)
    {
        // if (! Gate::allows('patner_manage')) {
        //     return abort(401);
        // }

      /*  $slider->update($request->all());*/
        
         $form_data = array(
             'type'=> $request->type,
             'title'=> $request->title,
            
			);
			 if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/patner/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        $patner->update($form_data);
      
        return redirect()->route('admin.patner.index');
        
    }




    public function show(Patner $patner)
    {
        // if (! Gate::allows('patner_manage')) {
        //     return abort(401);
        // }

       

        return view('admin.patner.show', compact('patner'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patner $patner)
    {
        // if (! Gate::allows('patner_manage')) {
        //     return abort(401);
        // }

        $patner->delete();

        return redirect()->route('admin.patner.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('patner_manage')) {
        //     return abort(401);
        // }
        Patner::whereIn('id', request('ids'))->delete();
        

        return response()->noContent();
    }

}
