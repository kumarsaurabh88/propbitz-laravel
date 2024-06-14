@extends('layouts.admin')
@section('content')
@can('categories_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.news.create") }}">
                {{ trans('global.add') }} News & PR
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        News & PR {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Type
                        </th>
                           <th>
                           category
                           </th>
                           <th>
                           Author
                           </th>
                         <th>
                          url
                           </th>
                       <th>
                          Post
                           </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($case_study as $key => $case_study)
                        <tr data-entry-id="{{ $case_study->id }}">
                            <td>

                            </td>
                            <td>
                               {{ $case_study->title }}
                            </td>
                               <td>
                               {{ $case_study->type }}
                            </td>
                             <td>
                               {{ $case_study->category->name }}
                            </td>
                            
                             <td>
                               {{ $case_study->author->name }}
                            </td>
                            <td>
                                @if($case_study->type=='news')
                                <a href="{{url('/news')}}/{{ $case_study->slug }}" target="_blank">{{url('/news')}}/{{ $case_study->slug }}</a>
                            @elseif($case_study->type=='press-releases')
                            <a href="{{url('/press-releases')}}/{{ $case_study->slug }}" target="_blank">{{url('/press-releases')}}/{{ $case_study->slug }}</a>
                            
                            @else($case_study->type=='press-coverage')
                             <a href="{{url('/press-coverage')}}/{{ $case_study->slug }}" target="_blank">{{url('/press-coverage')}}/{{ $case_study->slug }}</a>
                            
                            @endif
                            </td>
                            <td>
                                {{ date("F d, Y", strtotime($case_study->created_at))}}
                            </td>
                            <td>
                                <a class="btn btn-xs btn-info" href="{{ route('admin.news.edit', $case_study->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.news.destroy', $case_study->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "news_mass_destroy",
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