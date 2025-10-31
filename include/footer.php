  <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-4 mb-2">
                  <div class="logo ">
                      <h3 class="subHeading m-0"><span>]</span><span
                              class="text-white">JATINDER</span><span>DEV</span><span>[</span> <br>

                      </h3>
                  </div>
              </div>
              <div class="col-md-4">
                  <h5>Services</h5>
                  <ul class="footUl">
                      <li> <a href="web-developer-designer"> <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Web
                              designer & developer</a></li>
                      <li> <a href="digital-marketing-and-SEO"> <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                              Digital Marketing & SEO</a></li>
                      <li> <a href="digital-marketing-and-SEO"> <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                              Graphic Design</a></li>
                  </ul>
              </div>
              <div class="col-md-4">
                  <div class="logo">
                      <a href="contact-us.php" class="btn  custmbtn"> <i class="fa fa-comments-o"
                              aria-hidden="true"></i> Get in Touch</a>
                      <div class="flex socials">
                          <a href="https://www.instagram.com/jatinderdeveloper/" target="_blank"><i
                                  class="fa fa-instagram" aria-hidden="true"></i></a>
                          <a href="https://www.facebook.com/profile.php?id=61576803775165" target="_blank"><i
                                  class="fa fa-facebook-official" aria-hidden="true"></i></a>
                          <a href="https://www.linkedin.com/in/jatinderdevs/" target="_blank"><i
                                  class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                      </div>

                  </div>


              </div>
          </div>




      </div>

  </footer>
  <div class="container-fluid">
      <div class="flex p-2" style="background: #dfdfdf;">
          <p class="m-0">All rights reserved.&copy; 2025 Jatinder Singh</p>
          <p class="m-0">Made with <strong class="text-danger"><i class="fa fa-heart" aria-hidden="true"></i></strong>
              in Melbourne,AU </p>
      </div>
  </div>



  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
  </script>
  <script async src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



  <script>
const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    autoplay: {
        delay: 1500,
        disableOnInteraction: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});
  </script>


  <!--Start of Tawk.to Script-->
  <script async type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/67fe262fd9917b190cb9655f/1ioscab3h';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
  </script>
  <!--End of Tawk.to Script-->

  <!-- Taku -->
  <script async>
! function(t, e, a, n) {
    function c() {
        if (!e.getElementById(a)) {
            var t = e.getElementsByTagName(n)[0],
                c = e.createElement(n);
            c.type = "text/javascript", c.async = !0, c.src = "https://cdn.taku-app.com/js/latest.js", t.parentNode
                .insertBefore(c, t)
        }
    }
    if ("function" != typeof t.Taku) {
        var s = function() {
            s.q.push(arguments)
        };
        s.q = [], t.Taku = s, "complete" === e.readyState ? c() : t.attachEvent ? t.attachEvent("onload", c) : t
            .addEventListener("load", c, !1)
    }
}(window, document, "taku-js", "script");
window.Taku('news:boot', {
    api_public_key: "5c53246b30a16d97f0f9fed7ae485b32",
});
  </script>


  <script src="https://www.google.com/recaptcha/api.js"></script>


  <script>
function onSubmit(token) {

    if (document.getElementById("query-form").checkValidity()) {
        document.getElementById("query-form").submit();
    } else {
        document.getElementById("query-form").reportValidity(); // Show validation errors
    }

}
  </script>