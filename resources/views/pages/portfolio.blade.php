@extends('layouts.app')

@section('content')
  <section class="jumbotron demo-custom-height-1 full-width" data-pages="parallax">
    <div class="full-height" data-pages-bg-image="{{asset('images/gallery_hero_1.jpg')}}" data-bg-overlay="black" data-overlay-opacity="0.4" style="background-image: url({{asset('/images/hero_g.jpg')}});">
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
  <section class="p-b-15 p-t-15 bg-white text-center text-white">
    <h3 class="inline ">Beautiful and Grate Project With Happy Client</h3>
    <a href="{{route('contactus')}}" class="btn btn-cons btn-bordered m-l-20 xs-m-b-15 btn-black" type="button">Discover</a>
  </section>
  <section class="p-b-30 p-t-40 bg-master-lighter">
    <div class="container">
      <div class="social-wrapper">
        <!-- START SOCIAL -->
        <div class="social " data-pages="social">
          <div class="feed">
            <!-- START DAY -->
            <div class="day" data-social="day">

              <!-- START ITEM -->
              @if($portfolios)
                @foreach($portfolios as $key => $portfolio)
                  <div class="card share share-other col1" data-social="item">
                <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                </div>
                <div class="card-content">
                  <ul class="buttons ">
                    <li>
                      <a href="#" class="search-toggle"
                         data-toggle="modal"
                         data-id="{{$portfolio->id}}"
                         data-target="#myModal"
                      >
                        <i class="fa fa-expand"></i>
                      </a>
                    </li>
                  </ul>
                  @if(json_decode($portfolio->img_portfolio))
                    @foreach(json_decode($portfolio->img_portfolio) as $file)

                    @endforeach
                      <img alt="Quote" src="{{asset('storage/'.$file)}}" class="lazy">
                  @endif

                </div>
                <div class="card-description">
                  <p>{{$portfolio->description}}</p>
                </div>
                <div class="card-footer clearfix">
                  <div class="time">{{$portfolio->created_at->diffForHumans()}}</div>
                </div>
                <div class="card-header clearfix">
                  <div class="user-pic">
                    <img alt="{{$portfolio->client_name}}" width="33" height="33" data-src-retina="{{asset('storage/'.$portfolio->client_img)}}" data-src="{{asset('storage/'.$portfolio->client_img)}}" src="{{asset('storage/'.$portfolio->client_img)}}">
                  </div>
                  <h5>{{$portfolio->client_name}}</h5>
                  <h6>{{$portfolio->client_address}}</h6>
                </div>
              </div>
                @endforeach
              @endif
              <!-- END ITEM -->
            </div>
            <!-- END DAY -->
          </div>
          <!-- END FEED -->
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header clearfix text-left">
          <a href="#" class="close-icon-light overlay-close text-black fs-16 top-right" data-dismiss="modal">
            <i class="pg-close_line"></i>
          </a>
        </div>
        <div class="modal-body">
          {{--data from ajax --}}
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
@endsection

@push('scripts')
  <script>
      $("#myModal").on("show.bs.modal", function(e) {
          var id = $(e.relatedTarget).data('id');
          $.get( "/portfolio/" + id, function( data ) {
              var html='';
              $.each(data, function(i, item) {
                  html +=item;
              });
              $(".modal-body").html(html);
          });
      });
  </script>
@endpush