@extends('master');
@section('title')
    Product details
@endsection
@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <img src="{{ $data['image'] }}" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <h1>{{ $data['name'] }}</h1>
                <p>Tk. {{ $data['price'] }}</p>
                <p>{{ $data['description'] }}</p>
                <hr/>
                <a href="" class="btn btn-outline-success">Add To Cart</a>
            </div>
        </div>
    </div>
</div>
@endsection