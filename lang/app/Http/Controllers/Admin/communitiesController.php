<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Testimonials;
use App\Slider;
use App\Offer;
use App\Subcategory;
use App\Community;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;

class communitiesController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('ymc_manage')) {
            return abort(401);
        }

        $ymc_communities = 'App\Community'::all();

        return view('admin.ymc_communities.index', compact('ymc_communities'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('ymc_manage')) {
            return abort(401);
        }
        return view('admin.ymc_communities.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        if (! Gate::allows('ymc_manage')) {
            return abort(401);
        }
         
         $fileName1=null;
         
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName1);    
    }
       
  
             $community = 'App\Community'::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'link_url'=> $request->link_url,
            'image' =>$fileName1,
		    
		
			
        ]);

       
        return redirect()->route('admin.community.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
     
    public function edit(Community $community)
    {
             if (! Gate::allows('ymc_manage')) {
            return abort(401);
        }
        return view('admin.ymc_communities.edit', compact('community'));
    }
    
    
   
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Community $community)
    {
        if (! Gate::allows('ymc_manage')) {
            return abort(401);
        }

    
        
         $form_data = array(
             'title'=> $request->title,
             'description'=> $request->description,
             'link_url'=> $request->link_url,
            
			);
			 if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        $community->update($form_data);
      
        return redirect()->route('admin.community.index');
        
    }



  public function show(Community $community)
    {
        if (! Gate::allows('ymc_manage')) {
            return abort(401);
        }

       

        return view('admin.communities.show', compact('community'));
    }

   
    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Community $community)
    {
        if (! Gate::allows('ymc_manage')) {
            return abort(401);
        }

        $community->delete();

        return redirect()->route('admin.community.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('ymc_manage')) {
            return abort(401);
        }
        Communities::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}