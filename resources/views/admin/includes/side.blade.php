<div class="scrollbar-wrapper" style="background: rgb(226,226,226)">
    <div>
        <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
            <i class="mdi mdi-close"></i>
        </button>
        <!-- User Detail box -->
        <div class="user-details">
            <div class="pull-left">
                <img src="{{url('assets/images/avatar-1.jpg')}}" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <a href="javascript: void(0);">Admin</a>
                <p class="text-muted m-0">Administrator</p>
            </div>
        </div>
        <!--- End User Detail box -->
        <!-- Left Menu Start -->
        <ul class="metisMenu nav" id="side-menu">
            <li><a href="#"><i class="ti-home"></i> Home </a></li>
            <li><a href="#"><i class="fa fa-file-o"></i> Pages <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li><a href="{{url('admin/posts')}}"> All pages</a></li>
                    <li><a href="{{url('admin/posts/create')}}"> Add new page</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-paperclip"></i> Banners <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li><a href="{{url('admin/homeSlider')}}"> All banners</a></li>
                    <li><a href="{{url('admin/homeSlider/create')}}"> Add new a new banner</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-bars"></i> Menus <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li><a href="{{url('admin/menu')}}"> Parent Menu</a></li>
                    <li><a href="{{url('admin/subMenu')}}"> Submenu</a></li>
{{--                    <li><a href="{{url('admin/level2')}}"> Level 2 Menu</a></li>--}}
                </ul>
            </li>
            {{-- <li><a href="{{url('admin/events')}}"><i class="fa fa-paperclip"></i> Events / Newsletters</a></li> --}}
            {{-- <li><a href="#"><i class="fa fa-image"></i> Gallery <span class="fa arrow"></span></a>
                <ul class="nav-second-level nav" aria-expanded="true">
                    <li><a href="{{url('admin/gallery')}}"> Gallery</a></li>
                    <li><a href="{{url('admin/gallery/create')}}"> Create a new Gallery</a></li>
                </ul>
            </li> --}}
        
            <li><a href="{{url('admin/settings')}}"><i class="fa fa-gears"></i> Settings</a></li>

        </ul>
    </div>
</div><!--Scrollbar wrapper-->