@extends('layouts.app')

@section('content')
  <section class="jumbotron demo-custom-height-1 full-width" data-pages-bg-image="{{asset('storage/'.$aboutPage->image)}}" data-pages="parallax" data-bg-overlay="black" data-overlay-opacity="0.4" style="background-image: url({{asset('storage/'.$aboutPage->image)}}); background-position: center 46.1538%;">
    <div class="inner full-height" style="transform: translateY(0px);">
      <div class="container-xs-height full-height">
        <div class="col-xs-height col-middle text-left">
          <div class="container">
            <div class="col-sm-6 col-sm-offset-3 sm-m-t-30 sm-p-t-20 sm-p-b-20">
              <h1 class="light text-center text-white xs-p-t-30 sm-p-b-30">
                Digital solutions led by clarity, simplicity &amp; honesty
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-overlay" style="background-color: black; opacity: 0.4;"></div>
  </section>

  <section class="bg-master-lightest p-b-60 p-t-60">
    <div class="container">
      <div class="md-p-l-20 md-p-r-20 xs-no-padding">
        <h5 class="block-title hint-text no-margin">{{$aboutPage->title}}</h5>
        <div class="row">
          <div class="col-sm-5 col-md-4">
            <h1 class="m-t-5">"{{$aboutPage->excerpt}}"</h1>
          </div>
          <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
            <div class="p-t-20 p-l-35 md-p-l-5 md-p-t-15">
              <p>{!! $aboutPage->body!!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('patilas.services')
  
@endsection

@push('script')
  <script type="text/javascript" src="{{asset('/plugins/animateNumber/jquery.animateNumbers.js')}}"></script>
@endpush



 <div class="col-md-4">
              {{--<form role="form"--}}
                    {{--class="form-edit-add"--}}
                    {{--action="@if(isset($data['jurnal_detail_id'])) {{route('putImunisasi', $data['jurnal_detail_id'])}}@else{{route('postImunisasi') }}@endif"--}}
                    {{--method="POST">--}}
              <form role="form"

                    action="{{route('postImunisasi') }}"
                    method="POST">
                <!-- PUT Method if we are editing -->
                {{--@if(isset($data['jurnal_detail_id']))--}}
                  {{--{{ method_field("PUT") }}--}}
                {{--@endif--}}
                {{ csrf_field() }}
                <div class="panel-body">
                  <div class="form-group">
                    <label for="name">Ivent Date </label>
                    <input type="text" class="form-control"
                           name="ivent_date"
                           value="@if(isset($data['eventdate'])){{$data['eventdate']}}@endif">
                    <input type="hidden" name="jurnal_id" value="{{$data['id']}}">
                  </div>

                  <div class="form-group">
                    <label for="name">Jenis Imunisasi </label>
                    <input type="text" placeholder="BCG"
                           class="form-control"
                           name="jenis_imunisasi"
                          @if(isset($data['jenis_imunisasi']))value="{{$data['jenis_imunisasi']}}"@endif>
                  </div>

                  <div class="form-group">
                    <label for="name">Nama Dokter/Rs  </label>
                    <input type="text" placeholder="SILOAM"
                           class="form-control"
                           name="nm_rs"
                           @if(isset($data['nm_rs']))value="{{$data['nm_rs']}}"@endif>
                  </div>

                  <div class="form-group">
                    <label for="name">Lokasi</label>
                    <input type="text" placeholder="Jakarta Barat"
                           class="form-control"
                           name="lokasi"
                           @if(isset($data['lokasi']))value="{{$data['lokasi']}}"@endif>
                  </div>

                  <div class="form-group">
                    <label for="name">Notes</label>
                    <textarea class="form-control" name="notes">@if(isset($data['notes'])){{$data['notes']}}@endif</textarea>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary form-control" type="submit">Save</button>
                  </div>
                </div>

              </form>
            </div>
