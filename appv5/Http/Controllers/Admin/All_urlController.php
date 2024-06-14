<?php

namespace App\Http\Controllers\Admin;
use App\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAll_urlRequest;
use App\Http\Requests\Admin\UpdateAll_urlRequest;

class All_urlController extends Controller
{
   public function index()
    {    
        
         if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
        $routes = Seo::all();
       
        return view('admin.seos.index',compact('routes'));
    }
    public function create()
    { 
        if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
        return view('admin.seos.create');
    }
    public function store(Request $request)
    { 
         if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
        $routes = Seo::create($request->all());
        
       return redirect('admin/seos');
    }
    public function edit($id)
    {
        if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
	
        $seo = Seo::findOrFail($id);

        return view('admin.seos.edit', compact('seo'));
    }

    /**
     * Update State in storage.
     *
     * @param  \App\Http\Requests\UpdateCountriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
        $amenitie = Seo::findOrFail($id);
      
        
        
        $amenitie->update($request->all());



        return redirect()->route('admin.seos.index');
    }


    /**
     * Display State.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
        //$customers = \App\Customer::where('State_id', $id)->get();

        $seo = Seo::findOrFail($id);

        return view('admin.seos.show', compact('seo'));
    }


    /**
     * Remove State from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
        $amenitie = Seo::findOrFail($id);
        $amenitie->delete();

        return redirect()->route('admin.seos.index');
    }

    /**
     * Delete all selected State at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
         if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
       
        Seo::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }


    /**
     * Restore State from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
         if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
        $state = Seo::onlyTrashed()->findOrFail($id);
        $state->restore();

        return redirect()->route('admin.seos.index');
    }

    /**
     * Permanently delete State from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('seo_manage')) {
            return abort(401);
        }
        $state = Seo::onlyTrashed()->findOrFail($id);
        $state->forceDelete();

        return redirect()->route('admin.seos.index');
    }
}

    

