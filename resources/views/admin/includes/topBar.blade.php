
<!-- LOGO -->
<div class="topbar-left" style="background: #00044c">
    <div class="">
        <a href="#" class="logo">
            {{--<img src="{{url('assets/images/avatar-1.jpg')}}" alt="logo" class="logo-lg" />--}}
            {{--<img src="{{url('assets/images/avatar-1.jpg')}}" alt="logo" class="logo-sm hidden" />--}}
        </a>
    </div>
</div>

<div class="navbar navbar-default" role="navigation" style="background: #1c2260">
    <div class="container">
        <div class="">
            <!-- Mobile menu button -->
            <div class="pull-left">
                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                    <i class="fa fa-bars"></i>
                </button>
                <span class="clearfix"></span>
            </div>


            <!-- Top nav Right menu -->
            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">

                <li class="dropdown top-menu-item-xs">
                    <a href="{{url('/')}}" target="_blank"  class="menu-right-item">
                        <i class="mdi mdi-web"></i> <span class="label label-danger"></span>
                    </a>
                </li>
                <li class="dropdown top-menu-item-xs">
                    {{--<a href="#"  class="dropdown-toggle menu-right-item" data-toggle="" aria-expanded="true">--}}
                        {{--<i class="mdi mdi-bell"></i> <span class="label label-danger"></span>--}}
                    {{--</a>--}}
                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                        <li class="list-group notification-list" style="height: 267px;">
                            <div class="slimscroll">
                                <!-- list item-->
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left p-r-10">--}}
                                            {{--<em class="fa fa-bell-o bg-custom"></em>--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h5 class="media-heading">Updates</h5>--}}
                                            {{--<p class="m-0">--}}
                                                {{--<small>There are <span class="text-primary font-600">2</span> new updates available</small>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                <!-- list item-->
                                {{--<a href="#" class="list-group-item">--}}
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left p-r-10">--}}
                                            {{--<em class="fa fa-user-plus bg-danger"></em>--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<h5 class="media-heading">New user registered</h5>--}}
                                            {{--<p class="m-0">--}}
                                                {{--<small>You have 10 unread messages</small>--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="dropdown top-menu-item-xs">
                    <a href="#" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="{{url('assets/images/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('admin/settings')}}"><i class="ti-user m-r-10"></i> Profile</a></li>
                        {{--<li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>--}}
                        {{--<li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>--}}
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div> <!-- end container -->
</div>