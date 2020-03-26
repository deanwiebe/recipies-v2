@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
                Recipies
        </div>
        @foreach($recipies as $recipie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$recipie['title']}}-{{$recipie['type']}}
                @if($loop -> first)
                <span>First in the loop</span>
                @elseif($loop -> last)
                    <span>Last in the loop</span>
                @endif
                </h5>
                <p class="card-text">{{$recipie['ing']}}</p>
                <a href="#" class="btn btn-primary">{{$recipie['dir']}}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
    @endsection
 
