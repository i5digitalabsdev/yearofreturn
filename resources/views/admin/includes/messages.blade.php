@if(count($errors) > 0)
    <div class="message">
        <p ><i class="fa fa-warning"> </i> <span>{{$errors->first()}}</span></p>
    </div>
@endif
@if(Session::has('message'))
    <div class="message">
        <p><i class="fa fa-check"> </i> <span>{{Session::get('message')}}</span></p>
    </div>
@endif