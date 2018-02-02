@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ Route::currentRouteName() }}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/dropify/css/dropify.css')}}">
@stop

{{-- Page content --}}
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Add Media</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li class="active">
                    Add Media
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <p><strong>Upload Media:</strong> AllowedFileExtensions (JPG, PNG and GIF )</p>
                    <input type="file" class="dropify" data-allowed-file-extensions="jpg png gif"/>
                </div>
            </div>
            {{--end of row--}}
            @include('layouts.right_sidebar')
        </section>
@stop

@section('footer_scripts')
<script type="text/javascript" src="{{asset('assets/vendors/dropify/js/dropify.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.dropify').dropify();
    });
</script>
@stop
