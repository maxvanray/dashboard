@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ Route::currentRouteName() }}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/daterangepicker/css/daterangepicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datedropper/datedropper.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/timedropper/css/timedropper.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/jquerydaterangepicker/css/daterangepicker.min.css')}}">
    <!--clock face css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/clockpicker/css/bootstrap-clockpicker.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.css')}}"> -->
    <!--end of page level css-->

    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/iCheck/css/all.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bootstrap-fileinput/css/fileinput.min.css')}}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/formelements.css')}}">
    <!--end of page level css-->

    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/alertmessage.css')}}">
    <!--end of page level css-->

    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/x-editable/css/bootstrap-editable.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/x-editable/css/typeahead.js-bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/iCheck/css/all.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/inlinedit.css')}}"/>


    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/bootstrap-table/css/bootstrap-table.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/bootstrap_tables.css')}}">
    
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            Update Location
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index">
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ @route('location.index') }}"> Location</a>
            </li>
            <li class="active">
                Update Location
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                
                    
                    <table id="user" class="table table-bordered table-striped m-t-10">
                        <tbody>
                        <tr>
                            <td class="table_simple">Location Name:</td>
                            <td class="table_superuser">
                                <a href="#" id="name" data-type="text" data-pk="1"
                                   data-title="Enter Location Name" class="editable editable-click"
                                   data-original-title="" title="">{{ $location->name }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_simple">Address:</td>
                            <td class="table_superuser">
                                <a href="#" id="address" data-type="text" data-pk="1"
                                   data-title="Enter Location Address" class="editable editable-click"
                                   data-original-title="" title="">{{ $location->address }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_simple">City:</td>
                            <td class="table_superuser">
                                <a href="#" id="city" data-type="text" data-pk="1"
                                   data-title="Enter Location Name" class="editable editable-click"
                                   data-original-title="" title="">{{ $location->city }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_simple">State:</td>
                            <td class="table_superuser">
                                <a href="#" id="state" data-type="typeaheadjs" data-pk="1"
                                   data-placement="top" data-title="Start typing State.."
                                   class="editable editable-click">{{ $location->state }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="table_simple">Zip:</td>
                            <td class="table_superuser">
                                <a href="#" id="zip" data-type="text" data-pk="1"
                                   data-title="Enter Location Name" class="editable editable-click"
                                   data-original-title="" title="">{{ $location->zip }}</a>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <!--fourth table start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-success filterable">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="fa fa-fw fa-th-large"></i> Schedule
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <table id="table4" data-toolbar="#toolbar" data-search="true" data-show-refresh="false"
                                           data-show-toggle="true" data-show-columns="true" data-show-export="true"
                                           data-detail-view="true" data-detail-formatter="detailFormatter"
                                           data-minimum-count-columns="2" data-show-pagination-switch="true"
                                           data-pagination="true" data-id-field="id" data-page-list="[10, 20,40,ALL]"
                                           data-show-footer="false" data-height="503">

                                        <thead>
                                        <tr>
                                            <th data-field="Sunday" data-sortable="true">Sunday</th>
                                            <th data-field="Monday" data-sortable="true">Monday</th>
                                            <th data-field="Tuesday" data-sortable="true">Tuesday</th>
                                            <th data-field="Wednesday" data-sortable="true">Wednesday</th>
                                            <th data-field="Thursday" data-sortable="true">Thursday</th>
                                            <th data-field="Friday" data-sortable="true">Friday</th>
                                            <th data-field="Saturday" data-sortable="true">Saturday</th>
                                            
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                       
                                        <tr>
                                            <td>
                                                {{ $location->sunday_from }} 
                                                <br>to<br>
                                                {{ $location->sunday_from }} 
                                            </td>

                                            <td>{{ $location->monday_from }} 
                                                <br>to<br>
                                                {{ $location->monday_from }} 
                                            </td>

                                            <td>{{ $location->tuesday_from }} 
                                                <br>to<br>
                                                {{ $location->tuesday_to }} 
                                            </td>
                                            
                                            <td>{{ $location->wednesday_from }} 
                                                <br>to<br>
                                                {{ $location->wednesday_to }} 
                                            </td>

                                            <td>{{ $location->thursday_from }} 
                                                <br>to<br>
                                                {{ $location->thursday_to }}
                                            </td>

                                            <td>{{ $location->friday_from }} 
                                                <br>to<br>
                                                {{ $location->friday_to }}
                                            </td>
                                            
                                            <td>{{ $location->saturday_from }} 
                                                <br>to<br>
                                                {{ $location->saturday_to }}
                                            </td>
                                            
                                        </tr>
                                        
                                        <tr>
                                            <td>Sunday</td>
                                            <td>Monday</td>
                                            <td>Tuesday</td>
                                            <td>Wednesday</td>
                                            <td>Thursday</td>
                                            <td>Friday</td>
                                            <td>Saturday</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--fourth table end-->

                    
                    
                
            </div>
        </div>
        {{--end of row--}}
        @include('layouts.right_sidebar')
    </section>
@stop

{{-- page level scripts --}}
    @section('footer_scripts')
<!-- begining of page level js -->
<script type="text/javascript"  src="{{asset('assets/vendors/jquery-mockjax/js/jquery.mockjax.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/vendors/x-editable/js/bootstrap-editable.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/vendors/x-editable/js/typeahead.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/vendors/x-editable/js/typeaheadjs.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/vendors/x-editable/js/address.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/vendors/iCheck/js/icheck.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/js/demo-mock.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/js/demo.js')}}"></script>
<script type="text/javascript"  src="{{asset('assets/js/custom_js/x-editable.js')}}"></script>
<!-- end of page level js -->

<!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/editable-table/js/mindmup-editabletable.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrap-table/js/bootstrap-table.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/tableExport/tableExport.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/bootstrap_tables.js')}}"></script>
<!-- end of page level js -->

    @stop
