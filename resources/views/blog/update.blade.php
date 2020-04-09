@extends('layouts.app')

@section('content')
    <div class="container-fluid full-height justify-nav">
        <div id="add-post-header" class="row">
            <h1>Edit Post</h1>
        </div>
        <div class="container">
            <div id="add_post_content" class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    @foreach($postContent as $content)
                    <form role="form" method="POST" action="{{url('/blog')}}/{{$content->blog_key}}" enctype="multipart/form-data" autocomplete="off">
                        {{method_field('PATCH')}}
                        {!! csrf_field() !!}
                        <div class="form-group {{$errors->has('post_image') ? ' has-error' : ''}} ">

                            <label for="post_image" class="formImage center-block" style="background-image:url('{{url('uploads')}}/banner_{{$content->post_image}}')">Header Image</label>
                            <input type="file" id="post_image" name="post_image">
                            <input type="hidden" id="old_post_image" name="old_post_image" value="{{$content->post_image}}">
                            @if ($errors->has('post_image'))
                                <span class="help-block"><strong>{{ $errors->first('post_image') }}</strong></span>
                            @endif

                        </div>
                        <div class="form-group {{$errors->has('post_title') ? ' has-error' : ''}}  ">

                            <label for="post_title">Title</label>
                            <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Enter a title..." value="{{$content->post_title}}">

                            @if ($errors->has('post_title'))
                                <span class="help-block"><strong>{{ $errors->first('post_title') }}</strong></span>
                            @endif

                        </div>
                        <div class="form-group {{$errors->has('post_body') ? ' has-error' : ''}} ">

                            <label for="post_body">Body</label>
                            <textarea id="post_body" name="post_body" class="form-control" rows="10">{{$content->post_body}}</textarea>

                            @if ($errors->has('post_body'))
                                <span class="help-block"><strong>{{ $errors->first('post_body') }}</strong></span>
                            @endif

                        </div>

                        <button id="edit_post" type="submit" class="btn btn-default">Save Edit</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection