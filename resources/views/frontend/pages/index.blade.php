@extends('frontend.master.layout')
@section('title', 'index')

@section('content')

  <!--/ about coops /-->
  <section class="section-services mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a" style="margin-bottom: -20px">{{ $about->homepage_title }}</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="text-justify">
                  <p>{!! substr($about->about_content,0,730) !!} <a href="{{ route('about.page') }}"><b>Learn More...</b></a> </p>
              </div>
            </div>
            <div class="col-md-4">
              <img src="{{ asset('storage/app/'.$about->cover_image) }}" alt="" style="height: 200px" width="100%">
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


  <!--/ Services /-->
  <section class="section-services mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a" style="margin-bottom: -20px">Our Services</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-5">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Loans</h2>
              </div>
            </div>
            <!-- <div class="card-body-c">
              <p class="content-c">
                Providing a quality load they will get banks and other financial facilities.
              </p>
            </div> -->
            <!-- <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div> -->
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-book"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Education</h2>
              </div>
            </div>
            <!-- <div class="card-body-c">
              <p class="content-c">
                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                convallis a pellentesque
                nec, egestas non nisi.
              </p>
            </div> -->

          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Social Service</h2>
              </div>
            </div>
            <!-- <div class="card-body-c">
              <p class="content-c">
                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                convallis a pellentesque
                nec, egestas non nisi.
              </p>
            </div> -->

          </div>
        </div>

        <div class="col-md-4 mb-5">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-shield"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Safety</h2>
              </div>
            </div>
            <!-- <div class="card-body-c">
              <p class="content-c">
                Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                aliquet elit, eget tincidunt
                nibh pulvinar a.
              </p>
            </div> -->

          </div>
        </div>
        <div class="col-md-4 mb-5">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-trash"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Clean Environment</h2>
              </div>
            </div>
            <!-- <div class="card-body-c">
              <p class="content-c">
                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                convallis a pellentesque
                nec, egestas non nisi.
              </p>
            </div> -->

          </div>
        </div>

      </div>

    </div>
  </section>
  <!--/ Services End /-->


<!-- story -->
  <section class="section-services mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a" style="margin-bottom: -20px">{{ $story->homepage_title }}</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="text-justify">
                  <p>{!! substr($story->story_content,0,720) !!} <a href="{{ route('story.page') }}"><b>Learn More...</b></a> </p>
              </div>
            </div>

              @if($story->cover_image)
                <div class="col-md-4">
                  <img src="{{ asset('storage/app/'.$story->cover_image) }}" alt="" style="height: 220px; width: 100%; ">
                </div>
              @endif
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end story -->

<!-- benefits -->
  <section class="section-services mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a" style="margin-bottom: -20px">Benefits</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
          <div class="col-md-4">
            <div class="card text-dark mb-3" style="border: none!important">
              <div class="card-header text-center"><b>Mini Democracies</b></div>
              <div class="card-body">
                <p class="card-text text-justify">
                  It would be fair to state that “the Co-op Mini Democracies” have worked as well or as badly as any or most of the Federal, State, City or Town Elections and Administrations have functioned from one election to the next. However, the opportunity to “get involved, to learn and grow” is open and available to any and every Member of the cooperative. So, “the people” can participate in the operation of “the business” at whatever level they choose.
                </p>
              </div>
              </div>
          </div>

          <div class="col-md-4">
            <div class="card text-dark mb-3" style="border: none!important">
              <div class="card-header text-center"><b>Financial Benefits</b></div>
              <div class="card-body">
                <p class="card-text text-justify">
                  There are “financial benefits” to co-op housing participation. The cost of Membership is
                  affordable (based on the average income) in the community where the housing is or is to be
                  located. The “structure or design” of the cooperative housing ownership program is {nonprofit).
                  Payments of investment profits to a “Landlord” are eliminated. Monthly charges
                  are routinely less than “(rent)” in the neighborhood; and, are based on the actual cost of; a
                  favorable mortgage rate, maintenance, taxes, insurance and appropriate Reserves.
                </p>
              </div>
              </div>
          </div>

          <div class="col-md-4">
            <div class="card text-dark mb-3" style="border: none!important">
              <div class="card-header text-center"><b>No Additional Investment</b></div>
              <div class="card-body">
                <p class="card-text text-justify">
                  TechniCo-op and associated non-profit co-op housing developers and organizers have
                  helped Thousands of families of modest income create considerable equity in the Real
                  Estate (homes) they occupy, without any additional financial exposure or investment
                  required.
                </p>
              </div>
              </div>
          </div>

          <div class="col-md-4">
            <div class="card text-dark mb-3" style="border: none!important">
              <div class="card-header text-center"><b>Membership Values</b></div>
              <div class="card-body">
                <p class="card-text text-justify">
                  The value of a Membership is computed Annually based upon the formula established by
                  each independent co-op. Some portion of the value of a specific Membership may be
                  accessed by a Member under specific conditions approved by the Board; or, paid in full (at
                  current value) when a Member terminates their occupancy.
                </p>
              </div>
              </div>
          </div>

          <div class="col-md-4">
            <div class="card text-dark mb-3" style="border: none!important">
              <div class="card-header text-center"><b>War Against Poverty</b></div>
              <div class="card-body">
                <p class="card-text text-justify">
                  We are aware of no comparable activity or initiative that allows a family of modest income to
                “have their cake and eat it too”. Co-op housing checks and rejects “poverty” at the door.
                We strongly recommend this most important weapon in the “War against Poverty.”
                </p>
              </div>
              </div>
          </div>

      </div>
    </div>
  </section>



  <section class="section-services mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a" style="margin-bottom: -20px">Our Dream</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="text-justify">
                <p style="margin-top:-20px; margin-bottom:-20px;">Following an exhausting twenty four (24) hours of passionate, thoughtful speeches
                concerning the relationship with their Far Eastern-Mother Country, men of
                goodwill meeting in Philadelphia 1776 narrowed their objections and agreements
                down to five (5) basic concerns which became the foundation on which the
                Governing Document for the New Nation, the United States of America, would
                be developed. Those objectives were recorded and published as the Preamble to
                the Constitution.

              <a href="{{ route('dream.page') }}">Read More...</a> </p>

              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
</section>


@endsection