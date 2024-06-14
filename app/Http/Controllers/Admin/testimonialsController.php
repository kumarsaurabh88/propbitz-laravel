<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Testimonials;
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

class testimonialsController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('ambassador_manage')) {
        //     return abort(401);
        // }

        $testimonials = 'App\Testimonials'::all();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('ambassador_manage')) {
        //     return abort(401);
        // }
        
        


        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        // if (! Gate::allows('ambassador_manage')) {
        //     return abort(401);
        // }
         $validator = Validator::make($request->all(), [
    'image1' => 'dimensions:min_width=540,min_height=352',
           ]);
            if ($validator->fails()){
        return back()->withErrors("You Have to upload 540X352 size image")->withInput();
      }
         $fileName1=null;
         if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName1);    
    }
       
  
             $testimonialss = 'App\Testimonials'::create([
            'name'=> $request->name,
            'type'=> $request->type,
            'occupation'=> $request->occupation,
			'description'=> $request->description,
			'image' =>$fileName1,
		    
		
			
        ]);

       
        return redirect()->route('admin.testimonials.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonials $testimonial)
    {
        // if (! Gate::allows('ambassador_manage')) {
        //     return abort(401);
        // }
      //  dd($testimonial);
       
        return view('admin.testimonials.edit', compact('testimonial'));
    }
    
    
   
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubcategoriesRequest $request, Testimonials $testimonial)
    {
        // if (! Gate::allows('ambassador_manage')) {
        //     return abort(401);
        // }
         $form_data = array(
             'name'=> $request->name,
            'type'=> $request->type,
            'occupation'=> $request->occupation,
			'description'=> $request->description,
		
		
			
        );
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        $testimonial->update($form_data);
      
        return redirect()->route('admin.testimonials.index');
    }




    public function show(Testimonials $testimonials)
    {
        // if (! Gate::allows('ambassador_manage')) {
        //     return abort(401);
        // }

       

        return view('admin.testimonials.show', compact('testimonials'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonials $testimonial)
    {
        // if (! Gate::allows('ambassador_manage')) {
        //     return abort(401);
        // }

        $testimonial->delete();

        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('ambassador_manage')) {
        //     return abort(401);
        // }
        Product::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
