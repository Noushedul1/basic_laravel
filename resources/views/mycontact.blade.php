@extends('master');
@section('title') 
    mycontact page
@endsection

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2">
            <form action="{{route('fullname')}}" method="POST">
                @csrf
                <div class="mr-3">
                    <lable class="form-lable">First Name: </lable>
                    <input type="text" class="form-control" name="first_name">
                </div>
                <div class="mr-3">
                    <lable class="form-lable">Last Name: </lable>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div class="mr-3">
                    <lable class="form-lable">Full Name: </lable>
                    <input type="text" class="form-control" name="full_name" value="{{isset($result)?$result:''}}">
                </div>
                <div class="mr-3">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection