<?php
namespace App\Http\Controllers\Admin;

use App\Sch_Class;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class SchClassController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('sch_class_manage')) {
            return abort(401);
        }

        $sch_class = 'App\Sch_Class'::all();

        return view('admin.sch_class.index', compact('sch_class'));
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
       return view('admin.sch_class.create');
    }

    public function store(request $request)
    {
        if (! Gate::allows('sch_class_manage')) {
            return abort(401);
        }
      
             $sch_class = Sch_Class::create([
                'name'=> $request->name,
                'slug'=> Str::slug($request->name,"-"),
               
        	]);

       
        return redirect()->route('admin.sch_class.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sch_Class $sch_class)
    {
        if (! Gate::allows('sch_class_manage')) {
            return abort(401);
        }
       
        return view('admin.sch_class.edit', compact('sch_class'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sch_Class $sch_class)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }
            $form_data = array(
            'name'=> $request->name,
            'slug'=> Str::slug($request->name,"-"),
            
		
        );
       $sch_class->update($form_data);
      
        return redirect()->route('admin.sch_class.index');
    }
    
    public function show(Sch_Class $sch_class)
    {
        if (! Gate::allows('sch_class_manage')) {
            return abort(401);
        }

      return view('admin.sch_class.show', compact('sch_class'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sch_Class $sch_class)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

        $sch_class->delete();

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
        Sch_Class::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
