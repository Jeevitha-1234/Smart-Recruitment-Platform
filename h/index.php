<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- navbar section   -->

    <header class="navbar-section">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-chat"></i> Hexaware</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Apply">Apply</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- hero section  -->

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 text-content">
                    <h1>the digital service you really want</h1>
                    <p>We build effective strategies to help you reach customers and prospects across the entire web.
                    </p>
                    <button class="btn"><a href="ams.html">View All Applications</a></button>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <img src="images/hero-image.png" alt="" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <!-- services section  -->

    <section class="services-section" id="services">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 services">

                    <div class="row row1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGI5IGpaC0KxflKeHPEPD7M0_bKB_5hiWNXg&s" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Application</h4>
                                    <p class="card-text">We build effective strategies to help you to reach your goals.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaCv-6tkiZr2gz32LyXOhvQCJnTTbCOkXebA&s" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Job Creation</h4>
                                    <p class="card-text">Job creation is the one who is going to assign the jobs to other.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row2">

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9CrGMTxTcJPo94yvgFubwi9ERD0_8cZeZNg&s" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Interview</h4>
                                    <p class="card-text">Success is where preparation and opportunity meet.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Development</h4>
                                    <p class="card-text">A concept is brought to life through the services various
                                        stages, such
                                        as planning, testing and deployment.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>services</h3>
                    <h1>Is there anything else I can assist you with today?</h1>
                    <p>The strategy focuses on leveraging automation, cloud, and AI-driven solutions to deliver innovative IT and business process services, helping clients transform and optimize their digital experiences.</p>
                    <a href="service.html" class="button">Explore Services</a>
                    
                </div>

            </div>
        </div>
    </section>

    <!-- about section  -->

    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRg5fil19GuVu1K-RRK56uMZr6rgjBbSky_bw&s" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-content">
                    <h3>who we are</h3>
                    <h1>Empowering Transformation through Automation and AI.</h1>

                    <p>We focus on innovation, efficiency, and customer satisfaction in their services.</p>
                    <a href="learn more.html" class="learn-more-button">Learn More</a>
                    
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Apply section  -->

    <section class="Apply-section" id="Apply">
        <div class="container">
            <div class="row text">
                <div class="col-lg-6 col-md-12">
                    <h3>Users take the chance</h3>
                    <h1>Apply Now</h1>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-12">
                    <p>"Believe in your unique strengths and experiences; they are what make you the perfect fit for this role!"</p>
                </div>
            </div>
            <div class="row Apply">

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="data:image/png;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Applicants</h4>
                                <p class="card-text">Users fill the details for JOB</p>
                                
                                <a href="create_form.html" class="navigation-button">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        
                        
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Interview</h4>
                                <p class="card-text">Users interview data handling</p>
                                <a href="interview.html" class="navigation-button">Click Here</a>
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqcc_0FFDGDCDWNtXG78BEvHmahTcvr958wA&s" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Job Creation</h4>
                                <p class="card-text">Assign the job</p>
                                <a href="job creation.html" class="navigation-button">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLoofetNvp626gvsLXF90gHLCbhQhweQM-bA&s" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="text">
                                <h4 class="card-title">Overview</h4>
                                <p class="card-text">Recruitment process</p>
                                <a href="overview.html" class="navigation-button">Click Here</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- contact section  -->

    <section class="contact-section" id="contact">
        <div class="container">

            <div class="row gy-4">

                <h1>contact us</h1>
                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Anna Nagar Street,<br>Chennai, 535022</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+91 9876545672<br>+91 8763456243</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>Hexaware@gmail.com<br>Hexa@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 form">
                    <form action="contact.php" method="POST" class="php-email-form">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>

    <!-- footer section  -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="logo"><i class="bi bi-chat"></i> Hexaware</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <ul class="d-flex">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="#">Apply</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p>&copy;2023_Hexaware</p>
                </div>

                <div class="col-lg-1 col-md-12 col-sm-12">
                    <!-- back to top  -->

                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                            class="bi bi-arrow-up-short"></i></a>
                </div>

            </div>

        </div>

    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>