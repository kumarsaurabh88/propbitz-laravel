@extends('layouts.app')

@section('content')
    <h3 class="page-title">City</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <td field-key='city_number'>{{ $city->name }}</td>
                        </tr>
                       
                       
                    </table>
                </div>
            </div><!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active"><a href="#bookings" aria-controls="bookings" role="tab"
                                                          data-toggle="tab">Bookings</a></li>
            </ul>

            <!-- Tab panes -->
           

            <p>&nbsp;</p>

            <a href="{{ route('admin.city.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
