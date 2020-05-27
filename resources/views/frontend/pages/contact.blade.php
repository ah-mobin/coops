@extends('frontend.master.layout')
@section('title','contact')

@section('content')

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Contact US</h1>
{{--            <span class="color-text-a">For face to face contact,<br>--}}
{{--              Our office located in Legal Center at 1087 Broad Street, Bridgeport, CT 0660.</span>--}}
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
{{--        <div class="col-sm-12">--}}
{{--          <div class="contact-map box">--}}
{{--            <div id="map" class="contact-map">--}}
{{--              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"--}}
{{--                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-7">
              <form class="form-a contactForm" action="" method="post" role="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <input type="url" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">Email.
                      <span class="color-a">jamesdancy@snet.net</span>
                    </p>
                    <p class="mb-1">Phone.
                      <span class="color-a">(203) 384-1594</span>
                    </p>
                    <p class="mb-1">Fax.
                      <span class="color-a">(203) 384-1881</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Find us in</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      Legal Center at 1087 Broad Street,
                      <br> Bridgeport, CT 0660
                    </p>
                  </div>
                </div>
              </div>
{{--              <div class="icon-box">--}}
{{--                <div class="icon-box-icon">--}}
{{--                  <span class="ion-ios-redo"></span>--}}
{{--                </div>--}}
{{--                <div class="icon-box-content table-cell">--}}
{{--                  <div class="icon-box-title">--}}
{{--                    <h4 class="icon-title">Social networks</h4>--}}
{{--                  </div>--}}
{{--                  <div class="icon-box-content">--}}
{{--                    <div class="socials-footer">--}}
{{--                      <ul class="list-inline">--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-facebook" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-twitter" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-instagram" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                        <li class="list-inline-item">--}}
{{--                          <a href="#" class="link-one">--}}
{{--                            <i class="fa fa-dribbble" aria-hidden="true"></i>--}}
{{--                          </a>--}}
{{--                        </li>--}}
{{--                      </ul>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->


@endsection
