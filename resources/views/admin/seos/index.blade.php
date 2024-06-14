@inject('request', 'Illuminate\Http\Request')
@extends('layouts.admin')

@section('content')
    <h3 class="page-title">Seo</h3>
    
    <p>
        <a href="{{ route('admin.seos.create') }}" class="btn btn-success">Add Seo</a>
        
    </p>
   

   
   
   

    <div class="card">
    <div class="card-header">
        Seos {{ trans('global.list') }}
    </div>

       <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User"><thead>
                    <tr>
                       
                           <th width="10">

                        </th>
                        <th>Url</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Keywords</th>
                        
                      
                       <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($routes) > 0)
                        @foreach ($routes as $routes)
                            <tr data-entry-id="{{ $routes->id }}">
                               
                                   <td></td>
                                
                                <td field-key='city_number'>{{ $routes->url }}</td>
                                <td field-key='city_number'>{{ $routes->meta_title }}</td>
                                <td field-key='city_number'>{{ $routes->description }}</td>
                                <td field-key='city_number'>{{ $routes->keywords }}</td>
                                
                                   <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.seos.show', $routes->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.seos.edit', $routes->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.seos.destroy', $routes->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td> 
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
@parent 
    <script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('users_manage')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.seos.mass_destroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

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