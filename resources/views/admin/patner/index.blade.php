@extends('layouts.admin')
@section('content')
@can('categories_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.patner.create") }}">
                {{ trans('global.add') }} Patner
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        patner {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                         <th>
                        title
                         </th>
                        <th>
                        Patner Type
                        </th>
                        <th>
                          Image
                        </th>
                         
                        
                       
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patner as $key => $patner)
                        <tr data-entry-id="{{ $patner->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $patner->title }}
                            </td>
                            <td>
                                {{ $patner->type }}
                            </td>
                            <td>
                                <img src="{{ URL::to('/') }}/public/uploads/patner/{{ $patner->image }}" class="img-thumbnail"  width="100" />
                                
                            </td>
                            
                            
                            <td>
                                <!--<a class="btn btn-xs btn-primary" href="{{ route('admin.patner.show', $patner->id) }}">
                                    {{ trans('global.view') }}
                                </a>-->

                                <a class="btn btn-xs btn-info" href="{{ route('admin.patner.edit', $patner->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.patner.destroy', $patner->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('users_manage')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "patner_mass_destroy",
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