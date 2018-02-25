@extends('layouts.main')

@section('content')
<div id="home" class="container-fluid px-0">
    <div id="about">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <img class="rounded-circle pp mb-5" src="{{ asset('images/pp1.jpg') }}" alt="Omar Furrer">
                <h1 id="of-main-header" class="text-white h3"></h1>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body px-5">
                        <p class="card-text">
                            I am a Full Stack Web Developer with 4+ years of experience. 
                            Over the past few years I have gained a lot of experience building, deploying and maintaining a number 
                            of projects. I enjoy working on challenging problems and love building prototypes.
                            I am also very passionate about startups and learning new technologies.
                        </p>
                        <p class="card-text of-links">
                            <a class="btn-link" target="_blank" href="https://www.linkedin.com/in/omar-furrer-4b1a5aa8/">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a class="btn-link" target="_blank" href="https://github.com/omarfurrer">
                                <i class="fab fa-github-square"></i>
                            </a>
                            <a class="btn-link" target="_blank" href="{{ url('/blog') }}">
                                <i class="fab fa-blogger"></i>
                            </a>
                        </p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="text-center text-white">Current Toolset</h3>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Backend</h5>
                        <p class="card-text">
                            PHP, Laravel, Wordpress, Node.js
                        </p>
                        <h5 class="card-title">Frontend</h5>
                        <p class="card-text">
                            HTML, JS, CSS, SCSS, Angular.js, Vue.js
                        </p>
                        <h5 class="card-title">DB & Others</h5>
                        <p class="card-text">
                            Mysql, MongoDB, Webpack
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="text-center text-white">Experience</h3>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body px-5">
                        <h5 class="card-title mb-0">Remote Full Stack Web Developer</h5>
                        <small>Jan 2017 - Present</small>
                        <small class="d-block">@ <a class="btn-link" href="https://www.craftblue.com/">Craft Blue</a></small>
                        <p class="card-text">

                        </p>
                        <h5 class="card-title mb-0">Co-Founder</h5>
                        <small>Jan 2016 - Sep 2016</small>
                        <small class="d-block">@ <a class="btn-link disabled" href="#">Will It Spark</a></small>
                        <p class="card-text">
                            Created a task management tool on android and web using REST protocol and Angular.
                            Generated revenue and reached a few paying customers.
                            Pivoted into a market validation tool that helps startups validate their ideas.
                            Gained a lot of experience into product and customer development.
                        </p>
                        <h5 class="card-title mb-0">Full Stack Web Developer</h5>
                        <small>Jan 2015 - Jun 2016</small>
                        <small class="d-block">@ <a class="btn-link" href="http://unpluggedweb.com/">Unplugged Web Agency</a></small>
                        <p class="card-text">
                            Worked as part of a team to Plan, develop and deploy web and mobile applications of different sizes.
                            Used many technologies including PHP, Node.js and Angular.
                        </p>
                        <h5 class="card-title mb-0">Freelance Web Developer</h5>
                        <small>Jun 2014 - Jan 2015</small>
                        <p class="card-text">
                            Worked on a couple of freelance projects and 
                            built a few small working prototypes to test ideas for a startup. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3 class="text-center text-white">Education</h3>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Bachelor Degree in Computer Science & Engineering</h5>
                        <small>From the <a class="btn-link" href="http://www.guc.edu.eg/">German University in Cairo</a></small>
                        <p class="card-text">
                            <!--Graduating with a bachelor degree in Computer Science and Engineering taught me how to think in an analytical problem solving way.-->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="bg-teal-blue">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <h3 class="text-center mt-5 text-white">Contact Me</h3>
            </div>
        </div>
        <div class="row justify-content-center pb-5">
            <div class="col-sm-12 col-lg-6">
                <form class="text-white">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="john.doe@awesome.com">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" aria-describedby="subject" placeholder="Help Building Something Cool">
                    </div>
                    <div class="form-group">
                        <label for="details">Details</label>
                        <textarea class="form-control" id="details" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
    particlesJS.load('about', 'js/config/particles.json', function () {
        console.log('callback - particles.js config loaded');
    });

    var app = document.getElementById('of-main-header');

    var typewriter = new Typewriter(app, {
    });

    typewriter.typeString('Hello and welcome to my page, my name is Omar Furrer')
            .start();
</script>
@endpush
