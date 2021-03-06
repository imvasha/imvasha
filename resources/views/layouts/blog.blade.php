<!DOCTYPE html>
<html lang="en">
<head>
    <title>Imvasha | Full Stack Developer</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap 4 Portfolio/Resume Theme for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- FontAwesome JS -->
    <script defer src="assets/fontawesome/js/all.js"></script>

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css">
    <!-- github activity css -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    <link rel="stylesheet" href="assets/plugins/github-activity/github-activity-0.1.5.min.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <!-- ******HEADER****** -->
    <header class="header">
        <div class="container clearfix">
            <img class="profile-image img-fluid float-left rounded-circle" src="assets/images/profile.jpeg" width="200" height="200" alt="profile image" />
            <div class="profile-content float-left">
                <h1 class="name">Ivan Kukin</h1>
                <h2 class="desc">Full Stack Developer</h2>
                <ul class="social list-inline">
                    {{-- <li class="list-inline-item"><a href="https://twitter.com/invasha"><i class="fab fa-twitter"></i></a></li> --}}
                    <li class="list-inline-item"><a href="https://linkedin.com/in/imvasha"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/imvasha"><i class="fab fa-github-alt"></i></a></li>
                    <li class="list-inline-item"><a href="https://ru.stackoverflow.com/users/388139/imvasha"><i class="fab fa-stack-overflow"></i></a></li>
                    {{-- <li class="list-inline-item last-item"><a href="#"><i class="fab fa-codepen"></i></a></li> --}}
                    <li class="list-inline-item last-item"><a href="https://discord.gg/5jhzyA"><i class="fab fa-discord"></i></a></li>



                </ul>
            </div><!--//profile-->
            <a class="btn btn-cta-primary float-right" href="https://wa.me/5548996431208?text=I'm%20from%20site%20imvashacom%20about%20make%20money"  target="_blank"><i class="fas fa-paper-plane"></i> Contact Me</a>
        </div><!--//container-->
    </header><!--//header-->
    {{-- https://wa.me/1XXXXXXXXXX?text=I'm%20interested%20in%20your%20car%20for%20sale --}}
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-lg-8 col-12">
                <section class="about section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>

                                Hi guys, I'm from Florianopolis, Brazil. I'm a web developer who loves travelling, play the piano, video games and have some wine & cheese.
                                <br>
                                <br>
                                I'm currently working at STULUX Web Studio based in Tailand as a back-end developer . I also accept the occasional freelance project.
                                <br>
                                <br>
                                If you're interested in working with me, have a question, or just feel like saying hello, please feel free to drop a line ! - no agency please</p>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

               <section class="latest section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">

                            <div class="item featured text-center">

                                <div class="featured-image has-ribbon">
                                    <a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/launch-bootstrap-4-template-for-saas-businesses/" target="_blank">
                                    <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-featured.jpg" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                    </div>
                                </div>

                                <h3 class="title mb-3"><a href="https://stulux.net/" target="_blank">STULUX WEB STUDIO</a></h3>

                                <div class="desc text-left">
                                    <p>Full stack web studio..</p>
                                </div><!--//desc-->
                                <a class="btn btn-cta-secondary" href="https://stulux.net/" target="_blank"><i class="fas fa-thumbs-up"></i> Back my project</a>
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-12" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-4-startup-template-for-software-projects/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-1.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://mamashka.net/" target="_blank">Mamashka Blog - Laravel/SQL/HTML/CSS/Bootstrap</a></h3>
                                    <p class="mb-2">Block traveler.</p>
                                    <p><a class="more-link" href="https://mamashka.net/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            {{-- <div class="item row">
                                <a class="col-md-4 col-12" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank">
                                <img class="img-fluid project-image rounded shadow-sm" src="assets/images/projects/project-5.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-12">
                                    <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank">DevStudio - Bootstrap 4 Template for WebDev Agencies and Freelance Developers</a></h3>
                                    <p class="mb-2"> You can put one of your secondary projects here. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                                    <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devstudio-bootstrap-theme-for-web-development-agencies-and-developers/" target="_blank"><i class="fas fa-external-link-alt"></i>Find out more</a></p>
                                </div><!--//desc-->
                            </div><!--//item--> --}}

                            <a class="btn btn-cta-secondary" href="https://github.com/imvasha">More on GitHub <i class="fas fa-chevron-right pt-1"></i></a>


                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="projects section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Latest blog posts</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><a href="#" target="_blank">First post about this</a> <span class="badge badge-theme">Programming</span></h3>
                                <p class="summary">Test post and no more.</p>
                                <p><a class="more-link" href="#" target="_blank"><i class="fas fa-external-link-alt"></i>Read full</a></p>
                            </div><!--//item-->
                            {{-- <div class="item">
                                <h3 class="title"><a href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/nova-bootstrap-landing-page-template-for-mobile-apps/" target="_blank">Nova - Free App Landing Page Template for App Developers</a> <span class="badge badge-theme">Free</span></h3>
                                <p class="summary">Provide a brief description of your project. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel purus enim. Etiam tortor felis, fermentum ac ultrices sed.</p>
                                <p><a class="more-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/nova-bootstrap-landing-page-template-for-mobile-apps/" target="_blank"><i class="fas fa-external-link-alt"></i>Download Now</a></p>
                            </div><!--//item--> --}}

                            {{-- <a class="btn btn-cta-secondary" href="#">More on GitHub <i class="fas fa-chevron-right pt-1"></i></a> --}}

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="experience section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Co-Founder & Lead Developer - <span class="place"><a href="https://stulux.net">STULUX Web Studio</a></span> <span class="year">(2019 - Present)</span></h3>
                                <p>Back-end developer, application and database design, technology stack selection.</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Web Site Developer - <span class="place"><a href="https://evropol-rus.ru/">Evropol Rus</a></span> <span class="year">(2017 - 2018)</span></h3>
                                <p>Completion of the sales site, adding online payment, processing the database, the transition to a new engine.</p>
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="title">Sistem Admistrator - <span class="place"><a href="https://evropol-rus.ru/">Evropol</a></span> <span class="year">(2012 - 2017)</span></h3>
                                <p>Ensuring operability of communication between the head office and branches of retail stores network setup support for the operability of network equipment server setup.</p>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
                <section class="github section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">My GitHub</h2>
                        <p>You can embed your GitHub contribution graph calendar using IonicaBizau's <a href="https://github.com/IonicaBizau/github-calendar" target="_blank">GitHub Calendar</a> widget.

                        {{-- <div id="github-graph" class="github-graph"> --}}
                            <div id="calendar" class="calendar">
                                {{-- <!-- Loading stuff -->
                                Loading the data just for you.
                            </div> --}}
                        </div><!--//github-graph-->

                        {{-- <p>You can also embed your GitHub activities using Casey Scarborough's <a href="https://github.com/caseyscarborough/github-activity" target="_blank">GitHub Activity Stream</a> widget. --}}
                        <p>GitHub activities using Casey Scarborough's <a href="https://github.com/caseyscarborough/github-activity" target="_blank">GitHub Activity Stream</a> widget.
                        <!--//Usage: https://caseyscarborough.com/projects/github-activity/ -->
                        <div id="feed" class="feed">
                            {{-- <div id="ghfeed" class="ghfeed"> --}}
                        </div><!--//ghfeed-->

                    </div><!--//secton-inner-->
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-lg-4 col-12">
                 <aside class="info aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-map-marker-alt"></i><span class="sr-only">Location:</span>Florianopolis, BR</li>
                                <li><i class="fas fa-envelope"></i><span class="sr-only">Email:</span><a href="">imvasha@gmail.com</a></li>
                                <li><i class="fas fa-link"></i><span class="sr-only">Website:</span><a href="https://stulux.net">https://www.stulux.net</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            {{-- <p class="intro"> --}}
                                {{-- Intro about your skills goes here. Keep the list lean and only show your primary skillset. You can always provide a link to your Linkedin or Github profile so people can get more info there.</p> --}}

                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">Laravel &amp; PHP/SQL &amp; Json:API<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; Vue JS &amp; Rect JS<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Intermediate</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="56%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">HTML5/CSS3 &amp; Bootstrap &amp; Tailwind<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="96%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Ubuntu/CentOS &amp; VScode &amp; Git<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="85%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <div class="item">
                                    <h3 class="level-title">Mobile - React Native<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="You can use the tooltip to explain more about your skill level..."><i class="fas fa-info-circle"></i>Beginner</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="25%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <p><a class="more-link" href="https://github.com/imvasha"><i class="fas fa-external-link-alt"></i>More on GitHub</a></p>
                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                {{-- <aside class="testimonials aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">
                                    <p><i class="fas fa-quote-left"></i>Ivan is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>
                                <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>
                            </div><!--//item-->

                            <p><a class="more-link" href="#"><i class="fas fa-external-link-alt"></i>More on Linkedin</a></p>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

                <aside class="education aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Udemy </h3>
                                <h4 class="university">Larvel/VueJs<span class="year">(2019-2020)</span></h4>
                                <h4 class="university">React JS<span class="year">(2019-2020)</span></h4>
                                <h4 class="university">React Native <span class="year">(2019-2020)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> FreeCodeCamp </h3>
                                <h4 class="university">Laravel <span class="year">(2019)</span></h4>
                                <h4 class="university">JavaScript <span class="year">(2019)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fas fa-graduation-cap"></i> Web Programming</h3>
                                <h4 class="university">Lunux Servers <span class="year">(2019)</span></h4>
                                <h4 class="university">JavaScript <span class="year">(2018)</span></h4>
                                <h4 class="university">PHP/SQL <span class="year">(2018)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="languages aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>Russian:</strong></span>
                                    <span class="level">Native Speaker <br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>English:</strong></span>
                                    <span class="level"> Professional <br class="visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong>Portuges:</strong></span>
                                    <span class="level">Beginner <br class="visible-sm visible-xs"/><i class="fas fa-star"></i> <i class="fas fa-star-half"></i></span>
                                </li><!--//item-->

                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                {{-- <aside class="blog aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Latest Blog Posts</h2>
                        <p>You can use Sascha Depold's <a href="https://github.com/sdepold/jquery-rss" target="_blank">jQuery RSS plugin</a> to pull in your blog post feeds.</p>
                        <div id="rss-feeds" class="content">

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

                <aside class="list music aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Favourite music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-headphones"></i> <a href="https://soundcloud.com/imvasha">Soundcloud profile</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                {{-- <aside class="list conferences aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Conferences</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="far fa-calendar-alt"></i> <a href="#" target="_blank">WWDC 2020</a> (San Francisco)</li>
                                <li><i class="far fa-calendar-alt"></i> <a href="#">Hive</a> (Seattle)</li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

                {{-- <aside class="credits aside section">
                    <div class="section-inner shadow-sm rounded">
                        <h2 class="heading">Credits</h2>
                        <div class="content">
                            <ul class="list-unstyled pb-2">
                                <li><a href="https://getbootstrap.com/" target="_blank"><i class="fas fa-external-link-alt"></i>Bootstrap</a></li>
                                <li><a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fas fa-external-link-alt"></i>FontAwesome</a></li>
                                <li><a href="https://jquery.com/" target="_blank"><i class="fas fa-external-link-alt"></i>jQuery</a></li>
                                <li><a href="https://github.com/IonicaBizau/github-calendar" target="_blank"><i class="fas fa-external-link-alt"></i>GitHub Calendar Plugin</a></li>

                                <li><a href="https://caseyscarborough.com/projects/github-activity/" target="_blank"><i class="fas fa-external-link-alt"></i>GitHub Activity Stream</a></li>

                                <li><a href="https://github.com/sdepold/jquery-rss" target="_blank"><i class="fas fa-external-link-alt"></i>jQuery RSS</a></li>

                                <li>Profile image: <a href="https://www.flickr.com/photos/dotbenjamin/2577394151" target="_blank">Ben Smith</a></li>
                            </ul>

                            <hr/>

                             <p class="pt-2">This Bootstrap 4 portfolio template is handcrafted by UX designer <a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying Riley</a> at <a href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a> for developers and is <strong>FREE</strong> as long as you keep the footer attribution link.</p>
                             <p>If you’d like to <strong>use this template without the attribution link</strong>, you can <a href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap-portfolio-theme-for-web-developers/" target="_blank">buy the commercial license</a>.</p>

                             <a class="btn btn-cta-primary btn-download" href="https://themes.3rdwavemedia.com/bootstrap-templates/resume/free-bootstrap-portfolio-theme-for-web-developers/" target="_blank"><i class="fas fa-download"></i> I want to download</a>
                            <hr/>
                            <h5 class="subheading pt-3">Want more free Bootstrap themes and templates?</h5>
                            <p>Check out our <a href="https://themes.3rdwavemedia.com/bootstrap-templates/free/">collection of free themes and templates.</a></p>
                            <p>Follow <a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying</a> on twitter so you don't miss any future freebies!</p>

                            <a class="btn btn-cta-secondary btn-follow" href="https://twitter.com/3rdwave_themes" target="_blank"><i class="fab fa-twitter"></i> Follow on twitter</a>

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section--> --}}

            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="container text-center">
                <!--/* This template is free as long as you keep the attribution link below. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
                <small class="copyright">Designed with <i class="fas fa-heart"></i> by <a href="https://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- Javascript -->
    <script type="text/javascript" src="assets/plugins/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/popper.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script>
    <!-- github calendar plugin -->
    <script type="text/javascript" src="assets/plugins/github-calendar/dist/github-calendar.min.js"></script>
    <!-- github activity plugin -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/github-activity-0.1.5.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script>

    <script>
        GitHubActivity.feed({
            username: "imvasha",
            repository: "marusya", // optional
            selector: "#feed",
            limit: 20 // optional
        });
        GitHubCalendar(".calendar", "imvasha");
    </script>
</body>
</html>

