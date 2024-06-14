@extends('layouts.admin')
@section('content')
@can('categories_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
           
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        General Enquiry {{ trans('global.list') }}
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
                        <th>
                        Email
                        </th>
                        <th>
                        Contact
                        </th>
                         <th>
                        Gender
                        </th>
                        <th>
                        occupation
                        </th>
                        <th>
                        associated
                        </th>
                        <th>
                        Message
                        </th>
                         <th>
                         Source Url
                        </th>
                     
                        <th>
                        Date
                        </th>
                          
                        
                       
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($general_form as $key => $contact)
                        <tr data-entry-id="{{ $contact->id }}">
                            <td>

                            </td>
                           
                            <td>
                                {{ $contact->name }}
                            </td>
                             
                             <td>
                                {{ $contact->email }}
                            </td>
                             <td>
                                {{ $contact->mobile }}
                            </td>
                            <td>
                                {{ $contact->gender }}
                            </td>
                            
                            <td>
                                {{ $contact->occupation }}
                            </td>
                            <td>
                                {{ $contact->associated }}
                            </td>
                            <td>
                                {{ $contact->msg }}
                            </td>
                            
                            <td>
                                {{ $contact->source_url }}
                            </td>
                           
                            
                            <?php

                              $date = $contact->created_at->format('y-m-d');

                               $dates= date('d, F ,Y', strtotime($date)); 

                                ?>
                            <td>
                                {{ $dates }}
                            </td>
                            
                            <td>
                               

                                <form action="{{ route('admin.enquiry.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "enquiry_mass_destroy",
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