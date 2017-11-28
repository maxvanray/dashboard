@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ Route::currentRouteName() }}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatable.css')}}">
    <!--end of page level css-->
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
                    <a href="{{ @route('location.index') }}"> Location</a>
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
                                        <th>Location Name</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Contact</th>
                                        <th>Hours</th>
                                        <th>Active </th>
                                        <th>Edit</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($locations as $location)
                                      <tr>
                                        <td class="locationName">{{ $location->name }}</td>
                                        <td class="locationAddress">{{ $location->address }}</td>
                                        <td class="locationDescription">{{ $location->description }}</td>
                                        <td class="locationContact" 
                                            data-locationcontact="{{ $location->contact }}"
                                            data-locationemail="{{ $location->contact_email }}"
                                            >{{ $location->contact }} <<a href="mailto:{{ $location->contact_email }}">{{ $location->contact_email }}</a>></td>
                                        <td></td>                                        
                                        <td class="locationActive">{{ $location->active }}</td>
                                        <td class="locationEdit" data-location="{{ $location->id }}">
                                            <?php /* <a href='/dashboard/location/{{ $location->id }}'> */ ?>
                                                <button 
                                                    class="btn btn-primary btn-xs locationEditBtn"
                                                    data-location="{{ $location->id }}" 
                                                    data-toggle="modal"
                                                    data-target="#edit" 
                                                    data-placement="top">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                </button>
                                            <?php /* </a> */ ?>
                                            | 
                                            <?php /* <a href="#"> */ ?>
                                                <button 
                                                    class="btn btn-danger btn-xs locationDeleteBtn" 
                                                    data-location="{{ $location->id }}"
                                                    data-toggle="modal"
                                                    data-target="#delete" 
                                                    data-placement="top">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                </button>
                                            <?php /* </a> */ ?>

                                            


                                        </td>
                                      </tr>
                                       @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- .modal-dialog -->
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Details</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input class="form-control name" type="text" placeholder="Location Name">
                            </div>
                            <div class="form-group">
                                <input class="form-control address" type="text" placeholder="Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control description" rows="5" id="description" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <input class="form-control contact" type="text" placeholder="Contact">
                            </div>
                            <div class="form-group">
                                <input class="form-control hours" type="text" placeholder="Hours">
                            </div>
                            <div class="form-group">
                                <input class="form-control active" type="text" placeholder="Active">
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-success" data-dismiss="modal">
                                <span class="glyphicon glyphicon-ok-sign"></span> Update
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true" data-location="0">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title custom_align" id="Heading5">Delete this entry</h4>
                        </div>
                        <div class="modal-body">
                            <div id="confirm" class="alert alert-info" data-location="0" >
                                <span class="glyphicon glyphicon-info-sign"></span>&nbsp;  this record ?
                            </div>
                        </div>
                        <div class="modal-footer ">
                            {!! Form::open([
                                'method' => 'DELETE', 
                                'id' => 'formDeleteLocation', 
                                'data-location' => '0',
                                'data-dismiss' => 'modal',
                                'action' => ['Dashboard\LocationController@destroy', 
                                $location->id]]) !!}
                                {!! Form::button( '
                                        <span class="glyphicon glyphicon-ok-sign confirm"></span> Yes', 
                                    [ 'type' => 'submit', 
                                    'class' => 'btn btn-danger delete deleteProduct',
                                    'id' => 'btnDeleteProduct', 
                                    'data-id' => $location->id 
                                ] ) !!}
                            {!! Form::close() !!}
                            
                            <button type="button" class="btn btn-success" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> No
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>

            </div>
        </section>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

{{--end of row--}}
@include('layouts.right_sidebar')
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom_js/simple-table.js')}}"></script>
    <script type="text/javascript">
        // EDIT LOCATION
        $('.locationEditBtn').on('click', function(event){
            var locationName = $(this).parent().parent().find('.locationName').text();
            var locationAddress = $(this).parent().parent().find('.locationAddress').text();
            var locationDescription = $(this).parent().parent().find('.locationDescription').text();
            var locationContact = $(this).parent().parent().find('.locationContact').data('locationcontact');
            var locationEmail = $(this).parent().parent().find('.locationContact').data('locationemail');
            var locationActive = $(this).parent().parent().find('.locationAddress').text();

            $('#edit .name').val(locationName);
            $('#edit .address').val(locationAddress);
            $('#edit .description').text(locationDescription);
            $('#edit .contact').val(locationContact);
            $('#edit .email').val(locationEmail);
            $('#edit .active').val(locationActive);
        });

        // DELETE LOCATION
        $('.locationDeleteBtn').on('click', function(event){
            var locationName = $(this).parent().parent().find('.locationName').text();
            var locationId = $(this).data('location');
            var warning = 'Are you sure you want to delete '+locationName+'?';
            $('#formDeleteLocation').data('location', locationId);
            $('#confirm').text(warning);

        });

        $('.deleteProduct').on('click', function(e) {

            var locationId = $('#formDeleteLocation').data('location');
            var inputData = $('#formDeleteLocation').serialize();

            console.log('locationId: '+locationId);

            $.ajax({
                url: '{{ url('dashboard/location') }}' + '/' + locationId,
                type: 'DELETE',
                data: inputData,
                success: function( msg ) {
                    if ( msg.status === 'success' ) {
                        console.log( msg.msg );
                        location.reload();
                        setInterval(function() {
                            location.reload();
                        }, 5900);
                    }
                },
                error: function( data ) {
                    if ( data.status === 422 ) {
                        console.log('Cannot delete the category');
                    }
                }
            });

            return false;
        });

        //
        // $('#delete .confirm').on('click', function(){
        //     //var locationId = 
        //     //console.log();
        // });
        
    </script>
@stop

