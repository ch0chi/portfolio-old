@extends('layouts.app')

@section('content')
    <div class="container-fluid full-height justify-nav">
        <div id="blog-header">

        </div>

        <div id="all-posts-content" class="container">
            @if($posts->isEmpty())
                <div id="no-posts-error" class="row">
                    <h1>Looks like there aren't any blog posts yet!</h1>
                    <h4>Check back periodically to see if any posts have been added.</h4>
                </div>

            @endif
            <div class="row">
                <?php $count = 0;?>
                @foreach($posts as $post)
                    <?php $count++;?>

                    @if($count===1)
                        <h1>Latest Post</h1>

                        {{--Display Top Blog post--}}
                        <div class="col-md-12">
                            {{--Top Post Action Toolbar--}}
                            @if(\Auth::check())
                                <div class="post-action-toolbar" style="position:absolute; display:flex; z-index:1">
                                    <a href="{{url('/blog/')}}/{{$post->blog_key}}/edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                    <form action="{{url('/blog')}}/{{$post->blog_key}}" class="delete-button" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit    "><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i><button>
                                    </form>
                                </div>
                            @endif
                            <a href="{{url('/blog')}}/{{$post->blog_key}}" class="well post-card" style="background-image:url('uploads/banner_{{$post->post_image}}')">
                            <h2>{{$post->post_title}}</h2>
                            <div class="post-card-overlay"><h1>View Post</h1></div></a>
                        </div>
                        <h1>Previous Posts</h1>
                    @else

                        {{--Display Previous Blog Posts--}}
                        <div class="col-md-4">
                            {{--Previous Post Action Toolbarr--}}
                            @if(\Auth::check())
                                <div class="post-action-toolbar" style="display:flex; z-index:1">
                                    <a href="{{url('/blog/')}}/{{$post->blog_key}}/edit"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>
                                    <form action="{{url('/blog')}}/{{$post->blog_key}}" class="delete-button" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                                    </form>
                                </div>
                            @endif
                            <a href="{{url('/blog')}}/{{$post->blog_key}}" class="well post-card" style="background-image:url('uploads/{{$post->post_image}}')">
                                <h2>{{$post->post_title}}</h2>
                                <div class="post-card-overlay"><h1>View Post</h1></div>
                            </a>
                        </div>
                    @endif

                @endforeach
            </div>
        </div>


    </div>
@endsection