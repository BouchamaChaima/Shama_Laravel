<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDU-SHAM</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href="{{url('/')}}">EDU-SHAM</a></div>
            <ul class="menu">
                <li><a href="{{url('/')}}" class="activ">
                    <div>
                        <span class="material-symbols-outlined">
                            home
                        </span>
                    </div>
                    <div>Home</div>
                </a></li>
                <li><a href="{{url('/About')}}">
                    <div><span class="material-symbols-outlined">
                        description
                        </span>
                    </div>
                    <div>About us</div>
                </a></li>
                <li><a href="">
                    <div>
                        <span class="material-symbols-outlined">
                        view_timeline
                        </span>
                    </div>
                    <div>Classes</div>
                </a></li>
                <li><a href="">
                    <div>
                        <span class="material-symbols-outlined">
                            cast_for_education
                        </span>
                    </div>
                    <div>Teachers</div>
                </a></li>
                <li><a href="">
                    <div>
                        <span class="material-symbols-outlined">
                            escalator_warning
                        </span>
                    </div>
                    <div>Parents</div>
                </a></li>
                <li><a href="">
                    <div>
                        <span class="material-symbols-outlined">
                            child_care
                        </span>
                    </div>
                    <div>Students</div>
                </a></li>
                <li><a href="">
                    <div>
                        <span class="material-symbols-outlined">
                            call
                        </span>
                    </div>
                    <div>Contact us</div>
                </a></li>
            </ul>
        </nav>
    </header>
    <div class="cover">
        <img src="img/kids.png" alt="">
        <div>
            <h1>An inspiration starts here</h1>
            <p>Easy and fun learning
                for children to achieve their greatest potential 
                both as students and as members of their communities. 
            </p>
            <a href="{{url('/About')}}">See more</a>
        </div>
    </div>
    <section>
        <div class="content">
            <div class="desc">
                <h3>About us</h3>
                <hr>
                <p>
                  Our mission is to make learning fun and easy for your child,
                  Providing safe care and a friendly environment
                  Where your child can grow and learn with help and guidance
                  Positive role models and developmentally appropriate activities.
                </p>
                <a href="{{url('/About')}}">See more</a>
            </div>
            <div class="img">
                <img src="img/about.jpg" alt="Classroom + Students">
            </div>
        </div>
        <div class="activities">
            <h2>Our activities</h2>
            <p>School activities are important for developing students’ 
                intelligence and skills, developing their scientific and 
                applied abilities, and highlighting students’ talents
            </p>
            <div class="collection">
                <div class="activity-description lib">
                    <div>
                        <a href="{{route('activityName', ['name' => 'Library'])}}">
                            <h3>The library</h3>
                        </a>
                    </div>
                </div>
                <div class="activity-description math">
                    <div>
                        <a href="{{route('activityName', ['name' => 'MentalArithmetic'])}}">
                            <h3>Mental arithmetic</h3>
                        </a>
                    </div>
                </div>
                <div class="activity-description draw">
                    <div>
                        <a href="{{route('activityName', ['name' => 'Drawing&Coloring'])}}">
                            <h3>Drawing and coloring</h3>
                        </a>
                    </div>
                </div>
                <div class="activity-description computer">
                    <div>
                        <a href="{{route('activityName', ['name' => 'ComputerActivities'])}}">
                            <h3>Computer activities</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="collection">
                <div class="activity-description radio">
                    <div>
                        <a href="{{route('activityName', ['name' => 'SchoolRadio'])}}">
                            <h3>School radio</h3>
                        </a>
                    </div>
                </div>
                <div class="activity-description trip">
                    <div>
                        <a href="{{route('activityName', ['name' => 'SchoolTrips'])}}">
                            <h3>School trips</h3>
                        </a>
                    </div>
                </div>
                <div class="activity-description theater">
                    <div>
                        <a href="{{route('activityName', ['name' => 'TheatricalActivity'])}}">
                            <h3>Theatrical activity</h3>
                        </a>
                    </div>
                </div>
                <div class="activity-description sport">
                    <div>
                        <a href="{{route('activityName', ['name' => 'SchoolActivity'])}}">
                            <h3>Sports activities</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sign-in-up">
            <div class="sign-up">
                <h3>Pre-registration</h3>
                <h4>You can register your child online</h4>
                <a href="">Register now</a>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; All rights reserved</p>
        <a href="{{url('/')}}"><strong>EDU-SHAM</strong></a>
        <p><u>+212 5 23 48 66 74</u></p>
    </footer>
</body>
</html>