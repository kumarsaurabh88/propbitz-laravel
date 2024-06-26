@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Student {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Name
                        </th>
                         <th>Addmission</th> 
                        <th>Father Name</th>
                       <th>Mother Name</th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $key => $student)
                        <tr data-entry-id="{{ $student->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $student->first_name }} {{ $student->last_name }}
                            </td>
                            <td>{{$student->application_no}}</td>
                            <?php
                            $student_father='App\Student_Father'::where('student_id',$student->id)->first();
                             $student_mother='App\Student_Mother'::where('student_id',$student->id)->first();
                            ?>
                             <td>{{@$student_father->first_name}}  {{@$student_father->first_name}}</td>
                            <td>{{@$student_mother->first_name}} {{@$student_mother->last_name}}</td>
                            
                            <td>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.students.show', $student->id) }}">
                                 {{ trans('global.view') }}
                               </a>

                                <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)


  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 10,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection