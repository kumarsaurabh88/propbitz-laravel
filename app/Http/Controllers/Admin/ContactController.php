<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoriesRequest;
use App\Http\Requests\Admin\UpdateCategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Display a listing of User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (! Gate::allows('contact_manage')) {
        //     return abort(401);
        // }

        $contact = Contact::all();

        return view('admin.contact.index', compact('contact'));
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
    public function destroy(Contact $contact)
    {
        // if (! Gate::allows('contact_manage')) {
        //     return abort(401);
        // }

        $contact->delete();

        return redirect()->route('admin.contact.index');
    }

    /**
     * Delete all selected User at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        // if (! Gate::allows('contact_manage')) {
        //     return abort(401);
        // }
        Contact::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }

}
