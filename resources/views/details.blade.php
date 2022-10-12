@extends('master');
@section('title') 
    details page
@endsection

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            {{ $email }}
           {{$rakib}} and {{$akib}}
           @foreach($data as $key => $value)
           @if($key <=2 && $key <=4)
           <p>{{$key}}  {{$value}}</p>
           @else
           <h1>hello noushedul islam</h1>
           @endif
           @endforeach

           @foreach($islam as $key => $value)
            @foreach($value as $v)
                <p>{{ $v }}</p>
            @endforeach
           @endforeach
        </div>
    </div>
</div>
@endsection