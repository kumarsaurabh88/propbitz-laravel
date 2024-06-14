<?php
namespace App\Http\Controllers\Admin;

use App\Category;
use App\Brand;
use App\Event;
use App\Tag;
use App\Subcategory;
use App\Author;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('event_manage')) {
            return abort(401);
        }

        $events = 'App\Event'::all();

        return view('admin.event.index', compact('events'));
    }
    public function create()
    {
         if (! Gate::allows('event_manage')) {
            return abort(401);
        }
      
       return view('admin.event.create');
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        if (! Gate::allows('event_manage')) {
            return abort(401);
        }
      
         $fileName1=null;
         $fileName2=null;
        
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/event/', $fileName1);    
        }
        if (request()->hasFile('image1')) {
            $file = request()->file('image1');
            $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./public/uploads/event/', $fileName2);    
        }
    
             $events = Event::create([
                
                'title'=> $request->title,
              'date'=> $request->date,
                'slug'=> Str::slug($request->title,"-"),
               'description'=> $request->description,
    		    'image' =>$fileName1,
    			'image1' =>$fileName2,
        	]);

       
        return redirect()->route('admin.event.index');
    }


    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //dd($event);
       if (! Gate::allows('event_manage')) {
            return abort(401);
        }
       
        
        return view('admin.event.edit', compact('event'));
    }
    
    
   

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        
         if (! Gate::allows('event_manage')) {
            return abort(401);
        }

       /* $event->update($request->all());*/
        
           $form_data = array(
            'title'=> $request->title,
              'date'=> $request->date,
                'slug'=> Str::slug($request->title,"-"),
               'description'=> $request->description,
		
        );
        
      
       
        
        if (request()->hasFile('image')) {
        $file = request()->file('image');
        $fileName1 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/event/', $fileName1);
        $form_data['image'] = "$fileName1";
        }
        
        if (request()->hasFile('image1')) {
        $file = request()->file('image1');
        $fileName2 = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
        $file->move('./public/uploads/event/', $fileName2);
        $form_data['image1'] = "$fileName2";
        }
        
        $event->update($form_data);
      
        return redirect()->route('admin.event.index');
    }
    
    
    
    
    
    
    
    

    public function show(Event $event)
    {
         if (! Gate::allows('event_manage')) {
            return abort(401);
        }

       

        return view('admin.event.show', compact('event'));
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        if (! Gate::allows('event_manage')) {
            return abort(401);
        }

        $event->delete();

        return redirect()->route('admin.event.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('event_manage')) {
            return abort(401);
        }
        Event::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
