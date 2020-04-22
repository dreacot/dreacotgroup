<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119940611-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-119940611-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dreacot provides web design and development services, web management services, app development services, and also graphic design services">
    <meta name="keywords" content="web design, web development, app development, graphics design, animation, web management, app management" />
    <meta name="author" content="Dreacot">
    <title>Our Services - Web Design, Web Management, App Development | Dreacot</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">

</head>

<body>
    <div id="preloader">
        <div class="spinner spinner-round"></div>
    </div>

    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>We deliver nothing but quality service</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/Dreacot" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/11290446/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="mailto:info@dreacot.com"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="tel:+2348159827634"><i class="fa fa-phone"></i> +234 815 982 7634</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-wrapper">
            <nav class="navbar navbar-default affix" id="title" data-spy="affix" data-offset-top="32">
                <div class="container">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <div class="" onclick="myFunction(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <a href="/" class="navbar-brand hvr-underline-from-center" style="height:70px; width:252px;">
                        <img style="width:100%; height:100%;" src="img/logoa.png" srcset="img/logoa.png 2x, img/logoa.png 3x"
                            alt="Post">
                    </a>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                        <ul class="nav navbar-nav main-navbar-nav">
                            <li class="hvr-underline-from-center"><a href="/" title="">HOME</a></li>
                            <li><a class="hvr-underline-from-center" href="ourwork.php" title="">OUR WORK</a></li>
                            <li class="active hvr-underline-from-center"><a href="ourservices.php" title="">OUR
                                    SERVICES</a></li>
                            <li><a class="hvr-underline-from-center" href="aboutus.php" title="">ABOUT US</a></li>
                            <li><a class="hvr-underline-from-center" href="contact.php" title="">CONTACT US</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <!-- END MAIN NAVIGATION -->
                </div>
            </nav>
        </div>
    </header>
    <style>
        .hardware-software {
            display: table;
        }

        .panel {
            width: 100vw;
            max-width: 100%;
            min-height: 100px;
            background-size: contain;
            background-repeat: no-repeat;
            position: relative;
            overflow: hidden;
        }



        .hardware-software-text {
            background-color: steelblue;
            color: #fff;
            padding-bottom: 230px;
            padding-top: 230px;
        }

        .ceo-text {
            background-color: #555555;
            color: #fff;

            padding-bottom: 58px;
            padding-top: 200px;
        }

        .pane-text1 {
            font-size: 18px;
            margin: 0;

        }

        @media (max-width: 768px) {
            .pane-text1 {
                font-size: 14px;
                padding: 10px 5px;
            }
        }

        .pane-text {
            font-size: 34px;
            margin: 0;

        }

        @media (max-width: 768px) {
            .pane-text {
                font-size: 14px;
                padding: 10px 5px;
            }
        }

        .text-pane {
            vertical-align: middle;
            text-align: center;
        }

        .pane {
            display: table-cell;
            width: 50%;
        }

        .pane-image {
            width: 100%;
        }

        .message {
            font-size: 11px
        }

        .parallax {
            /* The image used */
            background-image: url("scroll.jpg");

            /* Set a specific height */
            min-height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .btn {
            background-color: steelblue;
            border: 1px solid steelblue;
            color: white;
            padding: 16px 32px;
            text-align: center;
            font-size: 16px;
            transition: 0.5s;
            border-radius: 0px;
        }

        .btn:hover {
            background-color: black;
            color: white;
            border: 1px solid black;
        }

        .set {
            background-color: #333;
            color: white;

        }

        .set1 {
            background-color: white;
            color: #333;

        }

        #pricing {
            padding-top: 60px;
            padding-left: 30px;
            padding-right: 30px;
        }

        .stacked>.col-sm-4,
        .stacked>.col-md-3 {
            padding-left: 0;
            padding-right: 0;
        }

        .stacked .pricing-table {
            position: relative;

        }

        .stacked .pricing-table {
            -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1);
        }

        .pricing-table {
            background: #f8f8f8;
            text-align: center;
            margin-bottom: 30px;
        }

        .pricing-title {
            color: white;
            background-color: #333333;
            font-size: 18px;
            font-weight: 700;
            padding: 30px;
        }

        .pricing-table-price {
            font-weight: 700;
            padding: 30px 20px;
        }

        .pricing-currency {
            font-size: 18px;
            font-weight: 700;
            vertical-align: 30px;
        }

        .pricing-price {
            font-size: 45px;
            font-weight: 700;
        }

        .pricing-period {
            font-weight: 700;
        }

        .pricing-table-price p {
            color: #111111;
        }

        .pricing-table ul,
        .pricing-table ol {
            margin-bottom: 0;
            text-transform: uppercase;
            font-weight: 700;
        }

        ul,
        ol {
            padding-left: 16px;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .pricing-table-content li {
            margin-bottom: 15px;
        }

        li {
            color: #666666;
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.05em;
        }

        .pricing-table ul span {
            font-weight: 800;
            letter-spacing: 0.1em;
        }

        .text-primary {
            color: steelblue;
        }

        .pricing-table-button {
            padding: 15px 0 35px;
        }

        a.btn {
            white-space: nowrap;
        }

        .stacked .featured.pricing-table {
            position: relative;

            margin-top: -32px;
        }

        .featured .pricing-title {
            background-color: steelblue;
        }

        .stacked .featured .pricing-table-price {
            padding: 45px 20px;
        }

        .featured .pricing-currency {
            color: steelblue;
        }

        .featured .pricing-price {
            color: steelblue;
        }

        .stacked .featured .pricing-table-button {
            padding: 35px 0 55px;
        }


        #page-content {
            padding: 50px 0;

            margin-top: 800px;
        }

        /* Style the tab */
        .tab {
            float: right;
            border: 1px solid #ccc;
            background-color: #eee;
            width: 30%;

        }

        /* Style the buttons inside the tab */
        .tab button {

            display: block;
            background-color: #333;
            color: white;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.5s;
            font-size: 17px;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            -webkit-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #111;
            color: white;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: steelblue;
            color: white;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-right: none;
            background: url(img/dot.jpg) repeat;

        }

        .content {

            animation: slide-down 1s ease-out;
        }


        @keyframes slide-down {
            0% {
                opacity: 0;
                transform: translateY(100%);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert {
            padding: 20px;
            background-color: steelblue;
            opacity: 0.9;
            font-size: 16px;
            color: white;
            border-radius: 0;
            margin-bottom: 0;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 25px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.5s;

        }

        .closebtn:hover {
            color: #eee;

        }

        .nta {
            text-decoration: line-through;
            color: rosybrown
        }

        ul.bullets li:before {
            text-shadow: none;
            -webkit-font-smoothing: antialiased;
            font-family: 'fontawesome';
            speak: none;
            font-weight: normal;
            font-variant: normal;
            line-height: 1;
            text-transform: none;
            content: "\f111";
            color: tomato;
            margin-right: 15px;
            font-size: 8px;
            position: relative;
            bottom: 2px;
        }

        ul.bullets li {
            padding: 5px 0;
        }

        .pad {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        h2.service-title {
            color: steelblue;
            padding-top: 10px;
        }

        @media (max-width: 768px) {
            h2.service-title {
                font-size: 25px !important;
            }
        }

        @media (max-width: 768px) {
            .red {
                font-size: 12px !important;
            }
        }
    </style>

    <main class="site-main category-main">
        <!--
        <div class="alert text-center">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Get 10% Discount</strong> on all services this April !
</div>
-->

        <div style=" background-color: #333">

            <h2 class="section-title" style="margin: 0; padding-top: 50px; padding-bottom: 50px;word-wrap:break-word; color: white; font-size: 40px">OUR
                SERVICES</h2>
        </div>


        <div class="tab">
            <button class="tablinks red" onclick="openCity(event, 'webdesgn')" id="defaultOpen">Web Design</button>
            <button class="tablinks red" onclick="openCity(event, 'webdev')">Web Development</button>
            <button class="tablinks red" onclick="openCity(event, 'webmgmt')">Web Management</button>
            <button class="tablinks red" onclick="openCity(event, 'grapdes')">Graphics Design & Animation</button>
            <button class="tablinks red" onclick="openCity(event, 'appdev')">App Development</button>
            <button class="tablinks red" onclick="openCity(event, 'appmgmt')">App Management</button>
        </div>




        <div id="webdesgn" class="tabcontent">

            <div>
                <h2 class="service-title section-title ">WEB DESIGN</h2>
                <div class="content text-center">
                    <p>Your website has just a few seconds to make a great first impression.
                        A website can be considered more or less an online office, that said, it
                        is obvious every business needs one that stands out.
                        With an attractive design, friendly layout and the right language,
                        you can make your visitors your customers and we’re here to help make that happen.
                    </p>

                    <p>
                        Dreacot designs websites with class, purpose and the wow factor. We provide our website design
                        services to
                        all kind of businesses with our goal to design a website that adequately reflect your brand.
                        We build websites that are not only visually beautiful, but also functionally effective.
                        Are you ready to get started? We are... </p>




                    <div style=" padding-top: 40px; padding-bottom: 40px; text-align: center">

                        <img src="img/design.png" style=" width: 50%" align="center">

                    </div>


                </div>



            </div>

        </div>

        <div id="webdev" class="tabcontent">
            <div>
                <h2 class="section-title service-title">WEB DEVELOPMENT</h2>
                <div class="content text-center" style="margin: 0 auto;">
                    <p>Through dedication and commitment, our Web Development speaks for itself.
                        Our web development service helps our clients grow their businesses online.</p>
                    <p>At Dreacot, we build websites that are attractive, effective and functional.
                        Our qualified team of designers, developers, and strategists work together
                        to ensure the objective of every project is met.</p>

                    <p>Dreacot has been developing mobile applications for the past 2 years and web applications for
                        the past year, we've built websites for different clients which
                        include from corporate websites, online stores and blogs.
                        We develop both custom web applications for clients and content management systems like
                        Wordpress.</p>

                    <div style=" padding-top: 40px; padding-bottom: 40px; text-align: center">

                        <img src="img/web.jpg" style=" width: 50%" align="center">
                        <p style=" font-size: 10px">Some of the tools and frameworks we work with</p>
                    </div>

                    <h2 class="section-title" style="color: steelblue;font-size: 30px; ">Our web development service
                        include</h2>

                    <ul class="bullets">
                        <li>E-commerce Web Development</li>

                        <li>Custom Web Application Development</li>

                        <li>Content Management System(CMS)</li>

                        <li>Corporate Websites</li>

                        <li>Personal Websites</li>

                        <li>and more.</li>
                    </ul>


                    <h2 style="color: steelblue ;">How we do it:</h2>
                    <p>We've put in various steps and processes in place, to ensure we deliver the complete user
                        experience working with us</p>
                    <ul>
                        <li class="pad"><span style="color: tomato ; font-weight: 600">Inception:</span>This is where
                            it all starts,
                            our team meets with the client to get a deep understanding of the client’s
                            business and their objectives, this enables us develop a befitting website to that would
                            target our clients' market </li>
                        <li class="pad"><span style="color: tomato ; font-weight: 600">Design: </span> Our team then
                            presents the client with designs that suits their business.
                            Here, if the client has any changes or adjustment to the design, we would make sure they
                            are corrected until the client
                            is totally satisfied with the design. It would be important to note that these are just
                            designs without functionality yet</li>
                        <li class="pad"><span style="color: tomato ; font-weight: 600">Develop: </span>Once the design
                            is approved, our team slowly starts to bring your design to life
                            by developing and implementing function to your site, with the various development
                            frameworks and languages we work it. At this stage we collaborate
                            continuously with the client, so they can get a first hand of what their site looks like
                            and also provide necessary
                            content for the website and deliver a well-planned user experience</li>
                        <li class="pad"><span style="color: tomato ; font-weight: 600">Launch: </span>Once development
                            and testing is complete, we bring
                            your site to life and take your business to the next level</li>
                        <li class="pad"><span style="color: tomato ; font-weight: 600">Support: </span> For some
                            companies, launching is where it ends,
                            but for us it's where it all starts. We are here and ready to offer you any support you
                            would need to keep
                            your business moving. As your business grows, we are ready to be your partner for growth
                            and success</li>

                    </ul>

                </div>



            </div>
        </div>

        <div id="webmgmt" class="tabcontent ">



            <div>
                <h2 class="section-title service-title">WEB MANAGEMENT</h2>
                <div class="content text-center">
                    <p>Website management is a whole bunch of different services put together to keep a website
                        running.
                        Essentially, we leave all the boring desk work to you and take on the fun part of your
                        business(Your Website!), just tell
                        us what you need and we'll deliver.
                        Web Management comprises of three major categories: Security, content management, and website
                        support.</p>

                    <p>At Dreacot, We can provide these oversight for your website, giving you peace of mind, and
                        allowing you to get on with running your business.
                        We'll monitor your website from time to time, seamlessly integrating updates, new features,
                        fixing bugs
                        and taking appropriate action to rectify things. We'll also alert you to any significant
                        issues,
                        advise you of the best way forward and the likely cost to do so..</p>

                    <p>Our most common packages are shown below, but we are a partner that works for you, so whether
                        you need hourly rates,
                        or custom packages, we've got you covered</p>

                    <div style=" padding-top: 40px; padding-bottom: 40px; text-align: center">

                        <img src="img/manage.png" style=" width: 80%" align="center">
                    </div>
                    <p>&nbsp;</p>
                    <h2 class="section-title" style="color: steelblue;font-size: 30px " align=" center">Our web
                        management service covers</h2>
                    <ul class="bullets">
                        <li>Website Content Management</li>
                        <li>Website Backup</li>
                        <li>Website Security</li>
                        <li>Website Optimization</li>
                        <li>Graphic Design</li>
                        <li>Performance Audits</li>
                        <li>Technical support</li>
                        <li>Managed Hosting and many more...</li>
                    </ul>


                </div>


            </div>


            <!-- stacked pricing table 3col -->
            <div id="pricing">
                <div class="row stacked">
                    <!-- pricing-table -->
                    <div class="col-sm-4">
                        <div class="pricing-table">
                            <div class="pricing-table-title">
                                <h5 class="pricing-title">BASIC</h5>
                            </div>
                            <div class="pricing-table-price">
                                <p>
                                    <span class="pricing-currency">$</span>
                                    <span class="pricing-price">28</span>
                                    <span class="pricing-period">/ month</span>
                                </p>
                            </div>
                            <div class="pricing-table-content">
                                <ul>
                                    <li><span class="text-primary">1 Free Month on Yearly Purchase</span></li>
                                    <li><strong>30mins Technical Support</strong></li>
                                    <li>Full Site Backup</li>
                                    <li>24/7 Email Support</li>
                                    <li>Monthly Reports</li>
                                    <li>Wordpress Update</li>
                                    <li>Fully Managed Hosting</li>
                                    <li class="nta">Yearly Performance Audit</li>
                                    <li class="nta">Content Management</li>
                                    <li class="nta">Web Security</li>
                                    <li class="nta">Graphics Design</li>
                                    <li class="nta">Spam Block</li>
                                    <li class="nta">Website Speed Increase</li>
                                    <li class="nta">Database Optimisation</li>
                                    <li class="nta">Uptime Monitoring</li>

                                </ul>
                                <div class="pricing-table-button">
                                    <a href="contact.php" class="btn btn-primary-filled"><strong>CONTACT US</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / pricing-table -->
                    <!-- pricing-table -->
                    <div class="col-sm-4">
                        <div class="featured pricing-table">
                            <div class="pricing-table-title">
                                <h5 class="pricing-title">STANDARD</h5>
                            </div>
                            <div class="pricing-table-price">
                                <p>
                                    <span class="pricing-currency">$</span>
                                    <span class="pricing-price">50</span>
                                    <span class="pricing-period">/ month</span>
                                </p>
                            </div>
                            <div class="pricing-table-content">
                                <ul>
                                    <li><span class="text-primary">1 Free Month on Yearly Purchase</span></li>
                                    <li> <strong>1 hrs Technical Support</strong> </li>
                                    <li>Full Site Backup</li>
                                    <li>24/7 Email Support</li>
                                    <li>Monthly Reports</li>
                                    <li>Wordpress Update</li>
                                    <li>Fully Managed Hosting</li>
                                    <li>Yearly Performance Audit</li>
                                    <li>Content Management</li>
                                    <li>Web Security</li>
                                    <li class="nta">Graphics Design</li>
                                    <li class="nta">Spam Block</li>
                                    <li class="nta">Website Speed Increase</li>
                                    <li class="nta">Database Optimisation</li>
                                    <li class="nta">Uptime Monitoring</li>
                                </ul>
                                <div class="pricing-table-button">
                                    <a href="contact.php" class="btn btn-lg btn-primary-filled"><strong>CONTACT US</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / pricing-table -->
                    <!-- pricing-table -->
                    <div class="col-sm-4">
                        <div class="pricing-table">
                            <div class="pricing-table-title">
                                <h5 class="pricing-title">ENTERPRISE</h5>
                            </div>
                            <div class="pricing-table-price">
                                <p>
                                    <span class="pricing-currency">$</span>
                                    <span class="pricing-price">85</span>
                                    <span class="pricing-period">/ month</span>
                                </p>
                            </div>
                            <div class="pricing-table-content">
                                <ul>
                                    <li><span class="text-primary">1 Free Month on Yearly Purchase</span></li>
                                    <li><strong>2 hrs Technical Support</strong></li>
                                    <li>Full Site/Database Backup</li>
                                    <li>24/7 Email & Call Support</li>
                                    <li>Monthly Reports</li>
                                    <li>Wordpress Update</li>
                                    <li>Fully Managed Hosting</li>
                                    <li>Yearly Performance Audit</li>
                                    <li>Content Management</li>
                                    <li>Web Security</li>
                                    <li>Graphics Design</li>
                                    <li>Spam Block</li>
                                    <li>Website Speed Increase</li>
                                    <li>Database Optimisation</li>
                                    <li>Uptime Monitoring</li>
                                </ul>
                                <div class="pricing-table-button">
                                    <a href="contact.php" class="btn btn-primary-filled"><strong>CONTACT US</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / pricing-table -->
                </div><!-- / row -->
            </div><!-- / pricing -->
            <!-- / stacked pricing table 3col -->
        </div>

        <div id="grapdes" class="tabcontent">
            <div>
                <h2 class="section-title service-title">GRAPHICS DESIGN & ANIMATION</h2>
                <div class="content text-center">
                    <p>Your brand's visual resource should make a stunning first impression,
                        We want to implement your vision together with our creativity and transform your
                        business to a new level. Our graphic design services covers a wide range of categories,
                        too robust to overlook your needs.</p>

                    <p> Want to pass a message across with more than just pictures? Let out team create powerful
                        2D animation, captivating your audience in one move. These animations would go great
                        in commercials, stories and what not, and we are here to help you stand out. </p>

                    <p>Staying up to date with the world of design is critical, at Dreacot,
                        we believe every design should create a positive experience and have a clear communication with
                        the target audience.</p>


                    <div style=" padding-top: 40px; padding-bottom: 40px; text-align: center">

                        <img src="img/graph.png" style=" width: 50%" align="center">
                    </div>

                    <p>&nbsp;</p>
                    <h2 class="section-title" style="color: steelblue;font-size: 30px ">Our graphic design service
                        covers</h2>
                    <ul class=" bullets">
                        <li>Logo Design</li>
                        <li>User Interface Design ( UI )</li>
                        <li>Website Design ( PSD )</li>
                        <li>Business Card Design</li>
                        <li>2D Animation</li>
                        <li>Infographics</li>
                        <li>Illustration</li>
                        <li>Packaging design</li>
                        <li>Multimedia Presentation</li>
                        <li>and more.</li>
                    </ul>



                </div>



            </div>
        </div>

        <div id="appdev" class="tabcontent">
            <div>
                <h2 class="section-title service-title">APP DEVELOPMENT</h2>
                <div class="content text-center">
                    <p>It's the 21st Century, and the mobile phone is the most powerful digital media out there.
                        What's not to love about it, from instant messaging to the much needed voice calls,
                        and the power of the internet, 9 out of every 10 persons you meet probably has a smart phone.
                        It is the first screen we look at in the morning, and the last screen at night.
                        Nearly every business is seeking an app development program to better reach current and
                        potential customers.
                    </p>

                    <p>If you want your business to have an edge over the competiton, mobile application development
                        might be the perfect solution for you. Give your users the customized experience they deserve
                        on their mobile device.</p>

                    <p>We develop mobile application for iOS and Android devices.
                        Don't get left behind, the future starts with you.</p>

                    <div style=" padding-top: 0px; padding-bottom: 40px; text-align: center">

                        <img src="img/app.jpg" style=" width: 50%" align="center">

                    </div>
                </div>


            </div>
        </div>

        <div id="appmgmt" class="tabcontent">
            <div>
                <h2 class="section-title service-title">APP MANAGEMENT</h2>
                <div class="content text-center">
                    <p> App management, is about keeping your app up-to-date, bug-free and functional.
                        As your app grows, you acquire users and get feedback, this gives you an idea of
                        what you need to be doing differently. App maintenance may sounds expensive,
                        but it’s the only way to ensure that you get returns on the investment you made in the app
                        development phase.
                        Many factors can cause an application not to run as expected, from operating system updates to
                        security threats, our management service ensures that your app is in good hands, throughout
                        it's lifecycle. </p>

                    <p> A lot of companies are ready budget for an application's development phase, but many fail
                        to budget for the app's maintenance phase, what they don't realise, is that the money is
                        eventually
                        going to be spent, either under critical conditions, or just a routine maintenance process.
                        At Dreacot, we have various packages to suit your budget. from hourly, monthly or project based
                        packages,
                        we've got you covered. If an issue comes up with your app, no need to worry, our management
                        contract ensures that there is a team ready to resolve the issue. We are you partner for
                        digital success, give us a call now.</p>

                    <p> </p>
                    <div style=" padding-top: 40px; padding-bottom: 40px; text-align: center">

                        <img src="img/appm.jpg" style=" width: 50%" align="center">

                    </div>
                    <h2 class="section-title" style="color: steelblue;font-size: 30px ">Our application management
                        service covers</h2>
                    <ul class=" bullets">
                        <li>Re-design</li>
                        <li>Re-deployment</li>
                        <li>App Hosting</li>
                        <li>App Security</li>
                        <li>App Optimisation</li>
                        <li>Updates</li>
                        <li>Real time analytics</li>
                        <li>Backups</li>
                        <li>and more.</li>
                    </ul>



                </div>



            </div>
        </div>
        <!-- 
  <div class="tab" style="height:400px; width:404px; background-color:whitesmoke; color:black">
 <p style=" vertical-align: center"> View our portfolio</p>
</div>
-->
    </main>
    <footer class="site-footer">
        <div class="container text-center">
            <!-- Allow the contact us be at the foremost left hand side-->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">

                    <h4><a style="color:steelblue; text-decoration: none" href="ourservices.php ">OUR SERVICES</a></h4>
                    <a>
                        <p class="text">Website Design</p>
                    </a>
                    <a>
                        <p class="text">Website Development</p>
                    </a>
                    <a>
                        <p class="text">Website Management</p>
                    </a>
                    <a>
                        <p class="text">Graphic Design & Animation</p>
                    </a>
                    <a>
                        <p class="text">Application Development</p>
                    </a>
                    <a>
                        <p class="text">Application Management</p>
                    </a>


                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4><a style="color:steelblue; text-decoration: none " href="aboutus.php#strategicalliances ">STRATEGIC
                            ALLIANCES</a></h4>
                    <p class="text">Dreacot builds to become the premium software development brand in Africa, and
                        subsequently across all continents through our Strategic Alliances. To complete our milestone,
                        we liaise with our syndicates to ensure we deliver only the best of services</p>

                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4><a style="color:steelblue; text-decoration: none " href="aboutus.php#strategicpartnership">STRATEGIC
                            PARTNERSHIPS</a></h4>
                    <p class="text">Dreacot has also entered into Strategic Partnerships in line with becoming the
                        premium software development brand in Africa. Through our partnerships, we provide exclusive
                        services through our robust distribution network, to our clients</p>

                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4><a style="color:steelblue;  text-decoration: none" href="contact.php#conct">CONTACT US</a></h4>

                    <p><a href="tel:+2348159827634"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                            +234 815 982 7634</a></p>
                    <p><a href="mailto:info@dreacot.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                            info@dreacot.com</a></p>
                    <br>
                    <a href="quote.php">
                        <button class="btn">REQUEST A QUOTE</button>
                    </a>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span>
                            <p class="pull-left">&copy; <script>document.write(new Date().getFullYear());</script> DREACOT |</p>

                            <a href="privacypolicy.php">
                                <p>&nbsp Privacy Policy <p>
                            </a>

                        </span>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Add scrollspy to <body>
            $('body').scrollspy({ target: ".navbar", offset: 50 });

            // Add smooth scrolling on all links inside the navbar
            $("#bs-navbar-collapse a").on('click', function (event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                }  // End if
            });
        });

        (function ($, window) {
            var adjustAnchor = function () {

                var $anchor = $(':target'),
                    fixedElementHeight = 40;

                if ($anchor.length > 0) {

                    $('html, body')
                        .stop()
                        .animate({
                            scrollTop: $anchor.offset().top - fixedElementHeight
                        }, 200);

                }

            };

            $(window).on('hashchange load', function () {
                adjustAnchor();
            });

        })(jQuery, window);


    </script>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>
    <!-- preloader -->
    <script src="js/preloader.js"></script>
    <!-- / preloader -->
</body>

</html>