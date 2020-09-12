@extends('layouts.app')


@section('content')
    <div id="single-post-wrapper" class="container-fluid full-height justify-nav">
        <div class="container">
            <div id="single-post" class="row">
                    @foreach($blogPost as $post)
                        <div id="post-header" style="background-image:url('{{url('/uploads')}}/banner_{{$post->post_image}}')">
                            <h1>{{$post->post_title}}</h1>
                            <h4>Author: {{$post->name}}</h4>
                        </div>
                        <div id="post-content" class="col-lg-8 col-lg-offset-2">
                            <?php echo $post->post_body; ?>
                        </div>
                    @endforeach
            </div>



        </div>
    </div>
@endsection