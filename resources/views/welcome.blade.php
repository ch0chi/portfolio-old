@extends('layouts.app')
@section('content')

<!--Welcome-->
    <div class="container-fluid" id="welcomeWrapper">
        <div class="container" id="welcome">
            <div id="welcomeInner" class="col-md-10 col-md-offset-1 col-xs-12 cardLg">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="Images/me.png" class="img-responsive center-block">
                        <h1 id="welcomeHeader">Hello, I'm <span class="red">Michael</span>.</h1>
                        <h3>Full Stack Developer | Denver, CO.</h3>
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
                        <p>I’m an experienced web developer with with a background in front-end and back-end development. I hold a degree from Jacksonville State University with a Bachelor of Science in Geography and a Minor in Computer Science.
                            As a self-taught web developer, I have worked alongside agile development teams, created web applications for non-profits, and free-lanced for various clients, so I have practical experience when it comes the business and development side of web application development.
                            However, in my spare time, I provide free-lance development services for various clients.</p>
                        <a href="https://drive.google.com/file/d/0B7kBXdwAhxe1bTNDT2RJTUxlaTQ/view?usp=sharing"><button type="button" class="btn btn-default btn-large flatButton">Resume</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--End About-->

    <!--Projects-->
    <div class="container" id="projects">
        <div id="projectsInner" class="col-xs-12">
            <div class="row">
                <h1>Projects</h1>

                <div class="col-md-6 projectWrapper">
                    <div class="col-xs-12 projectDescription cardSm">
                        <h2>Evntit built w/ Laravel</h2>
                        <div class=" projectImage card" id="evntitLaravelImage">

                        </div>
                        <p>The new Evntit.com that is built with the powerful laravel framework- this project aims to be scalable and secure. Source is available upon request.
                        </p>

                        <a href="https://evntit.michaelq.dev"><button type="button" class="btn btn-default btn-large flatButton">Demo</button></a>

                    </div>
                </div>

                <div class="col-md-6 projectWrapper">
                    <div class="col-xs-12 projectDescription cardSm">
                        <h2>Evntit.com</h2>
                        <div class=" projectImage card" id="evntitImage">

                        </div>
                        <p>Developed in PHP, Evntit.com is a personal project that utilizes a RESTful API to help you find new friends, hobbies, and things to do within your city.
                        </p>

                        <a href="http://evntit.com"><button type="button" class="btn btn-default btn-large flatButton">Demo</button></a>
                        <a href="https://github.com/ch0chi/evntit-old"><button type="button" class="btn btn-default btn-large flatButton">Source</button></a>

                    </div>
                </div>

                <div class="col-md-6 projectWrapper">
                    <div class="col-xs-12 projectDescription cardSm">
                        <h2>Inline.js</h2>
                        <div class=" projectImage card" id="inlineImage">

                        </div>
                        <p>Inline.js is a simple yet powerful jquery plugin that makes editing content on the fly a breeze. The perfect solution for simple CMS editing!</p>

                        <a href="http://ch0chi.github.io/Inline.js/"><button type="button" class="btn btn-default btn-large flatButton">Demo</button></a>
                        <a href="http://github.com/Ch0chi/Inline.js/"><button type="button" class="btn btn-default btn-large flatButton">Source</button></a>

                    </div>
                </div>

                <div class="col-md-6 projectWrapper">
                    <div class="col-xs-12 projectDescription cardSm">
                        <h2>Choccoloccocreekalliance.org</h2>
                        <div class=" projectImage" id="choccImage">

                        </div>
                        <p>A website built for the Choccolocco Creek Alliance- a nonprofit organization that focuses on the maintenance and protection of the
                            choccolocco creek watershed.</p>

                        <a href="http://choccoloccocreekalliance.org"><button type="button" class="btn btn-default btn-large flatButton">Demo</button></a>

                    </div>
                </div>

                <div class="col-md-6 projectWrapper">


                    <div class="col-xs-12 projectDescription cardSm">
                        <h2>Breakout Game</h2>
                        <div class=" projectImage" id="breakoutImage"></div>
                        <p>This project focuses on recreating the classic breakout game into an object oriented design using javascript and HTML5</p>

                        <a href="https://jsfiddle.net/d6mce9yq/14/"><button type="button" class="btn btn-default btn-large  flatButton">Demo</button></a>
                        <a href="#"><button type="button" class="btn btn-default btn-large  flatButton">Source</button></a>



                    </div>

                </div>
                <div class="col-md-6 projectWrapper">
                    <div class="col-xs-12 projectDescription cardSm">
                        <h2>Jquery Material Form Plugin</h2>
                        <div class=" projectImage" id="jqueryPluginImage">

                        </div>
                        <p>A simple and responsive jquery form plugin that easily adds a material themed form to any page.</p>

                        <a href="http://ch0chi.github.io/Jquery-Material-Form-Plugin"><button type="button" class="btn btn-default btn-large  flatButton">Demo</button></a>
                        <a href="https://github.com/ch0chi/Jquery-Material-Form-Plugin.git"><button type="button" class="btn btn-default btn-large flatButton">Source</button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--End Projects-->

    <!--Contact-->
    <div class="container" id="contact">
        <div class="col-xs-12">
            <div class="row">
                <h1>Contact</h1>
                <div class="col-md-6 contactInfo">
                    <div class="col-xs-12 cardSm">
                        <h2>Phone</h2>
                        <hr>
                        <a href="tel:+12565412181"><p>256-541-2181</p></a>
                    </div>
                </div>
                <div class="col-md-6 contactInfo ">
                    <div class="col-xs-12 cardSm">
                        <h2>Email</h2>
                        <hr>
                        <a href="mailto:mquattrochi@gmail.com"><p>mquattrochi@gmail.com</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Contact-->

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
                    <a href="tel:+12565412181">
                        <i class="fa fa-phone fa-2x"></i><h4></h4>
                    </a>
                    <a href="mailto:mquattrochi@gmail.com"><i class="fa fa-envelope fa-2x"></i><h4></h4></a>
                </div>
            </div>
        </div>
    </div>
@endsection
