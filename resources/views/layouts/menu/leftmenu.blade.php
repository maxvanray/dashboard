<?php $routename = Route::currentRouteName(); ?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar-->
    <section class="sidebar">
        <div id="menu" role="navigation">
            <div class="nav_profile">
                <div class="media profile-left">
                    <a class="pull-left profile-thumb" href="#">
                        <img src="{{asset('assets/img/authors/avatar1.jpg')}}" class="img-circle" alt="User Image">
                    </a>
                    <div class="content-profile">
                        <h4 class="media-heading">
                            {{ $user->name }}
                        </h4>
                        <ul class="icon-list">
                            <li>
                                <a href="{{ @route('profile.index') }} ">
                                    <i class="fa fa-fw fa-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('lockscreen') }} ">
                                    <i class="fa fa-fw fa-lock"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ @route('profile.index') }} ">
                                    <i class="fa fa-fw fa-gear"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ URL::to('login') }} ">
                                    <i class="fa fa-fw fa-sign-out"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="navigation">

                <?php // ROUTENAME ?>
                <li {!! (Request::is('location')|| Request::is('/')? 'class="active"':"") !!}>
                    <!-- {{ $routename==='login' ? 'class="active"':"" }} -->
                    <a href="{{ @route('dashboard') }} ">
                        <i class="menu-icon fa fa-fw fa-home"></i>
                        <span class="mm-text "><?php echo 'ROUTENAME: '.$routename ?></span>
                    </a>
                </li>

                <?php // DASHBOARD ?>
                <li {!! (Request::is('index')|| Request::is('/')? 'class="active"':"") !!}>
                    <a href="{{ @route('dashboard') }} ">
                        <i class="menu-icon fa fa-fw fa-home"></i>
                        <span class="mm-text ">Dashboard</span>
                    </a>
                </li>

                <?php // GUESTS ?>
                <li {!! (Request::is('users')||Request::is('addnew_user')||Request::is('profile.index')||Request::is('deleted_users')? 'class="active"':"") !!}>
                    <a href="#">
                        <i class="menu-icon fa fa-fw fa-users"></i>
                        <span>User</span> <span
                                class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{ @route('guests') }} ">
                                <i class="fa fa-list" aria-hidden="true"></i> Guests
                            </a>
                        </li>
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{ @route('staff') }} ">
                                <i class="fa fa-list" aria-hidden="true"></i> Staff
                            </a>
                        </li>
                        <li {!! (Request::is('addnew_user')? 'class="active"':"") !!}>
                            <a href="{{URL::to('addnew_user')}} ">
                                <i class="fa fa-fw fa-user"></i> Add New User
                            </a>
                        </li>
                        <li {!! (Request::is('profile.index')? 'class="active"':"") !!}>
                            <a href="{{ @route('profile.index') }} ">
                                <i class="fa fa-fw fa-user-md"></i> View Profile
                            </a>
                        </li>
                    </ul>
                </li>

                <?php // CALENDAR ?>
                <li {!! (Request::is('users')||Request::is('addnew_user')||Request::is('profile.index')||Request::is('deleted_users')? 'class="active"':"") !!}>
                    <a href="#">
                        <i class="menu-icon fa fa-fw fa-calendar"></i>
                        <span>Calendar</span> <span
                                class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{ @route('calendar') }} ">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i> View Calendar
                            </a>
                        </li>
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{ @route('events') }} ">
                                <i class="fa fa-list" aria-hidden="true"></i> Event List
                            </a>
                        </li>
                    </ul>
                </li>

                <?php // LOCATION ?>
                <li {!! (Request::is('users')||Request::is('addnew_user')||Request::is('profile.index')||Request::is('deleted_users')? 'class="active"':"") !!}>
                    <a href="#">
                        <i class="menu-icon fa fa-fw fa-location-arrow"></i>
                        <span>Location</span> <span
                                class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{URL::to('location')}} ">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Locations
                            </a>
                        </li>
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{URL::to('users')}} ">
                                <i class="fa fa-list" aria-hidden="true"></i> Add/Edit Location
                            </a>
                        </li>
                    </ul>
                </li>

                <?php // TRAFFIC ?>
                <li {!! (Request::is('users')||Request::is('addnew_user')||Request::is('profile.index')||Request::is('deleted_users')? 'class="active"':"") !!}>
                    <a href="#">
                        <i class="menu-icon fa fa-fw fa-line-chart"></i>
                        <span>Traffic</span> <span
                                class="fa arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{URL::to('users')}} ">
                                <i class="fa fa-tachometer" aria-hidden="true"></i> View Analytics
                            </a>
                        </li>
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{URL::to('users')}} ">
                                <i class="fa fa-list" aria-hidden="true"></i> View Check-in List
                            </a>
                        </li>
                        <li {!! (Request::is('users')? 'class="active"':"") !!}>
                            <a href="{{URL::to('users')}} ">
                                <i class="fa fa-barcode" aria-hidden="true"></i> Sales
                            </a>
                        </li>
                    </ul>
                </li>

                <?php // LOCKSCREEN ?>
                <li {!! (Request::is('users')? 'class="active"':"") !!}>
                    <a href="{{ @route('login') }} ">
                        <i class="menu-icon fa fa-fw fa-lock"></i>
                        <span class="mm-text ">Lockscreen</span>
                    </a>
                </li>

                <?php // LOGOUT ?>
                <li {!! (Request::is('users')? 'class="active"':"") !!}>
                    <a href="{{ @route('login') }} ">
                        <i class="menu-icon fa fa-fw fa-sign-out"></i>
                        <span class="mm-text ">Logout</span>
                    </a>
                </li>

            </ul>
            <!-- / .navigation -->
        </div>
        <!-- menu -->
    </section>
    <!-- /.sidebar -->
</aside>