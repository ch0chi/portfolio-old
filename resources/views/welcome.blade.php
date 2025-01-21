@extends('layouts.app')
@section('content')

<!--Welcome-->
    <div class="container-fluid" id="welcomeWrapper">
        <div class="container" id="welcome">
            <div id="welcomeInner" class="col-md-10 col-md-offset-1 col-xs-12 cardLg">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="{{asset('public/Images/mquattrochi.jpg')}}" class="img-responsive center-block">
                        <h1 id="welcomeHeader">Hello, I'm <span class="red">Michael</span>.</h1>
                        <h3>Senior Full Stack Developer | Denver, CO.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End Welcome-->

    <!--About-->
    <div class="container-fluid" id="aboutWrapper">
        <div class="container" id="about">
            <div id="aboutInner" class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <h2>About</h2>
                        <p>I currently live in Denver, CO. and work remotely as a Senior Full Stack Developer for <a href="https://coalmarch.com">Coalmarch</a>.<br>
                            I'm passionate about all things outdoors, and can generally be found mountain biking, rock climbing, mountaineering, snowboarding, hiking, and camping all around the vast Colorado wilderness.<br>
                            I also help develop <a href="https://highpointwx.com">HighpointWx</a>, an advanced weather forecasting app for the Colorado high country -- mountaineering, skiing, rock climbing, and more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End About-->

    <!--Projects-->
<div class="container-fluid">
    <div class="container" id="projects">
        <div id="projectsInner" class="col-md-8 col-md-offset-2 col-xs-12">
            <div class="row">
                <div class=col-xs-12">
                <h1>Projects</h1>
                    <p>Coming Soon. In the meantime, you can see some of my work on my <a href="http://github.com/ch0chi">Github</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


    <!--End Projects-->

    <!--Footer-->
    <div class="container-fluid" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Let's get in touch</h2>
                    <p>Message me if your interested in an inquiry, are a prospective employer, or are just looking to strike-up a conversation.
                        I'll do my best to respond as soon as possible.</p>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <h3>Connect</h3>
                    <div class="row">
                        <a href="https://www.linkedin.com/in/michael-quattrochi-6458a79b"><i class="fa fa-3x fa-linkedin-square"></i></a>
                    </div>
                    <div class="row">
                        <a href="http://github.com/ch0chi"><i class="fa fa-3x fa-github-square"></i></a>
                    </div>


                </div>
                <div class="col-xs-6 col-sm-3">
                    <h3>Contact</h3>
                    <a href="tel:+13036569494">
                        <i class="fa fa-phone fa-2x"></i><h4></h4>
                    </a>
                    <a href="mailto:mquattrochi@pm.me"><i class="fa fa-envelope fa-2x"></i><h4></h4></a>
                </div>
            </div>
        </div>
    </div>
@endsection
