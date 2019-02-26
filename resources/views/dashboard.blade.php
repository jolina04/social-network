@extends('layouts.master')

@section('title')
    Social Network - Dashboard
@endsection

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What do you have to say?</h3></header>
            <form action="#">
                <div class="form-group">
                    <textarea class="form-control" name="new-post" id="new-post" cols="30" rows="10" placeholder=""></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>What other people say...</h3></header>
            <article class="post">
                <p>This is a sample paragraph but it is not lorem ipsum dolor sit amet because I want it to be unique and easy to understand and read.</p>
                <div class="info">
                    Posted by Jolina on 26th Feb 2019
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
            <article class="post">
                <p>This is a sample paragraph but it is not lorem ipsum dolor sit amet because I want it to be unique and easy to understand and read.</p>
                <div class="info">
                    Posted by Jolina on 26th Feb 2019
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
        </div>
    </section>
@endsection
