@extends('master');
@section('title') 
    about page
@endsection

@section('body')
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $product['image'] }}" alt="" class="card-top-img">
                <div class="card-body">
                    <h4 class="card-title">{{ $product['name'] }}</h4>
                    <p>Tk. {{ $product['price'] }}</p>
                    <p class="card-text">
                        {{ $product['description'] }}
                    </p>
                <hr/>
                    <a href="{{ route('pdetails',['id' => $product['id']]) }}" class="btn btn-outline-success">Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection