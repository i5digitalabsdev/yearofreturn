
  <div class="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-xs-4">
                <div id="colorlib-logo"><a href="/"><img class="img-responsive" src="/assets/yearofreturn/img/web_logo.png" alt="year of return"/></a></div>
            </div>
            <div class="col-xs-10 text-right menu-1" style="margin-top: 20px;">
                <ul>
                    <li><a href="/">Home</a></li>
                    @foreach($menus as $menu)
                    <li><a class="@if(Request::url() === url($menu->url) ) nav-active @endif"  href="{{url($menu->url)}}">{{$menu->menuName}}</a></li>
                    @endforeach
                    <li><a href="/contactus">Contact</a></li>

                </ul>
            </div>
        </div>
    </div>
  </div>



