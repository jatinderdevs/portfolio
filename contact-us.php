<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact JatinderDev | Web Developer Melbourne</title>
    <meta property="og:title" content="Freelance Web Developer Melbourne | JatinderDev">
    <meta property="og:description" content="Get in touch with JatinderDev for web development, design, or digital marketing in Melbourne. Free consultations available!">
    <meta property="og:image" content="https://jatinderdev.com/img/website.webp">
        <meta property="og:url" content="https://jatinderdev.com/contact-us">
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

<section class="">
    <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img src="img/contact-us.gif" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                <div class="contactform" data-aos="fade-left">
                    <h2 class="subHeading">- How can I help you?</h2>
                        <form action="email" method="post" id="query-form">
                            <label for="">name</label>
                            <input type="text" name="name"  placeholder="Doe John" id="name" class="txtbox">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">email*</label>
                                    <input required type="email" name="email" id="email" placeholder=" youremail@abc.com" class="txtbox">
                                </div>
                                <div class="col-md-6">
                                    <label for="">contact</label>
                                    <input  type="text" name="phone" id="phone" placeholder="+61 123 321 123" class="txtbox">
                                </div>
                            </div>
                           
                            <label for="">write your message*</label>
                            <textarea required name="msg" placeholder="write here.." id="msg" cols="20" class="txtbox" rows="3"></textarea>

                            <button class="g-recaptcha btn  custmbtn" 
                            data-sitekey="6LeCUlorAAAAAN-YsaaKqxfFnfWa30DOSn9kCUi1" 
                            data-callback='onSubmit' 
                            data-action='submit' type="submit">Submit</button>
                            
                            </button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <hr>
</section>

     <?php include_once('include/footer.php') ?>

  
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