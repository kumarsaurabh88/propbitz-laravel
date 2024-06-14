<?php
namespace App\Http\Controllers\Admin;

use App\Fees;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class FeesController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('fees_manage')) {
            return abort(401);
        }

        $fees = 'App\Fees'::all();

        return view('admin.fees.index', compact('fees'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
        $fees_type = 'App\Fees_Type'::get()->pluck('name', 'id');

        $sch_class = 'App\Sch_Class'::get()->pluck('name', 'id');

         return view('admin.fees.create', compact('fees_type','sch_class'));
    }

    public function store(request $request)
    {
        if (! Gate::allows('fees_manage')) {
            return abort(401);
        }
      
             $fees = Fees::create([
                'name'=> $request->name,
                'slug'=> Str::slug($request->name,"-"),
                'fees_type_id' => $request->fees_type_id, 
                'sch_class_id'=> $request->sch_class_id,
                'amount'=> $request->amount,
               
        	]);

       
        return redirect()->route('admin.fees.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('fees_manage')) {
            return abort(401);
        }
        //return $fees;
        $fees='App\Fees'::findOrFail($id);
       $fees_type = 'App\Fees_Type'::get()->pluck('name', 'id');

        $sch_class = 'App\Sch_Class'::get()->pluck('name', 'id');

        return view('admin.fees.edit', compact('fees','fees_type','sch_class'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
         $fees='App\Fees'::findOrFail($id);
            $form_data = array(
            'name'=> $request->name,
            'slug'=> Str::slug($request->name,"-"),
             'fees_type_id' => $request->fees_type_id, 
                'sch_class_id'=> $request->sch_class_id,
                'amount'=> $request->amount,
            
		
        );
       $fees->update($form_data);
      
        return redirect()->route('admin.fees.index');
    }
    
    public function show(Fees $fees)
    {
        if (! Gate::allows('fees_manage')) {
            return abort(401);
        }

      return view('admin.fees.show', compact('fees'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fees $fees)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        $fees->delete();

        return redirect()->route('admin.feestype.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
        Fees::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
