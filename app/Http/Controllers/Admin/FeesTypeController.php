<?php
namespace App\Http\Controllers\Admin;

use App\Fees_Type;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class FeesTypeController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('fees_type_manage')) {
        //     return abort(401);
        // }

        $fees_type = 'App\Fees_Type'::all();

        return view('admin.fees_type.index', compact('fees_type'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (! Gate::allows('subcategories_manage')) {
        //     return abort(401);
        // }
       return view('admin.fees_type.create');
    }

    public function store(request $request)
    {
        // if (! Gate::allows('fees_type_manage')) {
        //     return abort(401);
        // }
      
             $fees_type = Fees_Type::create([
                'name'=> $request->name,
                'slug'=> Str::slug($request->name,"-"),
               
        	]);

       
        return redirect()->route('admin.fees_type.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fees_Type $fees_type)
    {
        // if (! Gate::allows('fees_type_manage')) {
        //     return abort(401);
        // }
       
        return view('admin.fees_type.edit', compact('fees_type'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fees_Type $fees_type)
    {
        // if (! Gate::allows('subcategories_manage')) {
        //     return abort(401);
        // }
            $form_data = array(
            'name'=> $request->name,
            'slug'=> Str::slug($request->name,"-"),
            
		
        );
       $fees_type->update($form_data);
      
        return redirect()->route('admin.fees_type.index');
    }
    
    public function show(Fees_Type $fees_type)
    {
        // if (! Gate::allows('fees_type_manage')) {
        //     return abort(401);
        // }

      return view('admin.fees_type.show', compact('fees_type'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fees_Type $fees_type)
    {
        // if (! Gate::allows('subcategories_manage')) {
        //     return abort(401);
        // }

        $fees_type->delete();

        return redirect()->route('admin.feestype.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('subcategories_manage')) {
        //     return abort(401);
        // }
        Fees_Type::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
