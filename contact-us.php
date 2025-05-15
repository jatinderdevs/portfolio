<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact JatinderDev | Web Developer Melbourne</title>
    <meta property="og:title" content="Freelance Web Developer Melbourne | JatinderDev">
    <meta property="og:description" content="Get in touch with JatinderDev for web development, design, or digital marketing in Melbourne. Free consultations available!">
    <meta property="og:image" content="https://jatinderdev.com/images/logo.jpg">
    <meta property="og:url" content="https://jatinderdev.com">
    <meta name="robots" content="index, follow">
   
    <?php include_once('include/linkfiles.php') ?>
   
</head>

<body>
<section class="head bg-green">
        <div class="container">
        <?php include_once('include/header.php') ?>
         
            <br>
            <br>
            <h1 class="mt-4">- Contact Us </h1>
            <p>if you have any query or question please complete the given form</p>
        </div>
</section>

<section>
    <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img src="img/contact-us.gif" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                <div class="contactform" data-aos="fade-left">
                    <h2 class="subHeading">- How can I help you?</h2>
                        <form action="" method="post">
                            <label for="">name</label>
                            <input type="text" name="name"  placeholder="Doe John" id="name" class="txtbox">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">email*</label>
                                    <input required type="email" name="email" id="email" placeholder=" youremail@abc.com" class="txtbox">
                                </div>
                                <div class="col-md-6">
                                    <label for="">contact</label>
                                    <input  type="text" name="email" id="email" placeholder="+61 123 321 123" class="txtbox">
                                </div>
                            </div>
                           
                            <label for="">write your message*</label>
                            <textarea required name="msg" placeholder="write here.." id="msg" cols="20" class="txtbox" rows="3"></textarea>

                            
                            <button type="submit" class="btn  custmbtn">Submit <i class="fa fa-send"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</section>

 <footer>
        <div class="container">
            <div class="flex">
            <p>all rights reserved.&copy; 2025 jatinder singh</p>
            <p>Made with <strong class="text-danger"><i class="fa fa-heart" aria-hidden="true"></i></strong> in Melbourne,AU </p>
            </div>
        </div>

    </footer>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/61e3d180b84f7301d32b4045/1fpukljp2';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
    $(window).on('load', function () {
        $(".loader").hide();


    });
</script>



</html>