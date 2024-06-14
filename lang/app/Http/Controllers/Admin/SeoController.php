<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Seo;
use App\Blog;
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
class SeoController extends Controller
{
    
   public function index()
    { 
        $routes = Seo::all();
        
        return view('admin.seos.index',compact('routes'));
    }
    public function create()
    { 
        //$routes = Seo::all();
        
        return view('admin.seos.create');
    }
    public function store(Request $request)
    { 
        $routes = Seo::create($request->all());
        
       return redirect('admin/seos');
    }
    public function edit($id)
    {
       
		
        $seo = Seo::findOrFail($id);

        return view('admin.seos.edit', compact('seo'));
    }

    /**
     * Update State in storage.
     *
     * @param  \App\Http\Requests\UpdateCountriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
     
    
    public function update(Request $request, $id)
    {
        //dd($id);
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
        if (! Gate::allows('amenitie_view')) {
            return abort(401);
        }
        //$customers = \App\Customer::where('State_id', $id)->get();

        $amenitie = Seo::findOrFail($id);

        return view('admin.amenities.show', compact('amenitie'));
    }


    /**
     * Remove State from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
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
       
        if ($request->input('ids')) {
            $entries = Seo::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore State from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('amenitie_delete')) {
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
        if (! Gate::allows('amenitie_delete')) {
            return abort(401);
        }
        $state = Seo::onlyTrashed()->findOrFail($id);
        $state->forceDelete();

        return redirect()->route('admin.seos.index');
    }
}
