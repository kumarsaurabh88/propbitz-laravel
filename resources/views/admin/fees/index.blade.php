@extends('layouts.admin')
@section('content')
@can('categories_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.fees.create") }}">
                {{ trans('global.add') }} Fees 
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Fees Rype {{ trans('global.list') }}
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
                         <th>Class</th> 
                        <th>Fees Type</th>
                       <th>Amount</th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fees as $key => $fees)
                        <tr data-entry-id="{{ $fees->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $fees->name }}
                            </td>
                             <td>{{$fees->sch_class->name}}</td>
                            <td>{{$fees->fees_type->name}}</td>
                            <td>{{$fees->amount}}</td>
                            <td>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.fees.edit', $fees->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.fees.destroy', $fees->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    pageLength: 100,
  });
  $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection