<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Testimonials;
use App\Team;
use App\Subcategory;
use App\Product;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('team_manage')) {
            return abort(401);
        }

        $team = 'App\Team'::all();

        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('team_manage')) {
            return abort(401);
        }
        
        


        return view('admin.team.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        if (! Gate::allows('team_manage')) {
            return abort(401);
        }
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
        $file->move('./public/uploads/team', $fileName1);    
    }
       
  
             $teams = 'App\Team'::create([
            'name'=> $request->name,
            'type'=> $request->type,
            'occupation'=> $request->occupation,
			'description'=> $request->description,
			'instagram'=> $request->instagram,
		    'twitter'=> $request->twitter,
		    'linkedin'=> $request->linkedin,
			'image' =>$fileName1,
		    
		
			
        ]);

       
        return redirect()->route('admin.team.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        if (! Gate::allows('team_manage')) {
            return abort(401);
        }
      //  dd($testimonial);
       
        return view('admin.team.edit', compact('team'));
    }
    
    
   
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        if (! Gate::allows('team_manage')) {
            return abort(401);
        }
         $form_data = array(
             'name'=> $request->name,
            'type'=> $request->type,
            'occupation'=> $request->occupation,
			'description'=> $request->description,
		    'instagram'=> $request->instagram,
		    'twitter'=> $request->twitter,
		    'linkedin'=> $request->linkedin,
		
			
        );
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/team', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        $team->update($form_data);
      
        return redirect()->route('admin.team.index');
    }




    public function show(Team $team)
    {
        if (! Gate::allows('team_manage')) {
            return abort(401);
        }

       

        return view('admin.team.show', compact('team'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if (! Gate::allows('team_manage')) {
            return abort(401);
        }

        $team->delete();

        return redirect()->route('admin.team.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('team_manage')) {
            return abort(401);
        }
        Team::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
