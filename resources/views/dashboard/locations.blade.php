@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ Route::currentRouteName() }}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    
@stop

{{-- Page content --}}
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>
                Locations
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Location</a>
                </li>
                
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                    
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table id="datatable" class="table table-striped table-bordered table-hover" width="100%" border="0" cellspacing="0" cellpadding="0" summary="This is a list of the guests.">
                                    <thead>
                                      <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Pin</th>
                                        <th>Active </th>
                                        <th>Edit</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($locations as $location)
                                      <tr>
                                        <td>{{ $location->name }}</td>
                                        <td><a href="mailto:{{ $location->email }}">{{ $location->email }}</a></td>
                                        <td>{{ $location->phone }}</td>
                                        <td>{{ $location->pin }}</td>
                                        <td>{{ $location->active }}</td>
                                        <td><a href=#>Edit</a> | <a href="#">Delete</a></td>
                                      </tr>
                                       @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--end of row--}}
            @include('layouts.right_sidebar')
        </section>
@stop

