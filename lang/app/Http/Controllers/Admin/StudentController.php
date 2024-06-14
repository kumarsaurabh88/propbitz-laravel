<?php
namespace App\Http\Controllers\Admin;

use App\Student;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSubcategoriesRequest;
use App\Http\Requests\Admin\UpdateSubcategoriesRequest;
use Validator;
use Illuminate\Support\Str;

class StudentController extends Controller
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

        $student = 'App\Student'::all();
        //return $student;
        return view('admin.students.index', compact('student'));
    }
      public function destroy(Student $student)
    {
        if (! Gate::allows('fees_manage')) {
            return abort(401);
        }

        $student->delete();

        return redirect()->route('admin.students.index');
    }
    public function show(Student $student)
    {
        if (! Gate::allows('subcategories_manage')) {
            return abort(401);
        }

       

        return view('admin.students.show', compact('student'));
    }

}
