<div>
    <div class="col-md-6">
        <ul class="visible-md visible-lg text-right">
            <li><a href=""><i class="fa fa-comment"></i> Live Chat</a></li>
            @if(Session::has('city'))
                <li><a href="{{route('home.change_location')}}"><i class="fa fa-map-marker"></i> {{Session::get('city')}}, {{Session::get('state')}}</a></li>
            @else
                <li><a href="{{route('home.change_location')}}"><i class="fa fa-map-marker"></i> Jashore, Bangladesh</a></li>
            @endif
        </ul>
    </div>
</div>
