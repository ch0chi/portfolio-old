@extends('layouts.app')

@section('content')
<div class="container-fluid full-height justify-nav">
    <div id="add-post-header" class="row">
        <h1>Add Post</h1>
    </div>
    <div class="container">
        <div id="add_post_content" class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <form role="form" method="POST" action="{{url('/blog')}}" enctype="multipart/form-data" autocomplete="off">
                    {!! csrf_field() !!}
                    <div class="form-group {{$errors->has('post_image') ? ' has-error' : ''}} ">

                        <label for="post_image" class="formImage center-block">Header Image</label>
                        <input type="file" id="post_image" name="post_image">


                        @if ($errors->has('post_image'))
                            <span class="help-block"><strong>{{ $errors->first('post_image') }}</strong></span>
                        @endif

                    </div>
                    <div class="form-group {{$errors->has('post_title') ? ' has-error' : ''}}  ">

                        <label for="post_title">Title</label>
                        <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Enter a title...">

                        @if ($errors->has('post_title'))
                            <span class="help-block"><strong>{{ $errors->first('post_title') }}</strong></span>
                        @endif

                    </div>
                    <div class="form-group {{$errors->has('post_body') ? ' has-error' : ''}} ">

                        <label for="post_body">Body</label>
                        <textarea id="post_body" name="post_body" class="form-control" rows="10"></textarea>

                        @if ($errors->has('post_body'))
                            <span class="help-block"><strong>{{ $errors->first('post_body') }}</strong></span>
                        @endif

                    </div>

                    <button id="add_post" type="submit" class="btn btn-default">Add Post</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection