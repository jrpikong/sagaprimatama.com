@extends('layouts/app')
@section('content')
  <!-- BEGIN JUMBOTRON -->
  <section class="jumbotron full-vh" data-pages="parallax">
    <div class="inner full-height">
      <!-- BEGIN SLIDER -->
      <div class="swiper-container" id="hero">
        <div class="swiper-wrapper">
          <!-- BEGIN SLIDE -->
          @if($sliders)
            @foreach($sliders as $key => $slider)
              <div class="swiper-slide fit">
                <!-- BEGIN IMAGE PARRALAX -->
                <div class="slider-wrapper">
                  <div class="background-wrapper" data-swiper-parallax="20%">
                    <!-- YOUR BACKGROUND IMAGE HERE, YOU CAN ALSO USE IMG with the same classes -->
                    <div data-pages-bg-image="{{asset('storage/'.$slider->img)}}" draggable="false" class="background"></div>
                  </div>
                </div>
                <!-- END IMAGE PARRALAX -->
                <!-- BEGIN CONTENT -->
                <div class="content-layer">
                  <div class="circular_object {{$slider->background}}" data-pages-animation="custom" data-attr="scale" data-start="21" data-end="0" data-duration="500" data-delay="600" data-lg-attr="scale" data-lg-start="26" data-lg-end="0" data-lg-duration="500" data-lg-delay="600" data-vlg-attr="scale" data-vlg-start="35" data-vlg-end="0" data-vlg-duration="500" data-vlg-delay="600">
                  </div>
                  <div class="inner full-height">
                    <div class="container-xs-height full-height">
                      <div class="col-xs-height col-middle text-left">
                        <div class="container">
                          <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 p-l-40 sm-no-padding" data-pages-animation="standard" data-type="transition.slideDownIn" data-duration="600" data-delay="1000" data-md-type="">
                            <h1 class="light text-white sm-text-center">
                              {{$slider->title}}
                            </h1>
                            <p class="fs-12 text-white hint-text sm-text-center">{{$slider->descriptions}}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END CONTENT -->
              </div>
            @endforeach
          @endif
          <!-- END SLIDE -->
        </div>
        <!-- Add Navigation -->
        <!-- Add Navigation -->
        <div class="swiper-navigation swiper-rounded swiper-white-solid swiper-button-prev"></div>
        <div class="swiper-navigation swiper-rounded swiper-white-solid swiper-button-next"></div>
      </div>
    </div>
    <!-- END SLIDER -->
  </section>
  <!-- END JUMBOTRON -->
  {{--Services--}}
  @include('patilas.services')
  {{--End Services--}}
  <!-- BEGIN CONTENT BAR -->
  <section class="p-b-15 p-t-15 bg-master-darker text-center text-white">
    <h3 class="inline text-white xs-m-b-20">{{setting('site.intro')}}</h3>
    <a href="{{route('contactus')}}" class="btn btn-cons btn-bordered m-l-20 xs-no-margin" type="button">More Info</a>
  </section>
  <!-- BEGIN END BAR -->
@endsection

