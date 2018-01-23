@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Events
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/datatables_custom.css')}}">
@stop

{{-- Page content --}}
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Event List</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index">
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{route('events')}}"> Event List</a>
            </li>
            <li>
                <a href="#"> {{$event->name}}</a>
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                
                    <div class="panel-body">
                        <strong>Event Name:</strong> {{$event->name}}<br>
                        <strong>Description:</strong> {{$event->description}}<br>
                        <hr>
                        <h6>Calendar Instances:</h6>
                        <hr>
                        <div class="calendar row">
                            @foreach($calendar as $cal)
                            <div class="instance col-md-6">
                                <p class="instance-name"><strong>Instance Title: </strong>{{$cal->title}}</p>
                                <p class="start"><strong>Start:</strong> {{$cal->start}}</p>
                                <p class="end"><strong>End:</strong> {{$cal->end}}</p>
                                <p class="end"><strong>Price:</strong> ${{$cal->price/100}}</p>
                                <div class="profile_status">
                                    <strong>Percent Full</strong>
                                    <small class="pull-right text-muted">
                                        40% Full
                                    </small>
                                    <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 40%">
                                                <span class="sr-only">
                                            40% Full (success)
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--end of row--}}
        @include('layouts.right_sidebar')
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- begining of page level js -->
<script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/datatables_custom.js')}}"></script>
<script>
    $('.calendar .instance .start').each(function(){
        var date = $(this).text();
        var formatted = moment(date).format("dddd, MMMM Do YYYY, h:mm:ss a");
        if( formatted.isValid() ){
            $(this).html('<strong>Start:</strong> '+formatted);
        }else{
            $(this).html('<span class="text-muted">-</span>');
        }
    });
    $('.calendar .instance .end').each(function(){
        var date = $(this).text();
        var formatted = moment(date).format("dddd, MMMM Do YYYY, h:mm:ss a");
        if( formatted.isValid() ){
            $(this).html('<strong>End:</strong> '+formatted);
        }else{
            $(this).html('<span class="text-muted">-</span>');
        }
    });
</script>
    <!-- end of page level js -->
@stop

