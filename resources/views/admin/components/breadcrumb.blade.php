<ol class="breadcrumb">
    <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    {{--<li class="active">Dashboard</li>--}}

    @for($i = 2; $i <= count(Request::segments()); $i++)
        <li>
            <a href="javascript:void(0);">{{Request::segment($i)}}</a>
        </li>
    @endfor
</ol>