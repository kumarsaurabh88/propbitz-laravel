@extends('layouts.admin')
@section('content')
{{-- @can('seo_manage') --}}
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.blog.create") }}">
             {{ trans('global.add') }} Blog
                {{-- {{-- Add Blog --}}
            </a>
        </div>
    </div> 

{{-- @endcan --}}
<div class="card">
    <div class="card-header">
        Products {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            Blog Title
                        </th>
                          <th>
                            Author
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Url
                        </th>
                        
                       
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $key => $blog)
                        <tr data-entry-id="{{ $blog->id }}">
                            <td>

                            </td>
                            <td>
                               {{ @$blog->title }}
                            </td>
                             <td>
                               {{ @$blog->author->name }}
                            </td>
                            <td>
                                <?php $date = $blog->created_at->format('y-m-d');
                                                  //  $dates= date('d m ,Y', strtotime($date)); 
                                                ?>
                                                {{$date}}
                            </td>
                            <td><a href="{{url('/blog')}}/{{ $blog->slug }}" target="_blank">{{url('/blog')}}/{{ $blog->slug }}</a>
                            
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.blog.edit', $blog->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "blog_mass_destroy",
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