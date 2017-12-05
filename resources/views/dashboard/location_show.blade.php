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

    <meta name="csrf-token" id="_token" data-token="{{ csrf_token() }}" >
    
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

@include('layouts/alerts/alerts')

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="user" class="table table-bordered table-striped m-t-10">
                            <tbody>
                            <tr>
                                <td class="table_simple">Location Name:</td>
                                <td class="table_superuser">

                                    <a 
                                    href="#" 
                                    id="name"
                                    name="name" 
                                    class="editable editable-click" 
                                    data-type="text" 
                                    data-url="{{route('location.update', ['id'=>$location->id])}}"
                                    data-pk="{{ $location->id }}"
                                    data-title="Name" 
                                    data-name="name">{{ $location->name }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table_simple">Address:</td>
                                <td class="table_superuser">
                                    <a href="#" 
                                        id="address" 
                                        data-type="text" 
                                        data-url="{{route('location.update', ['id'=>$location->id])}}"
                                        data-pk="{{ $location->id }}"
                                        data-title="Enter Location Address" 
                                        class="editable editable-click"
                                        data-title="Address"
                                        data-name="address">{{ $location->address }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table_simple">City:</td>
                                <td class="table_superuser">
                                    <a href="#" 
                                        id="city" 
                                        data-type="text" 
                                        data-url="{{route('location.update', ['id'=>$location->id])}}"
                                        data-pk="{{ $location->id }}"
                                        data-title="Enter Location Name" 
                                        class="editable editable-click"
                                        data-original-title="City" >{{ $location->city }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table_simple">State:</td>
                                <td class="table_superuser">
                                    <a href="#" 
                                        id="state" 
                                        data-type="typeaheadjs" 
                                        data-url="{{route('location.update', ['id'=>$location->id])}}"
                                        data-pk="{{ $location->id }}"
                                        data-placement="top" 
                                        data-title="Start typing State.."
                                        class="editable editable-click">{{ $location->state }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table_simple">Zip:</td>
                                <td class="table_superuser">
                                    <a href="#" 
                                        id="zip" 
                                        data-type="text" 
                                        data-url="{{route('location.update', ['id'=>$location->id])}}"
                                        data-pk="{{ $location->id }}"
                                        data-title="Enter Location Name"
                                        data-title="zip" 
                                        class="editable editable-click">{{ $location->zip }}</a>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--fourth table start-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-warning filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-fw fa-th-large"></i> Hours of Operation
                        </h3>
                    </div>
                </div>
            

                    <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_1" data-toggle="tab">
                                <span class="visible-xs visible-sm">Su</span>
                                <span class="visible-md visible-lg">Sunday</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab_2" data-toggle="tab">
                                <span class="visible-xs visible-sm">Mo</span>
                                <span class="visible-md visible-lg">Monday</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab_3" data-toggle="tab">
                                <span class="visible-xs visible-sm">Tu</span>
                                <span class="visible-md visible-lg">Tuesday</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab_4" data-toggle="tab">
                                <span class="visible-xs visible-sm">We</span>
                                <span class="visible-md visible-lg">Wednesday</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab_5" data-toggle="tab">
                                <span class="visible-xs visible-sm">Th</span>
                                <span class="visible-md visible-lg">Thursday</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab_6" data-toggle="tab">
                                <span class="visible-xs visible-sm">Fr</span>
                                <span class="visible-md visible-lg">Friday</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab_7" data-toggle="tab">
                                <span class="visible-xs visible-sm">Sa</span>
                                <span class="visible-md visible-lg">Saturday</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="slim1">
                        <div class="tab-pane active" id="tab_1">
                            <br>
                            
                            <div class="col-md-12">
                                <div>
                                    <label>
                                        <input type="checkbox" name="closed_sunday" id="closed_sunday" value="closed_sunday" > Closed
                                    </label>
                                </div>
                            </div>

                            <div class="row" id="sunday_times">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="sunday_from">Sunday From:</label>
                                    <div class="col-md-4 col-sm-4 col-xs-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="sunday_from" value="{{ $location->sunday_from }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="sunday_to">Sunday To:</label>
                                    <div class="col-md-4 col-sm-4 col-xs-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="sunday_to" value="{{ $location->sunday_to }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="sunday_notes">Sunday Notes</label>
                                  <div class="col-md-4">                     
                                    <textarea class="form-control" id="sunday_notes" name="sunday_notes"></textarea>
                                  </div>
                                </div>
                            </div>                    
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <br>
                            <div class="col-md-12">
                                <div>
                                    <label>
                                        <input type="checkbox" name="closed_monday" id="closed_monday" value="closed_monday" > Closed
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="monday_from">Monday From:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="monday_from" value="{{ $location->monday_from }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="monday_to">Monday To:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="monday_to" value="{{ $location->monday_to }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="monday_notes">Monday Notes</label>
                                  <div class="col-md-4">                     
                                    <textarea class="form-control" id="monday_notes" name="monday_notes"></textarea>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                            <br>
                            <div class="col-md-12">
                                <div>
                                    <label>
                                        <input type="checkbox" name="closed_tuesday" id="closed_tuesday" value="closed_tuesday" > Closed
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="tuesday_from">Tuesday From:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="tuesday_from" value="{{ $location->tuesday_from }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="tuesday_to">Tuesday To:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="tuesday_to" value="{{ $location->tuesday_to }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="tuesday_notes">Tuesday Notes</label>
                                  <div class="col-md-4">                     
                                    <textarea class="form-control" id="tuesday_notes" name="tuesday_notes"></textarea>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_4">
                            <br>
                            <div class="col-md-12">
                                <div>
                                    <label>
                                        <input type="checkbox" name="closed_wednesday" id="closed_wednesday" value="closed_wednesday" > Closed
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="wednesday_from">Wednesday From:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="wednesday_from" value="{{ $location->wednesday_from }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="wednesday_to">Wednesday To:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="wednesday_to" value="{{ $location->wednesday_to }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="wednesday_notes">Wednesday Notes</label>
                                  <div class="col-md-4">                     
                                    <textarea class="form-control" id="wednesday_notes" name="wednesday_notes"></textarea>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_5">
                            <br>
                            <div class="col-md-12">
                                <div>
                                    <label>
                                        <input type="checkbox" name="closed_thursday" id="closed_thursday" value="closed_thursday" > Closed
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="thursday_from">Thursday From:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="thursday_from" value="{{ $location->thursday_from }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="thursday_to">Thursday To:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="thursday_to" value="{{ $location->thursday_to }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="thursday_notes">Thursday Notes</label>
                                  <div class="col-md-4">                     
                                    <textarea class="form-control" id="thursday_notes" name="thursday_notes"></textarea>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_6">
                            <br>
                            <div class="col-md-12">
                                <div>
                                    <label>
                                        <input type="checkbox" name="closed_friday" id="closed_friday" value="closed_friday" > Closed
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="friday_from">Friday From:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="friday_from" value="{{ $location->friday_from }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="friday_to">Friday To:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="friday_to" value="{{ $location->friday_to }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="friday_notes">Friday Notes</label>
                                  <div class="col-md-4">                     
                                    <textarea class="form-control" id="friday_notes" name="friday_notes"></textarea>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_7">
                            <br>
                            <div class="col-md-12">
                                <div>
                                    <label>
                                        <input type="checkbox" name="closed_saturday" id="closed_saturday" value="closed_saturday" > Closed
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="saturday_from">Saturday From:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="saturday_from" value="{{ $location->saturday_from }}" />
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="saturday_to">Saturday To:</label>
                                    <div class="col-md-4 input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-fw fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control timeselect" placeholder="HH-MM" name="saturday_to" value="{{ $location->saturday_to }}"/>
                                    </div>
                                    <!-- /.input group -->
                                </div>

                                <div class="form-group">
                                  <label class="col-md-4 col-sm-4 col-xs-4 control-label" for="saturday_notes">Saturday Notes</label>
                                  <div class="col-md-4">                     
                                    <textarea class="form-control" id="saturday_notes" name="saturday_notes"></textarea>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- nav-tabs-custom -->

<?php /*
                    <div class="panel-body">
                        <table>
                            <thead>
                            <tr>
                                <th data-field="Sunday" data-sortable="true">
                                    <span class="visible-xs visible-sm">Sun</span>
                                    <span class="visible-md visible-lg">Sunday</span>
                                </th>
                                <th data-field="Monday" data-sortable="true">
                                    <span class="visible-xs visible-sm">Mon</span>
                                    <span class="visible-md visible-lg">Monday</span>
                                </th>
                                <th data-field="Tuesday" data-sortable="true">
                                    <span class="visible-xs visible-sm">Tue</span>
                                    <span class="visible-md visible-lg">Tuesday</span>
                                </th>
                                <th data-field="Wednesday" data-sortable="true">
                                    <span class="visible-xs visible-sm">Wed</span>
                                    <span class="visible-md visible-lg">Wednesday</span>
                                </th>
                                <th data-field="Thursday" data-sortable="true">
                                    <span class="visible-xs visible-sm">Thu</span>
                                    <span class="visible-md visible-lg">Thursday</span>
                                </th>
                                <th data-field="Friday" data-sortable="true">
                                    <span class="visible-xs visible-sm">Fri</span>
                                    <span class="visible-md visible-lg">Friday</span>
                                </th>
                                <th data-field="Saturday" data-sortable="true">
                                    <span class="visible-xs visible-sm">Sat</span>
                                    <span class="visible-md visible-lg">Saturday</span>
                                </th>
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
                            
                            
                            </tbody>
                        </table>
                    </div> */ ?>
            </div> 
        </div>
        <!--fourth table end-->




                    
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

<script type="text/javascript"  src="{{asset('assets/js/custom_js/location.js')}}"></script>

<!-- end of page level js -->

<!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/editable-table/js/mindmup-editabletable.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/bootstrap-table/js/bootstrap-table.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/tableExport/tableExport.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/bootstrap_tables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/demo.js')}}"></script>
<!-- end of page level js -->

<script  type="text/javascript" src="{{asset('assets/vendors/timedropper/js/timedropper.js')}}" ></script>
<!--<script  type="text/javascript" src="{{asset('assets/js/custom_js/datepickers.js')}}" ></script>-->
<script type="text/javascript">
    $(document).ready(function() {
        $(".timeselect").timeDropper({
            primaryColor: "#48CFAD",
            borderColor: "#48CFAD",
            textColor: "#48CFAD",
            meridians: true,
            format: "hh:mm A",
            setCurrentTime: false
        });

/*
        $('#closed_sunday').on('check', function(event){
            if( $('#closed_sunday').is(':checked') ){
                console.log('check');
            }else{
                console.log('notchecked');
            }
        });
*/

        if ( $('#closed_sunday').is(':checked') ) {
            $('#sunday_times').hide();
        }else{
            $('#sunday_times').show();
        }

        

        $(".content").find('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>

    @stop
