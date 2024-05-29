<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="freehtml5.co" />

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/ummi.png);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                                <div class="profile-thumb" style="background: url(images/profil.jpeg);"></div>
                                <h1><span>Aldy Ramadani</span></h1>
                                <h3><span>Student</span></h3>
                                <p>
                                <ul class="fh5co-social-icons">
                                    <li><a href="https://www.twitter.com/aldyramadani15"><i class="icon-twitter2"></i></a></li>
                                    <li><a href="https://www.github.com/aldyramadani15"><i class="icon-github2"></i></a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/in/aldyrstuvwxyz"><i class="icon-linkedin2"></i></a></li>
                                    <li><a href="https://www.instagram.com/aldyrstuvw.xyz/"><i class="icon-instagram2"></i></a></li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="fh5co-about" class="animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>About Me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="info">
                            <li><span class="first-block">Full Name:</span><span class="second-block"><?= esc($about['name']) ?></span></li>
                            <li><span class="first-block">Phone:</span><span class="second-block"><?= esc($about['hp']) ?></span>
                            </li>
                            <li><span class="first-block">Email:</span><span class="second-block"><?= esc($about['email']) ?></span></li>
                            <li><span class="first-block">Address:</span><span class="second-block">
                                    <?= esc($about['addres']) ?></span></li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <h2>Hello There!</h2>
                        <p><?= esc($about['hello']) ?></p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://www.twitter.com/"><i class="icon-twitter2"></i></a></li>
                            <li><a href="https://www.github.com/aldyramadani15"><i class="icon-github2"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/aldyrstuvwxyz/"><i class="icon-linkedin2"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/aldyrstuvw.xyz/"><i class="icon-instagram2"></i></a>
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-resume" class="fh5co-bg-color">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>My Resume</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline">
                            <li class="timeline-heading text-center animate-box">
                                <div>
                                    <h3>Work Experience</h3>
                                </div>
                            </li>
                            <li class="animate-box timeline-unverted">
                                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Admin Staff and Deputy Branch Head</h3>
                                        <span class="company">J&T Express 2019 - 2020</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Communicate and resolving problems with customer complaints, if there are
                                            problems with packages such as not being sent, damaged or lost, receiving
                                            and inputting data, sorting, making daily, weekly and monthly reports.
                                            Selling goods such as goods packaging equipment.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Admin Staff</h3>
                                        <span class="company">KANTOR POS INDONESIA 2018 - 2019</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Who specializes in communicating with customers, receiving and collecting
                                            goods, inputting data, sorting, creating daily, weekly and monthly reports.
                                            Sells postage and philatelic items such as stamps, postcards, envelopes and
                                            equipment for wrapping parcels.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box timeline-unverted">
                                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Computer Store Clerk</h3>
                                        <span class="company">Mulya Computer 2018 - 2018</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>First internship after graduating from school, activities to help shop owners
                                            such as serving customers,
                                            communicating with customers and solving what they want to serve or what
                                            customers need.</p>
                                    </div>
                                </div>
                            </li>

                            <br>
                            <li class="timeline-heading text-center animate-box">
                                <div>
                                    <h3>Education</h3>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">University</h3>
                                        <span class="company">Informatics Engineering - In Process</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>UNIVERSITAS MUHAMMADIYAH SUKABUMI</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box timeline-unverted">
                                <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Vocational School</h3>
                                        <span class="company"> Computer and Network Engineering - 2018</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>SMK TUNAS HARAPAN BANGSA CIANJUR</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Junior High School</h3>
                                        <span class="company"> - 2015</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>SMP NEGERI 3 KOTA SUKABUMI</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box timeline-unverted">
                                <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Elementary School</h3>
                                        <span class="company"> - 2012</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>SDN WARUDOYONG 2 KOTA SUKABUMI</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-skills" class="animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Skills</h2>
                    </div>
                </div>
                <div class="row row-pb-md">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="95"><span><strong>Web Development</strong>95%</span></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="93"><span><strong>UI/UX</strong>90%</span></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="90"><span><strong>Desain Grafis</strong>95%</span></div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="89"><span><strong>PHP</strong>90%</span></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="85"><span><strong>MySQL</strong>85%</span></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="90"><span><strong>Photography</strong>95%</span></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="85"><span><strong>Copy Writing</strong>85%</span></div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="chart" data-percent="90"><span><strong>Bootstrap</strong>95%</span></div>
                    </div>
                </div>
                <div id="fh5co-blog">
                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                <h2>My Project</h2>
                                <p>Every experience in technology project development is full of challenges,
                                    but also full of satisfying learning and achievements.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#" class="blog-bg" style="background-image: url(images/komputer.jpg);"></a>
                                    <div class="blog-text">
                                        <span class="posted_on">Des. 15th 2023</span>
                                        <h3><a href="#">School Website</a></h3>
                                        <p>This project aims to develop a website that facilitates the process of
                                            borrowing
                                            books in school libraries.
                                            This website is designed to make it easier for librarians to manage book
                                            inventory,
                                            monitor loan status, and make it easier for students and staff to find and
                                            borrow
                                            books.</p>
                                        <ul class="stuff">
                                            <li><i class="icon-heart2"></i>999</li>
                                            <li><i class="icon-eye2"></i>990</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#" class="blog-bg" style="background-image: url(images/android.png);"></a>
                                    <div class="blog-text">
                                        <span class="posted_on">Des. 2nd 2023</span>
                                        <h3><a href="#">Project Android</a></h3>
                                        <p>I have successfully developed a mobile application for hotel booking using
                                            Android
                                            Studio.
                                            This application is designed to make it easier for users to search, book and
                                            manage
                                            hotel reservations with user-friendly features and strong backend
                                            integration.</p>
                                        <ul class="stuff">
                                            <li><i class="icon-heart2"></i>998</li>
                                            <li><i class="icon-eye2"></i>991</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="fh5co-started" class="fh5co-bg-dark">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                <h2>Hire Me!</h2>
                                <p>If you have any questions, you can contact me below.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="fh5co-consult">
                    <div class="video fh5co-video" style="background-image: url(images/profil2.jpeg);">
                        <div class="overlay"></div>
                    </div>
                    <div class="choose animate-box">
                        <h2>Contact</h2>
                        <form action="#">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <input type="text" id="fname" class="form-control" placeholder="Your firstname">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="text" id="email" class="form-control" placeholder="Your email address">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>

                <div id="map" class="fh5co-map"></div>
            </div>

            <div id="fh5co-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy; 2017 Free HTML5 Template. All Rights Reserved. <br>Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gototop js-top">
                <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
            </div>

            <!-- jQuery -->
            <script src="js/jquery.min.js"></script>
            <!-- jQuery Easing -->
            <script src="js/jquery.easing.1.3.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Waypoints -->
            <script src="js/jquery.waypoints.min.js"></script>
            <!-- Stellar Parallax -->
            <script src="js/jquery.stellar.min.js"></script>
            <!-- Easy PieChart -->
            <script src="js/jquery.easypiechart.min.js"></script>
            <!-- Google Map -->


            <!-- Main -->
            <script src="js/main.js"></script>

</body>

</html>