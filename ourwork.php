<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119940611-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119940611-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Here are some of the works we have done for our clients, dreams we have brought to reality!">
    <meta name="keywords"
        content="web design, web development, app development, graphics design, animation, web management, app management" />
    <meta name="author" content="Dreacot">
    <title>Web Design Portfolio - Web Development Portfolio - Lagos | Dreacot</title>


    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link href="style.css" rel="stylesheet">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                            <li><a href="https://twitter.com/Dreacot" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/company/11290446/" target="_blank"><i
                                        class="fa fa-linkedin"></i></a></li>
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <div class="" onclick="myFunction(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <a href="/" class="navbar-brand hvr-underline-from-center" style="height:70px; width:252px;">
                        <img style="width:100%; height:100%;" src="img/logoa.png"
                            srcset="img/logoa.png 2x, img/logoa.png 3x" alt="Post">
                    </a>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                        <ul class="nav navbar-nav main-navbar-nav">
                            <li class="hvr-underline-from-center"><a href="/" title="">HOME</a></li>
                            <li class="active hvr-underline-from-center"><a href="ourwork.php" title="">OUR WORK</a>
                            </li>
                            <li><a class="hvr-underline-from-center" href="ourservices.php" title="">OUR SERVICES</a>
                            </li>
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
    .portfolio-item {
        margin-bottom: 30px;
    }

    .h-100 {
        height: 100% !important;
    }

    .card1 {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card1:hover {
        opacity: 0.9;
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(.25rem - 1px);
        border-top-right-radius: calc(.25rem - 1px);
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-title {
        color: steelblue;
        font-weight: 600
    }

    .card-title:hover {
        color: orange;


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

    .btnc {
        background-color: black;
        border: 2px solid white;
        color: white;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        transition: 0.5s;
        border-radius: 0px;
        position: absolute;
        top: 80%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
    }



    .holder1 {
        position: relative;
        margin-bottom: 40px;

    }



    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 15px;
        right: 15px;
        display: block;
        content: "";
        background-color: #111;
        overflow: hidden;

        -webkit-transform: scale(0);
        transition: .5s ease;


    }

    .holder1:hover .overlay {
        transform: scale(1);
        opacity: 0.8;

    }

    .textsite {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        opacity: 1;

    }

    @media (max-width: 768px) {
        .textsite {
            padding-bottom: 30px;
        }
    }

    .tx1 {
        color: white;
        font-size: 12px;
        position: absolute;
        top: 65%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        opacity: 1;
    }
    </style>


    <main class="site-main page-main">

        <div style=" background-color: #333">

            <h2 class="section-title"
                style="margin: 0; padding-top: 50px; padding-bottom: 50px;word-wrap:break-word; color: white; font-size: 40px">
                OUR WORK</h2>
        </div>

        <div class=" container-fluid" style="padding-top:60px;">

            <div class="row" style=" background-color: white">

                <a href="http://www.zegestergold.com/" target="_blank">
                    <div class="holder1 col-sm-6">
                        <img src="img/zegester.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="textsite">Zegester Gold</div>
                            <div class="tx1">Web Design, Development & Management for a Real Estate company</div>
                        </div>

                    </div>
                </a>

                <a href="https://exxensolutions.com/" target="_blank">
                    <div class="holder1 col-sm-6">
                        <img src="img/exxen.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="textsite">Exxen Solutions</div>
                            <div class="tx1">Web Design, Development & Management for an IT firm</div>

                        </div>
                    </div>
                </a>



                <a href="https://www.dumebing.com/" target="_blank">
                    <div class="holder1 col-sm-6">
                        <img src="img/dumebi.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="textsite">Dumebi Clothing</div>
                            <div class="tx1">Web Design & Development for a Fashion Brand</div>
                        </div>
                    </div>
                </a>

                <a href="https://unvapparel.com/" target="_blank">
                    <div class="holder1 col-sm-6">
                        <img src="img/unv.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="textsite">UNV Clothings</div>
                            <div class="tx1">E-Commerce Web Design, Development & Management for an Online Store</div>
                        </div>
                    </div>
                </a>






                <a href="http://www.geraldokereafor.com/" target="_blank">
                    <div class="holder1 col-sm-6">
                        <img src="img/go.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="textsite">Gerald Okereafor</div>
                            <div class="tx1">Web Management for a Blog</div>
                        </div>
                    </div>
                </a>

                <a href="http://girltalk1on1.org/" target="_blank">
                    <div class="holder1 col-sm-6">
                        <img src="img/girltalk.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="textsite">Girl Talk 1 on 1</div>
                            <div class="tx1">Web Design, Development & Management for a Women Empowerment Organisation
                            </div>
                        </div>
                    </div>
                </a>

                <a href="https://www.roktransit.com.ng/" target="_blank">
                    <div class="holder1 col-sm-6">
                        <img src="img/roktransit.jpg" alt="Avatar" class="image">
                        <div class="overlay">
                            <div class="textsite">ROK Transit</div>
                            <div class="tx1">Web Design, Development & Management for a Transport Company
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

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
                    <h4><a style="color:steelblue; text-decoration: none "
                            href="aboutus.php#strategicalliances ">STRATEGIC ALLIANCES</a></h4>
                    <p class="text">Dreacot builds to become the premium software development brand in Africa, and
                        subsequently across all continents through our Strategic Alliances. To complete our milestone,
                        we liaise with our syndicates to ensure we deliver only the best of services</p>

                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4><a style="color:steelblue; text-decoration: none "
                            href="aboutus.php#strategicpartnership">STRATEGIC PARTNERSHIPS</a></h4>
                    <p class="text">Dreacot has also entered into Strategic Partnerships in line with becoming the
                        premium software development brand in Africa. Through our partnerships, we provide exclusive
                        services through our robust distribution network, to our clients</p>

                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4><a style="color:steelblue;  text-decoration: none" href="contact.php#conct">CONTACT US</a></h4>

                    <p><a href="tel:+2348159827634"><span class="glyphicon glyphicon-earphone"
                                aria-hidden="true"></span> +234 815 982 7634</a></p>
                    <p><a href="mailto:info@dreacot.com"><span class="glyphicon glyphicon-envelope"
                                aria-hidden="true"></span> info@dreacot.com</a></p>
                    <br>

                    <a href="quote.php">
                        <button class="btn">REQUEST A QUOTE</button></a>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span>
                            <p class="pull-left">&copy; <script>
                                document.write(new Date().getFullYear());
                                </script> DREACOT |</p>

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
    function myFunction(x) {
        x.classList.toggle("change");
    }
    </script>

    <!-- preloader -->
    <script src="js/preloader.js"></script>
    <!-- / preloader -->
</body>

</html>