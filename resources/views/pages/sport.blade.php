@extends('layout.app')

@section('sabay-content')
{{-- <div class="jumbotron">
    <h1>Welcome Sport Page</h1>
</div> --}}
<div class="card mt-5">
    <div class="card-header">
        {{$title}}
    </div>
    <div class="cart-body">
        @if(count($football) > 0)
            <ul class="list-group">
                @foreach ($football as $key => $foot)
            <li class="list-group-item">{{$key}} : {{$foot}}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>

<div class="card mt-5">
        <div class="card-header">
            {{$title}}
        </div>
        <div class="cart-body">
            @if(count($VoleyBall) > 0)
                <ul class="list-group">
                    @foreach ($VoleyBall as $key => $foot)
                <li class="list-group-item">{{$key}} : {{$foot}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    
@endsection