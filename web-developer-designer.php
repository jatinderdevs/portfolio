<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Freelance Web Developer Melbourne | JatinderDev">
    <meta name="keyword"
        content="web developer Melbourne, web design Melbourne, digital marketing Melbourne, freelance web development">
    <meta name="description"
        content="Professional web development & design in Melbourne. Custom websites by JatinderDev. Contact for responsive, SEO-friendly sites!">
    <meta name="image" content="https://jatinderdev.com.au/img/website.webp">
    <meta name="url" content="https://jatinderdev.com.au/web-developer-designer">



    <meta property="og:title" content="Freelance Web Developer Melbourne | JatinderDev">
    <meta property="keyword"
        content="web developer Melbourne, web design Melbourne, digital marketing Melbourne, freelance web development">
    <meta property="og:description"
        content="Professional web development & design in Melbourne. Custom websites by JatinderDev. Contact for responsive, SEO-friendly sites!">
    <meta property="og:image" content="https://jatinderdev.com.au/img/website.webp">
    <meta property="og:url" content="https://jatinderdev.com.au/web-developer-designer.php">
    <meta name="robots" content="index, follow">
    <title>Web Developer & Designer Melbourne | JatinderDev</title>

    <?php include_once('include/linkfiles.php') ?>


</head>

<body>

    <section class="head">
        <div class="container">
            <?php include_once('include/header.php') ?>
            <div class="row align-items-center mt-3">
                <div class="col-md-7">
                    <div class="bannertxt" data-aos="fade-right">
                        <h1>Web <span> Development & Design </span> Services in Melbourne
                        </h1>
                        <p>Looking for a professional web developer in Melbourne? we create responsive, user-friendly
                            websites tailored to your business needs. From customize application platforms to personal
                            portfolios, our web development and design services help Melbourne businesses stand out
                            online.
                        </p>
                        <a target="_blank"
                            href="https://api.whatsapp.com/send?phone=+61499167608&text=Hi, I have query regarding My website"
                            class=" custmbtn">Let's Connect &nbsp;<i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="bannerimg" data-aos="fade-left">
                        <img src="img/banner.gif" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img src="img/servicebar.png" class="img-fluid" width="100%" alt="">
    <section class="services" id="services">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-md-12">
                    <h2 class="subHeading"><span> Services</span> offered</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="servicecard cardGrid" data-aos="zoom-in">
                                <div class="cardimg">
                                    <img src="img/webcoding.png" class="img-fluid" alt="">
                                </div>
                                <div class="cardtxt">
                                    <h4>web developer & designer</h4>




                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="servicecard cardGrid" data-aos="zoom-in">
                                <div class="cardimg">
                                    <img src="img/seo.png" class="img-fluid" alt="">
                                </div>
                                <div class="cardtxt">
                                    <h4>SEO & Content writing</h4>

                                    </p>



                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="servicecard cardGrid" data-aos="zoom-in">
                                <div class="cardimg">
                                    <img src="img/application.png" class="img-fluid" alt="">
                                </div>
                                <div class="cardtxt">
                                    <h4>customize applications</h4>


                                </div>
                            </div>
                        </div>



                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- about us section -->
    <?php include_once('include/about.php') ?>

    <!-- Technologies i used skills -->
    <?php include_once('include/skills.php') ?>


    <section class="projects" id="portfolio">
        <div class="container">
            <h5 class="m-0">-Portfolio</h5>
            <h2 class="subHeading">My Latest <span>Projects</span></h2>
            <br>
            <div class="row" id="project-grid">


            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">

            <div class="row">
                <div class="col-md-5">
                    <div class="contacttxt" data-aos="fade-right">
                        <h5 class="m-0">-Contact us</h5>
                        <h2 class="subHeading">Ready to launch your <span> website</span>?</span></h2>
                        <br>
                        <p>have a project? discuss with us get free assistance and get road map of your start up.drop a
                            mail or call</p>
                        <ul class="contactul mt-4">
                            <li> <span><i class="fa fa-phone" aria-hidden="true"></i> </span> <a href="">+61 499 167
                                    608</a></li>
                            <li> <span><i class="fa fa-envelope"></i></span> <a href="">info@jatinderdev.com.au</a></li>

                        </ul>

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="contactform" data-aos="fade-left">
                        <form action="email" method="post" id="query-form">
                            <label for="">name</label>
                            <input type="text" name="name" placeholder="Doe John" id="name" class="txtbox">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">email*</label>
                                    <input required type="email" name="email" id="email"
                                        placeholder=" youremail@abc.com" class="txtbox">
                                </div>
                                <div class="col-md-6">
                                    <label for="">contact</label>
                                    <input type="text" name="phone" id="phone" placeholder="+61 123 321 123"
                                        class="txtbox">
                                </div>
                            </div>

                            <label for="">write your message*</label>
                            <textarea required name="message" placeholder="write here.." id="message" cols="20"
                                class="txtbox" rows="3"></textarea>


                            <button class="g-recaptcha btn  custmbtn"
                                data-sitekey="6LeCUlorAAAAAN-YsaaKqxfFnfWa30DOSn9kCUi1" data-callback='onSubmit'
                                data-action='submit' type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <?php include_once('include/testiFaq.php') ?> -->



    <?php include_once('include/footer.php') ?>

    <script>
    loadProject('website')
    </script>
</body>

</html>