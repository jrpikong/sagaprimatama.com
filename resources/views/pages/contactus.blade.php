@extends('layouts.app')

@section('content')
  <section class="jumbotron demo-custom-height-1 full-width" data-pages="parallax">
    <div class="full-height" data-pages-bg-image="{{asset('images/gallery_hero_2.jpg')}}" data-bg-overlay="black" data-overlay-opacity="0.4" style="background-image: url({{asset('/images/hero_g.jpg')}});">
      <div class="container-xs-height full-height inner" style="transform: translateY(0px);">
        <div class="col-xs-height col-middle text-left">
          <div class="container">
            <div class="col-sm-12">
              <h1 class="light text-white text-center">Powerful, Highly Customizable Desain</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-overlay" style="background-color: black; opacity: 0.4;"></div></div>
  </section>

  <section class="p-t-20 sm-p-t-10 sm-m-t-10">
    <!-- START CONTACT SECTION -->
    <section class="container container-fixed-lg p-t-65 p-b-100  sm-p-b-30 sm-m-b-30">
      <div class="row">
        <div class="col-md-6">
          <h2>How can we assist you?</h2>
          <div class="p-r-40 sm-p-r-0">
            <p>Despite the Design and quality, We thought of the User experience, With attached From Layouts you can simply categories Important fields and prioritize them.</p>
            <br>
            <br>
            <div class="panel" id="contact-panel">
              <p class="semi-bold no-margin">Fill up this form to contact us if you have any futher questions</p>
              @if (session('status'))
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Hi</strong> {{ session('status') }}
                </div>
              @endif
              <form role="form" autocomplete="off" class="m-t-15" id="contact-form" action="{{route('postContact')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group form-group-default required">
                      <label class="control-label">First name</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group form-group-default">
                      <label class="control-label">Last name</label>
                      <input type="text" name="last_name" class="form-control" required>
                    </div>
                  </div>
                </div>
                <div class="form-group form-group-default">
                  <label class="control-label">Email</label>
                  <input type="email" name="email" placeholder="This can be changed later" class="form-control" required>
                </div>
                <div class="form-group form-group-default">
                  <label class="control-label">No Phone</label>
                  <input type="text" name="phone" placeholder="+62 81 252 476 167" class="form-control" required>
                </div>
                <div class="form-group form-group-default">
                  <label class="control-label">Message</label>
                  <textarea name="message" placeholder="Type the message you wish to send" style="height:100px" class="form-control" required></textarea>
                </div>
                <div class="sm-p-t-10 clearfix">
                  <p class="pull-left small hint-text m-t-5 font-arial">I hereby certify that the information above is true and accurate. </p>
                  <button class="btn btn-primary font-montserrat all-caps fs-12 pull-right xs-pull-left">Submit</button>
                </div>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="visible-xs visible-sm b-b b-grey-light m-t-35 m-b-30"></div>
          <div class="p-l-40 sm-p-l-0 sm-p-t-10">
            <h3>Showcase and guide users with a <br>better User Interface &amp; Experience.</h3>
            <p>Our motivation "Perfection simplified" helps to craft meaningful experiences for the people around us,This mission inspires us to jump out of bed each day and guides every aspect of what we do.</p>
            <br>
            <div class="row">
              <div class="col-sm-12">
                <h5 class="block-title hint-text m-b-0">Indonesia - DKI Jakarta </h5>
                <address class="m-t-10">Jl. H. Aseni
                  <br> No. 119A Kopti Semanan
                  <br> Jakarta Barat</address>
                <br>
                <p class="hint-text no-margin"><span class="fs-12 font-montserrat bold all-caps p-r-10">Tel</span> <span class="fs-14">+62 21940 6054 | +62 811 197 868</span></p>
                <p class="hint-text"><span class="fs-12 font-montserrat bold all-caps p-r-10">Fax</span> <span class="fs-14">+62 21940 6054</span></p>
              </div>
            </div>
            <br>
            <h5 class="block-title hint-text m-b-0">pages Public Inquiries &amp; Communications </h5>
            <br>
            <div class="row">
              <div class="col-sm-6">
                <p class="fs-12 font-montserrat bold all-caps no-margin hint-text">Hotline </p>
                <p class="hint-text no-margin fs-14">+62 21940 6054</p>
              </div>
              <div class="col-sm-6">
                <p class="fs-12 font-montserrat bold all-caps no-margin hint-text">Email </p>
                <p class="hint-text no-margin fs-14">admin@sagaprimatama.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>s
    <!-- END CONTACT SECION -->
  </section>
@endsection

@push('script')
  <script type="text/javascript" src="{{asset('/js/contact.js')}}"></script>
@endpush