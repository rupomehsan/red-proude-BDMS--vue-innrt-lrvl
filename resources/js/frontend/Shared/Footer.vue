<template>
    <!-- footer-area start -->

    <!-- footer section start -->
    <footer>
      <div class="footer_top pt-115">
        <div class="container">
          <div class="row border-bottom justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
              <div class="footer_content">
                <h5>About Us</h5>
                <p>Duis aute irure dolor in reprehenderit velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                <ul>
                  <li><span>Phone:</span> +1(456)657-887, 999</li>
                  <li><span>Email:</span> contactblood@gmail.com</li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-6 mb-4">
              <div class="footer_content">
                <h5>Quick Links</h5>
                <ul>
                  <li>
                    <a href="service.html"><i class="fa-solid fa-angles-right"></i> Services</a>
                  </li>
                  <li>
                    <a href="about.html"><i class="fa-solid fa-angles-right"></i> About Us</a>
                  </li>
                  <li>
                    <a href="campaign.html"><i class="fa-solid fa-angles-right"></i> New Campaign</a>
                  </li>
                  <li>
                    <a href="blog-details.html"><i class="fa-solid fa-angles-right"></i> Latest News</a>
                  </li>
                  <li>
                    <a href="contact.html"><i class="fa-solid fa-angles-right"></i> Contact</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-6 mb-4">
              <div class="footer_content">
                <h5>Our Services</h5>
                <ul>
                  <li>
                    <a href="donate.html"><i class="fa-solid fa-angles-right"></i> Blood Donation</a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-solid fa-angles-right"></i> Health Check</a>
                  </li>
                  <li>
                    <a href="donate.html"><i class="fa-solid fa-angles-right"></i> Blood Bank</a>
                  </li>
                  <li>
                    <a href="donate.html"><i class="fa-solid fa-angles-right"></i> Donate Process</a>
                  </li>
                  <li>
                    <a href="donate.html"><i class="fa-solid fa-angles-right"></i> Blood Info</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="footer_content">
                <h5>Latest News</h5>
                <div class="footer_blog">
                  <div class="fblog_item mb-3">
                    <div class="row align-items-center">
                      <div class="col-4">
                        <div class="fblog_img img">
                          <a href="blog-details.html"><img src="frontend/assets/images/f1.jpg" alt="" /></a>
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="fblog_content">
                          <a href="blog-details.html"> A Formula For Help And Happiness</a>
                          <span>18 February, 2022</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="fblog_item mb-3">
                    <div class="row align-items-center">
                      <div class="col-4">
                        <div class="fblog_img img">
                          <a href="blog-details.html"><img src="frontend/assets/images/f2.jpg" alt="" /></a>
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="fblog_content">
                          <a href="blog-details.html"> Donation is hope for poor helpless children</a>
                          <span>18 February, 2022</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row footer_middle">
            <div class="col-xl-6 col-lg-6 col-12 mb-5">
              <div class="footer_subscrive">
                <h6>Subscribe us for more update &amp; news !!</h6>
                <form action="#">
                  <input type="email" placeholder="Enter Your Email" />
                  <button class="red_btn" type="submit">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-12">
              <div class="footer_social">
                <ul class="social_icon d-flex justify-content-xxl-end justify-content-xl-end justify-content-lg-end justify-content-center gap-2">
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                  </li>
                </ul>
                <ul
                  class="page_link d-flex justify-content-xxl-end justify-content-xl-end justify-content-lg-end justify-content-center gap-2 flex-wrap"
                >
                  <li><a href="privacypolicy.html">Privacy Policy</a></li>
                  <li><a href="#">/</a></li>
                  <li><a href="terms.html">Terms &amp; Condition</a></li>
                  <li><a href="#">/</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <p>Copyright © 2020 Blad Ai. All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section end -->

    <!-- mobile menu offcanvas -->
    <div class="offcanvas offcanvas-start" id="offcanvas-mobile">
      <div class="offcanvas-body">
        <div class="mobile-menu">
          <a href="index.html" class="logo py-3"><img src="frontend/assets/images/red-logo.png" alt="logo" class="img-fluid" /></a>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>

          <ul class="accordion accordion-flush mobile_dropdown" id="accordionFlushExample">
            <li class="accordion-item">
              <h2>
                <button
                  class="accordion-button collapsed p-3"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne"
                  aria-expanded="false"
                >
                  Home
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <ul>
                    <li><a href="index.html">Home Page 1</a></li>
                    <li><a href="index-2.html">Home Page 2</a></li>
                    <li><a href="index-3.html">Home Page 3</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="accordion-item">
              <h2><a href="about.html">About</a></h2>
            </li>
            <li class="accordion-item">
              <h2>
                <button
                  class="accordion-button collapsed p-3"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsetwo"
                  aria-expanded="false"
                >
                  Pages
                </button>
              </h2>
              <div id="flush-collapsetwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <ul>
                    <li><a href="service.html">service</a></li>
                    <li><a href="service-details.html">service Details</a></li>
                    <li><a href="faq.html">Faq</a></li>
                    <li><a href="photo-gallary.html">Photo Gallary</a></li>
                    <li><a href="donate.html">Donate</a></li>
                    <li><a href="register.html">Registation</a></li>
                    <li><a href="privacypolicy.html">Privacy policy</a></li>
                    <li><a href="terms.html">Terms &amp; Condition</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="accordion-item">
              <h2>
                <button
                  class="accordion-button collapsed p-3"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#flush-collapsethree"
                  aria-expanded="false"
                >
                  Blog
                </button>
              </h2>
              <div id="flush-collapsethree" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <ul>
                    <li><a href="blog-default.html">Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                    <li><a href="blog-details-left-sidebar.html">Blog Left</a></li>
                    <li><a href="blog-details-right-sidebar.html">Blog Right</a></li>
                    <li><a href="blog-style1.html">Blog Style 1</a></li>
                    <li><a href="blog-style2.html">Blog Style 2</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="accordion-item">
              <h2><a href="contact.html">Contact</a></h2>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- right side offcanvas -->
    <div class="offcanvas offcanvas-end right_canvas" tabindex="-1" id="offcanvasRight">
      <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <div class="content-top mb-100">
          <a href="index.html">Blad Ai</a>
          <p>Distrak Street 2SK Line, Germanygalore@inside-support.com (+125) 2156-2145</p>
        </div>
        <div class="offcanvus-gallery d-flex align-items-center flex-wrap">
          <a class="img" href="#"><img src="frontend/assets/images/r1.jpg" alt="not found" /></a>
          <a class="img" href="#"><img src="frontend/assets/images/r2.jpg" alt="not found" /></a>
          <a class="img" href="#"><img src="frontend/assets/images/r1.jpg" alt="not found" /></a>
          <a class="img" href="#"><img src="frontend/assets/images/r3.jpg" alt="not found" /></a>
          <a class="img" href="#"><img src="frontend/assets/images/r1.jpg" alt="not found" /></a>
          <a class="img" href="#"><img src="frontend/assets/images/r2.jpg" alt="not found" /></a>
        </div>
        <div class="offcanvus-newsletter">
          <h4 class="mb-4 text-center">Newsletter</h4>
          <form action="#">
            <input type="email" placeholder="Enter your e-mail" class="theme-input mb-3" />
            <button type="submit" class="black_btn w-100 border-0 p-3"><span>SUBSCRIBE NOW</span></button>
          </form>
        </div>
      </div>
    </div>
    <!-- footer-area end -->
</template>

<script>
export default {};
</script>

<style></style>
