@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Guests
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom_css/datatables_custom.css')}}">
    <!--end of page level css-->
@stop

{{-- Page content --}}
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Staff
            </h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"> Staff</a>
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

<table id="datatable" class="table table-striped table-bordered table-hover" width="100%" border="0" cellspacing="0" cellpadding="0" summary="This is a list of the staff members.">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Title</th>
    <th>Active</th>
    <th>Edit</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>





<?php /*
                                <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>email</th>
                                        <th>
                                            Phone
                                        </th>
                                        <th>
                                            Department
                                        </th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Roman Runolfsdottir</td>
                                        <td>Roman24@yahoo.com</td>
                                        <td>429-509-9163</td>
                                        <td>Toys</td>
                                        <td>49428</td>
                                    </tr>
                                    <tr>
                                        <td>Doug Senger</td>
                                        <td>Doug.Senger12@hotmail.com</td>
                                        <td>619-213-3654</td>
                                        <td>Music</td>
                                        <td>3166</td>
                                    </tr>
                                    <tr>
                                        <td>Kennedi Torphy</td>
                                        <td>Kennedi3@gmail.com</td>
                                        <td>366-116-8461</td>
                                        <td>Automotive</td>
                                        <td>49301</td>
                                    </tr>
                                    <tr>
                                        <td>Freeda Treutel</td>
                                        <td>Freeda.Treutel63@gmail.com</td>
                                        <td>410-159-8618</td>
                                        <td>Electronics</td>
                                        <td>8252</td>
                                    </tr>
                                    <tr>
                                        <td>Amos Gottlieb</td>
                                        <td>Amos.Gottlieb57@hotmail.com</td>
                                        <td>067-740-2584</td>
                                        <td>Kids</td>
                                        <td>40248</td>
                                    </tr>
                                    <tr>
                                        <td>Santos Sipes</td>
                                        <td>Santos_Sipes75@hotmail.com</td>
                                        <td>432-008-7647</td>
                                        <td>Games</td>
                                        <td>356</td>
                                    </tr>
                                    <tr>
                                        <td>Sandy Wyman</td>
                                        <td>Sandy_Wyman33@yahoo.com</td>
                                        <td>799-719-5149</td>
                                        <td>Music</td>
                                        <td>26994</td>
                                    </tr>
                                    <tr>
                                        <td>Hilda Hirthe</td>
                                        <td>Hilda_Hirthe@gmail.com</td>
                                        <td>702-898-2035</td>
                                        <td>Home</td>
                                        <td>32700</td>
                                    </tr>
                                    <tr>
                                        <td>Madge Lowe</td>
                                        <td>Madge_Lowe55@hotmail.com</td>
                                        <td>438-643-6504</td>
                                        <td>Beauty</td>
                                        <td>24829</td>
                                    </tr>
                                    <tr>
                                        <td>Brett Olson</td>
                                        <td>Brett59@hotmail.com</td>
                                        <td>031-668-8313</td>
                                        <td>Outdoors</td>
                                        <td>24327</td>
                                    </tr>
                                    <tr>
                                        <td>Aileen Hand</td>
                                        <td>Aileen.Hand52@yahoo.com</td>
                                        <td>495-265-2018</td>
                                        <td>Automotive</td>
                                        <td>39495</td>
                                    </tr>
                                    <tr>
                                        <td>Emerson Brakus</td>
                                        <td>Emerson_Brakus@gmail.com</td>
                                        <td>880-538-9580</td>
                                        <td>Games</td>
                                        <td>37667</td>
                                    </tr>
                                    <tr>
                                        <td>Mandy Gulgowski</td>
                                        <td>Mandy_Gulgowski@yahoo.com</td>
                                        <td>686-439-7326</td>
                                        <td>Industrial</td>
                                        <td>37378</td>
                                    </tr>
                                    <tr>
                                        <td>Brittany Dibbert</td>
                                        <td>Brittany_Dibbert@hotmail.com</td>
                                        <td>662-842-8983</td>
                                        <td>Music</td>
                                        <td>293</td>
                                    </tr>
                                    <tr>
                                        <td>Macy Marks</td>
                                        <td>Macy_Marks@gmail.com</td>
                                        <td>620-493-8379</td>
                                        <td>Outdoors</td>
                                        <td>32749</td>
                                    </tr>
                                    <tr>
                                        <td>Gage Fisher</td>
                                        <td>Gage.Fisher90@hotmail.com</td>
                                        <td>833-190-3441</td>
                                        <td>Baby</td>
                                        <td>33967</td>
                                    </tr>
                                    <tr>
                                        <td>Lawson Wintheiser</td>
                                        <td>Lawson_Wintheiser@gmail.com</td>
                                        <td>263-807-6214</td>
                                        <td>Movies</td>
                                        <td>12143</td>
                                    </tr>
                                    <tr>
                                        <td>Leann Nienow</td>
                                        <td>Leann_Nienow@yahoo.com</td>
                                        <td>854-724-8186</td>
                                        <td>Music</td>
                                        <td>19789</td>
                                    </tr>
                                    <tr>
                                        <td>Polly Kuhic</td>
                                        <td>Polly98@hotmail.com</td>
                                        <td>390-322-1517</td>
                                        <td>Health</td>
                                        <td>47484</td>
                                    </tr>
                                    <tr>
                                        <td>Troy Wuckert</td>
                                        <td>Troy35@yahoo.com</td>
                                        <td>566-666-3953</td>
                                        <td>Baby</td>
                                        <td>33154</td>
                                    </tr>
                                    <tr>
                                        <td>Dominic Leffler</td>
                                        <td>Dominic.Leffler94@yahoo.com</td>
                                        <td>572-920-5685</td>
                                        <td>Movies</td>
                                        <td>34222</td>
                                    </tr>
                                    <tr>
                                        <td>Cordie Funk</td>
                                        <td>Cordie.Funk60@yahoo.com</td>
                                        <td>978-284-8680</td>
                                        <td>Grocery</td>
                                        <td>36814</td>
                                    </tr>
                                    <tr>
                                        <td>Mariane Cruickshank</td>
                                        <td>Mariane24@hotmail.com</td>
                                        <td>627-403-5459</td>
                                        <td>Games</td>
                                        <td>9848</td>
                                    </tr>
                                    <tr>
                                        <td>Giovanna Little</td>
                                        <td>Giovanna_Little@yahoo.com</td>
                                        <td>414-374-6948</td>
                                        <td>Books</td>
                                        <td>13287</td>
                                    </tr>
                                    <tr>
                                        <td>Santa Nolan</td>
                                        <td>Santa74@hotmail.com</td>
                                        <td>184-858-1792</td>
                                        <td>Kids</td>
                                        <td>42723</td>
                                    </tr>
                                    <tr>
                                        <td>Jordane Sawayn</td>
                                        <td>Jordane.Sawayn@gmail.com</td>
                                        <td>742-229-1406</td>
                                        <td>Shoes</td>
                                        <td>16084</td>
                                    </tr>
                                    <tr>
                                        <td>Meaghan Okuneva</td>
                                        <td>Meaghan44@gmail.com</td>
                                        <td>267-660-3828</td>
                                        <td>Computers</td>
                                        <td>4187</td>
                                    </tr>
                                    <tr>
                                        <td>Charlie Tillman</td>
                                        <td>Charlie97@yahoo.com</td>
                                        <td>560-033-8903</td>
                                        <td>Beauty</td>
                                        <td>24886</td>
                                    </tr>
                                    <tr>
                                        <td>Edison Wunsch</td>
                                        <td>Edison_Wunsch@hotmail.com</td>
                                        <td>400-017-7548</td>
                                        <td>Garden</td>
                                        <td>19725</td>
                                    </tr>
                                    <tr>
                                        <td>Imani Mann</td>
                                        <td>Imani44@gmail.com</td>
                                        <td>500-516-8839</td>
                                        <td>Grocery</td>
                                        <td>15656</td>
                                    </tr>
                                    <tr>
                                        <td>Steve Gutkowski</td>
                                        <td>Steve.Gutkowski@gmail.com</td>
                                        <td>553-584-0137</td>
                                        <td>Clothing</td>
                                        <td>29224</td>
                                    </tr>
                                    <tr>
                                        <td>Llewellyn Ratke</td>
                                        <td>Llewellyn58@hotmail.com</td>
                                        <td>790-595-5505</td>
                                        <td>Beauty</td>
                                        <td>32260</td>
                                    </tr>
                                    <tr>
                                        <td>Ali Reinger</td>
                                        <td>Ali25@hotmail.com</td>
                                        <td>777-088-6923</td>
                                        <td>Outdoors</td>
                                        <td>6895</td>
                                    </tr>
                                    <tr>
                                        <td>Edison Sauer</td>
                                        <td>Edison31@hotmail.com</td>
                                        <td>418-084-5373</td>
                                        <td>Computers</td>
                                        <td>37820</td>
                                    </tr>
                                    <tr>
                                        <td>Guadalupe Legros</td>
                                        <td>Guadalupe_Legros37@hotmail.com</td>
                                        <td>727-205-8400</td>
                                        <td>Computers</td>
                                        <td>27315</td>
                                    </tr>
                                    <tr>
                                        <td>Gaston Mraz</td>
                                        <td>Gaston.Mraz@yahoo.com</td>
                                        <td>318-988-0440</td>
                                        <td>Tools</td>
                                        <td>39710</td>
                                    </tr>
                                    <tr>
                                        <td>Luciano Zemlak</td>
                                        <td>Luciano42@gmail.com</td>
                                        <td>840-592-6240</td>
                                        <td>Tools</td>
                                        <td>3844</td>
                                    </tr>
                                    <tr>
                                        <td>Alfred Koepp</td>
                                        <td>Alfred_Koepp@hotmail.com</td>
                                        <td>025-399-0305</td>
                                        <td>Baby</td>
                                        <td>823</td>
                                    </tr>
                                    <tr>
                                        <td>Hailee Brakus</td>
                                        <td>Hailee_Brakus@hotmail.com</td>
                                        <td>216-518-3767</td>
                                        <td>Jewelery</td>
                                        <td>29643</td>
                                    </tr>
                                    <tr>
                                        <td>Franz Swaniawski</td>
                                        <td>Franz_Swaniawski@gmail.com</td>
                                        <td>697-627-5395</td>
                                        <td>Clothing</td>
                                        <td>34518</td>
                                    </tr>
                                    </tbody>
                                </table>
                                */ ?>
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
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom_js/datatables_custom.js')}}"></script>
    <!-- end of page level js -->
@stop

