<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\General_form;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoriesRequest;
use App\Http\Requests\Admin\UpdateCategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class GeneralController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('ganeral-enquiry')) {
        //     return abort(401);
        // }

        $general_form = General_form::all();

        return view('admin.general_form.index', compact('general_form'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(General_form $enquiry)
    {
        // if (! Gate::allows('ganeral-enquiry')) {
        //     return abort(401);
        // }

        $enquiry->delete();
        
       // dd($general_form);

        return redirect()->route('admin.enquiry.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('ganeral-enquiry')) {
        //     return abort(401);
        // }
        General_form::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
