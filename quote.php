<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
                $number = $_POST['phoneNumber'];
                $company = $_POST['companyName'];
                $website = $_POST['website'];
		$duration = $_POST['duration'];
		$budget = $_POST['budget'];
		$message = $_POST['message'];
		$from = $_POST['name'];
		$to = 'info@dreacot.com'; 
		$subject = 'Quote Requested';
		
		$body =" From: $name\n E-Mail: $email\n Mobile: $number\n Company Name: $company\n Website: $website\n Duration: $duration\n Budget: $budget\n Message: $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
                // Check if number has been entered 
                if (!$_POST['phoneNumber']) {
			$errNumber= 'Please enter your number';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'We need to know more about your project';
		}
		
		//Check if duration has been entered
		if (!$_POST['duration']) {
			$errDuration = 'Please choose a duration';
		}
		
		//Check if budget has been entered
		if (!$_POST['budget']) {
			$errBudget = 'Please select a budget';
		}
		
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errNumber && !$errMessage & !$errDuration & !$errBudget) {
	if (mail ($to, $subject, $body)) {
		$result='<div class="alert alert-success">Thank You! We would get back to you within 24 hours.</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
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
    <meta name="description" content="Dreacot">
    <meta name="keywords"
        content="web design, web development, app development, graphics design, animation, web management, app management" />
    <meta name="author" content="Dreacot">
    <title>Get A Quote - Web Design | Dreacot</title>


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
                            <li><a class="hvr-underline-from-center" href="ourwork.php" title="">OUR WORK</a></li>
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

    .parallax {
        /* The image used */
        background-image: url("map.jpg");

        /* Set a specific height */
        min-height: 500px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    select {
        padding: 5px 35px 5px 25px;
        height: 55px;
        margin: 0.5em 0;
    }

    .form-group input {
        padding: 5px 35px 5px 5px;

        border-radius: 0px;
        padding: 1.9em;
        border: 1px solid #d4d7da;
        margin: 0.5em 0;
    }

    .form-group textarea {
        padding: 15px 35px 5px 25px;
        border-radius: 0px;
        height: 100px;
        margin: 0.5em 0;
    }

    .form-group1 {
        margin-bottom: 15px;
    }

    h2.section-title {
        font-size: 45px;
    }

    @media (max-width: 768px) {
        h2.section-title {
            font-size: 25px;
        }
    }
    </style>



    <div id="conct" class="container-fluid" style="background-color: #333; padding-top: 25px;  ">
        <div class="container col-md-6 col-md-offset-3">

            <h2 class="section-title" style=" text-align: center; color: white;"><span
                    class="glyphicon glyphicon-question-sign"></span> &nbsp;REQUEST A QUOTE</h2><br></br>
            <form role="form" method="post" action="quote.php">
                <div class="form-group">
                    <label for="name"><span class="glyphicon glyphicon-user"></span> Full Name *</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="full name"
                        value="<?php echo htmlspecialchars($_POST['name']); ?>" required>
                    <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>
                <div class="form-group">
                    <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com"
                        value="<?php echo htmlspecialchars($_POST['email']); ?>" required>
                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
                <div class="form-group">
                    <label for="phoneNumber"><span class="glyphicon glyphicon-earphone"></span> Mobile *</label>
                    <input type="text" class="form-control" id="phoneNumber" placeholder="telephone" name="phoneNumber"
                        value="<?php echo htmlspecialchars($_POST['phoneNumber']); ?>" required>
                    <?php echo "<p class='text-danger'>$errNumber</p>";?>
                </div>


                <div class="form-group">
                    <label for="companyName"><span class="glyphicon glyphicon-briefcase"></span> Company Name</label>
                    <input type="text" class="form-control" id="companyName" placeholder="Company (optional)  "
                        name="companyName">

                </div>

                <div class="form-group">
                    <label for="website"><span class="glyphicon glyphicon-globe"></span> Current Website</label>
                    <input type="text" class="form-control" id="website" placeholder="http://yourwebsite.com (optional)"
                        name="website">

                </div>




                <div class="form-group">
                    <label for="duration"><span class="glyphicon glyphicon-time"></span> How long would you like this
                        project to take? *</label>
                    <input type="text" class="form-control" id="duration" name="duration"
                        placeholder="e.g (4 weeks, 3 months, 60 days)"
                        value="<?php echo htmlspecialchars($_POST['duration']);?>" required>
                    <?php echo "<p class='text-danger'>$errDuration</p>";?>
                </div>

                <div class="form-group">
                    <label for="budget"><span class="glyphicon glyphicon-piggy-bank"></span> What's your budget like
                        *</label><br>
                    <select id="budget" name="budget" value="<?php echo htmlspecialchars($_POST['budget']);?>" required>
                        <option value="">Choose a budget </option>
                        <option value="₦50,000 - ₦150,000">₦50,000 - ₦150,000 </option>
                        <option value="₦150,000 - ₦300,000">₦150,000 - ₦300,000 </option>
                        <option value="₦300,000 - ₦600,000">₦300,000 - ₦600,000 </option>
                        <option value="Above ₦600,000">Above ₦600,000</option>

                    </select>
                    <?php echo "<p class='text-danger'>$errBudget</p>";?>
                </div>

                <div class="form-group">
                    <label for="message"><span class="glyphicon glyphicon-book"></span> Describe Your Project *</label>
                    <textarea class="form-control" rows="3" id="message" name="message"
                        placeholder="Please tell us more about your project"
                        value="<?php echo htmlspecialchars($_POST['message']);?>" required></textarea>
                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                </div>






                <div class="form-group1 text-center">

                    <input id="submit" name="submit" type="submit" value="Submit" class="btn">

                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1" align="center" style=" padding-bottom: 10px">
                        <?php echo $result; ?>
                    </div>
                </div>
            </form>
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
                        <button class="btn">REQUEST A QUOTE</button>
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