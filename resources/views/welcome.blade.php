@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{route('signup')}}" method="post">
                <div class="form-group">
                    <label for="email">Your E-mail</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="first_name">Your First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name">
                </div>
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="{{route('signin')}}" method="post">
                <div class="form-group">
                    <label for="email">Your E-mail</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Your Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>
    </div>
@endsection
